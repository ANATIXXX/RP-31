<?php
    session_start();
    if ($_SESSION['user']){
        header('Location: profile.php');
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="directory/mycss.css">
</head>
<body>
<!-- Форма регистрации-->
<form action="hranenie_BD/signup.php" method="post" enctype="multipart/form-data">
    <label>ФИО</label>
    <input type="text" name="Full_name" placeholder="Введите своё полное имя">
    <label>Логин</label>
    <input type="text" name="Login" placeholder="Введите логин">
    <label>Почта</label>
    <input type="email" name="Email" placeholder="Введите свою email">
    <label>Изображение профиля</label>
    <input type="file" name="Avatar">
    <label>Пароль</label>
    <input type="password" name="Password" placeholder="Введите пароль">
    <label>Подтверждение пароля</label>
    <input type="password" name="Password_confirm" placeholder="Подтвердите свой пароль">
    <button>Зарегистрироваться</button>

    <p>
        У вас уже есть аккаунт? - <a href="index.php">Авторизируйтесь</a>
    </p>
    <?php
        if ($_SESSION['message'])
        {
            echo '<p class = "msg">' . $_SESSION['message'] . '</p>';
        }
            unset($_SESSION['message']);
    ?>
</body>
</html

