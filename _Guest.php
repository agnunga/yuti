<?php

require_once './process/session.php';
require_once './process/config.php';
require_once './process/redirect.php';
require_once './process/database.php';

(Session::logged_in('email') ? Redirect::to("./u/index.php?rdr=100") : '');

class Guest {

    function __construct() {
        
    }

    function login($data) {
        global $db;
        $query = "SELECT id, fullname, gender, email, password  FROM users WHERE email = ? AND password = ?";
        $type_array = array('s', 's');

        $res = $db->select($query, $type_array, $data);
        if (!empty($res)) {
            foreach ($res as $row) {
                $_SESSION['user_id'] = $row['id'];
                $_SESSION["email"] = $row['email'];
                $_SESSION['interest'] = $row['gender'];
                $fullname = explode(" ", $row['fullname']);
                $_SESSION['first_name'] = $fullname[0];
                echo 'Login success';
                Redirect::to("./u");
            }
        } else {
            echo 'Wrong username or password!';
        }
    }

    public function register($guestData) {
        global $db;
        $query = "INSERT INTO users "
                . " (gender,min_age,max_age,location,dob,fullname,email,password,drinking,religion, "
                . " ethnicity,employment,build,smoking,children,education,profession,essay,image)"
                . " VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $type_array = array('s', 'i', 'i', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's');

        if ($db->insert($query, $type_array, $guestData) == 1) {
            Redirect::to("login.php?reg=1");
        } else {
            echo "registration failed!";
        }
    }

    public function view() {
        global $db;
        $result = $db->select($query, $a_param_type, $param_value);
        foreach ($r as $result) {
            
        }
    }

}

$guest = new Guest();
