<?php
//    session_start();
   require_once 'connect.php';
    $Full_name = $_POST['Full_name'];
    $Login = $_POST['Login'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Password_confirm = $_POST['Password_confirm'];

    if($Password === $Password_confirm){
        addUser($Full_name, $Login, $Email, $Password);
        echo "Регистрация прошла успешно";
        header('Location: ../index.php');

//        $_SESSION['message'] = 'Регистрация прошла успешно';
//        header('Location: ../registr.php');
//        } else{
//            $_SESSION['message'] = 'Пароли не совпадают';
//            header('Location: ../registr.php');
    }
    else{
        echo "Пароли не совпадают";
    }


