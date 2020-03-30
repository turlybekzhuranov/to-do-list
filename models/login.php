<?php
    session_start();
    $incorrectInfo = '';
    if ( isset($_POST['login']) ) {
        $login = $_POST['userName'];
        $password = $_POST['password'];
        if ($login == 'admin' && $password == '123'){
            $_SESSION['login'] = $login;
            header('Location: /');
            exit();
        }
        else {
            $incorrectInfo = 'Неправильный логин или пароль. Повторите снова';
        }
    }