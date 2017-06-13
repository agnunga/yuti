<?php

session_start();

class Session {

    public static function logged_in($user) {
        return isset($_SESSION[$user]);
    }

    public static function confirm_logged_in($_user) {
        if (!Session::logged_in($_user)) {
            Redirect::to("../login.php");
        }
    }

    public static function logout() {
        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time() - 72000, '/');
        }
        session_unset();
        session_destroy();
        header("Location: ../login.php?rdr=0");
    }
}
