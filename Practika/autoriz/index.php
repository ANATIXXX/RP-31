<!-- php
session_start();
if ($_SESSION['user']){
    header('Location: profile.php');
} -->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="../css/autoriz.css">
</head>
<body style="padding-top: 350px">
    <form action="BD_autoriz/signin.php" method="post">
        <a href="../index.php">Выход на главную</a>
        <label>Логин</label>
        <input type="text" name="Login">
        <label>Пароль</label>
        <input type="password" name="Password">
        <button>Войти</button>
            <p>
                У вас нет аккаунта? - <a href="registr.php">Зарегистрируйтесь</a>
            </p>
        </form>
</body>
</html
