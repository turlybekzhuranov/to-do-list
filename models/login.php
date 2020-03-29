<?php
    session_start();
    if ( isset($_POST['login']) ) {
        $login = $_POST['userName'];
        $password = $_POST['password'];
        if ($login == 'admin' && $password == '123'){
            $_SESSION['login'] = $login;
            header('Location: /');
            exit();
        }
        else {
            echo "Incorrect login or password. Try again";
        }
    }