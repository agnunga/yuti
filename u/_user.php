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
        $where = "";
        $type = array();
        $data = array();

        $where2 = " WHERE gender = ? OR gender = ? AND id != ?";
        $type2 = array('i', 'i', 'i');

        $where4 = " WHERE gender = ? OR gender = ? OR gender = ? OR gender = ?  AND id != ? ";
        $type4 = array('i', 'i', 'i', 'i', 'i');

        switch ($_SESSION['interest']) {

            case 1: {
                    $where = $where2;
                    $type = $type2;
                    $data = array(4, 6, $_SESSION['user_id']);
                    break;
                } case 2: {
                    $where = $where2;
                    $type = $type2;
                    $data = array(2, 3, $_SESSION['user_id']);
                    break;
                } case 3: {
                    $where = $where4;
                    $type = $type4;
                    $data = array(2, 3, 4, 6, $_SESSION['user_id']);
                    break;
                } case 4: {
                    $where = $where2;
                    $type = $type2;
                    $data = array(1, 3, $_SESSION['user_id']);
                    break;
                } case 5: {
                    $where = $where2;
                    $type = $type2;
                    $data = array(5, 6, $_SESSION['user_id']);
                    break;
                } case 6: {
                    $where = $where4;
                    $type = $type4;
                    $data = array(1, 3, 5, 6, $_SESSION['user_id']);
                    break;
                } default : {
                    
                }
        }

//        echo 'G ' . $_SESSION['interest'] . ' <br/>';
//        echo '$where ' . $where . ' <br/>';
//        echo '$type ';
//        print_r($type);
//        echo '$data ';
//        print_r($data);

        $query = "SELECT *  FROM users " . $where;
        $res = $db->select($query, $type, $data);
        if (!empty($res)) {
            return $res;
        } else {
            echo 'No match found';
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

    public function isRecordInAPI($transaction_id) {
        global $db;
        $query = "SELECT *  FROM api_payments where transaction_no = ? AND claimed = 0";
        $type_array = array('s');
        $data = array($transaction_id);
        $res = $db->select($query, $type_array, $data);
        if (!empty($res)) {
            return $res;
        } else {
            return null;
        }
    }

    public function confirmPayment($data) {

        global $user;
        $transaction_id = $data[4];
        if ($user->isRecordInAPI($transaction_id) != null) {
            global $db;
            $query = "INSERT INTO claimed_payments (user_id, phone, email, amount, transaction_no, payment_mode, payment_time) "
                    . " VALUES (?,?,?,?,?,?, CURRENT_TIMESTAMP) ";

            $type_array = array('i', 's', 's', 's', 's', 's');

            if ($db->insert($query, $type_array, $data) == 1) {
                $query = "UPDATE api_payments SET claimed = 1 WHERE transaction_no = ?";
                $type_array = array('s');
                $data = array($transaction_id);
                $res = $db->update($query, $type_array, $data);
                if ($res != null) {
                    if (isset($_SESSION['go_to']) && $_SESSION['go_to'] != "") {
                        Redirect::to($_SESSION['go_to']);
                    } else {
                        Redirect::to("index.php?sub=1");
                    }
                } else {
                    Redirect::to("index.php?sub=0");
                }
            } else {
                echo "Subscription failed!";
            }
        } else {
            echo 'Failed!Confirm Transaction Number and try again';
            return FALSE;
        }
    }

    function viewPayment() {
        global $db;
        $query = "SELECT *  FROM claimed_payments where user_id = ?";
        $type_array = array('i');
        $user_id = $_SESSION['user_id'];
        $data = array($user_id);
        $res = $db->select($query, $type_array, $data);
        if (!empty($res)) {
            return $res;
        } else {
            return null;
        }
    }

    function isSubscriptionActive() {
        global $user;
        if ($user->viewPayment() != null) {
            $_SESSION["subscription"] = 'premium';
            return true;
        } else {
            $_SESSION["subscription"] = '









                

          

        

          

        

        ';
            return FALSE;
        }
    }

}

$user = new User();
