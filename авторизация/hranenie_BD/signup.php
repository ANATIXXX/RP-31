<?php
    session_start();
    require_once 'connect.php';

    $full_name = $_POST['Full_name'];
    $login = $_POST['Login'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $password_confirm = $_POST['Password_confirm'];

if($password === $password_confirm){
    $password = md5($password);
    $path = 'uploads/' . time() . $_FILES['avatar']['name'];
    if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)){
        $_SESSION['message'] = 'Ошибка при загрузке изображения';
        header('Location: ../registr.php');
    }
    mysqli_query($connect,"INSERT INTO `users` (`id`, `Full_name`, `Login`, `Email`, `Password`, `Avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')");
    $_SESSION['message'] = 'Регистрация прошла успешно';
    header('Location: ../registr.php');
} else{
    $_SESSION['message'] = 'Пароли не совпадают';
    header('Location: ../registr.php');
}


