<?php


class Validation{

    private function validateData($fullName, $email, $password) {
        if(empty($fullName) || empty($email) || empty($password)) {
            return false;
        }

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }

        if(strlen($password) < 8) {
            return false;
        }

        return true;
    }
}