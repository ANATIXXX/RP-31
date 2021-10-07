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
    <!-- Форма авторизации-->
    <form action="hranenie_BD/signin.php" method="post">
        <label>Логин</label>
        <input type="text" name="login">
        <label>Пароль</label>
        <input type="password" name="password">
        <button>Войти</button>
            <p>
                У вас нет аккаунта? - <a href="registr.php">Зарегистрируйтесь</a>
            </p>
        <?php
        if ($_SESSION['message'])
        {
            echo '<p class = "msg">' . $_SESSION['message'] . '</p>';
        }
        unset($_SESSION['message']);
        ?>
        </form>
</body>
</html
