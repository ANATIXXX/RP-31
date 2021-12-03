<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href='../css/autoriz.css'>
</head>
<body style="padding-top: 230px">
<form action="BD_autoriz/signup.php" method="post" enctype="multipart/form-data">
    <label>ФИО</label>
    <input type="text" name="Full_name" placeholder="Введите своё имя">
    <label>Логин</label>
    <input type="text" name="Login" placeholder="Введите логин">
    <label>Почта</label>
    <input type="email" name="Email" placeholder="Введите свой email">
    <label>Пароль</label>
    <input type="password" name="Password" placeholder="Введите пароль">
    <label>Подтверждение пароля</label>
    <input type="password" name="Password_confirm" placeholder="Подтвердите свой пароль">
    <button>Зарегистрироваться</button>

    <p>
        У вас уже есть аккаунт? - <a href="index.php">Авторизируйтесь</a>
    </p>
</form>
</body>
</html

