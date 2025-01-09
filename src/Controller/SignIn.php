<?php

use src\Model\User;
require_once __DIR__ . '/../../vendor/autoload.php';




class SignIn{





public function signin() {


    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        echo $email.$password;
        $user = new User;
        $userData = $user->signin($email, $password);
        if ($userData) {
            $_SESSION['user_id'] = $userData['id'];
            $_SESSION['username'] = $userData['username'];
            $_SESSION['role'] = $userData['role'];
            header('Location: ../../public/index.php');
            exit();
        } else {
            echo "Email ou mot de passe incorrect.";
        }
    }
        }
    }


    $sinup = new SignIn();
    $sinup->signin();