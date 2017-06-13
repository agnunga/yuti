<?php

require_once '../process/session.php';
require_once '../process/config.php';
require_once '../process/redirect.php';
require_once '../process/database.php';
(Session::logged_in('email') ? '' : Redirect::to("../login.php?rdr=100"));

class User {

    function __construct() {
        
    }

    function viewMe() {
        if (isset($_SESSION['email'])) {
            global $db;
            $query = "SELECT *  FROM users WHERE email = ?";
            $type_array = array('s');
            $data = array($_SESSION['email']);
            $res1 = $db->select($query, $type_array, $data);
            foreach ($res1 as $row) {
                return $row;
            }
        }
    }

    function viewMatch() {
        global $db;
//        $myDob = explode("/", $data['dob']);
//        $matchMinAge = date('Y') - $myDob[2];
//        $matchMaxAge = date('Y') - $myDob[2];
//        $minDob = date('Y') - $data['min_age'];
//        $maxDob = date("Y") - $data['max_age'];
//        $query = "SELECT *  FROM users WHERE dob BETWEEN ? AND ? AND min_age = ? AND max_age = ?";
//        $type_array = array('s', 's', 's', 's');
//        $data = array($matchMinAge, $matchMaxAge, $minDob, $maxDob);

        $query = "SELECT *  FROM users";
        $type_array = array();
        $data = array();
        $res = $db->select($query, $type_array, $data);
        if (!empty($res)) {
            return $res;
        } else {
            echo 'No records found';
        }
    }

    function viewById($id) {
        global $db;
        $query = "SELECT *  FROM users WHERE id = ?";
        $type_array = array('i');
        $data = array($id);
        $res = $db->select($query, $type_array, $data);
        if (!empty($res)) {
            return $res;
        } else {
            echo 'No records found';
        }
    }

    public function change_pwd($email) {
        if (isset($_POST['change_pwd'])) {
            global $db;
            $current = sha1($_POST['current']);
            $new = sha1($_POST['new']);
            $confirm = sha1($_POST['confirm']);

            //First confirm if the new password and confirm password are same with the case.
            switch ($new) {
                case $confirm: {

                        //if they are equall, go ahead and confirm if the entered current password is the true existing password
                        $query = "SELECT email, password FROM users WHERE email = ? AND password = ?";
                        $type_array = array('s', 's');
                        $data_array = array($email, $current);

                        $res = $db->select($query, $type_array, $data_array);
                        if (!empty($res)) {
//                            echo '<br/>Correct Current password.';
                            foreach ($res as $row) {
                                $email = $row[$user_col];
                                $pwd = $row[$pwd_col];
//                                echo $user . ' AND ' . $pwd;
                            }
                            $query = "UPDATE users SET password = ? WHERE email = ?";
                            $type_array = array('s', 'i');
                            $data_array = array($new, $email);

                            if ($db->insert($query, $type_array, $data_array) == 1) {
                                echo '<br/>Password changed successfully.';
                            } else {
                                echo '<br/>FAILED to change password!';
                            }
                        } else {
                            echo '<br/>Wrong current password.';
                        }
                        break;
                    }
                default :
                    echo 'New and Confirm Passwords do not match';
            }
        } else {
            require_once '../form/_changePassword.php';
        }
    }

    public function confirmPayment($data) {
        global $db;
        $query = "INSERT INTO claimed_payments (user_id, phone, email, amount, transaction_no, payment_mode, payment_time) "
                . " VALUES (?,?,?,?,?,?, CURRENT_TIMESTAMP) ";

        $type_array = array('i', 's', 's', 's', 's', 's');

        if ($db->insert($query, $type_array, $data) == 1) {
            Redirect::to("index.php?sub=1");
        } else {
            echo "Subscription failed!";
        }
    }

}

$user = new User();
