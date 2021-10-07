<?php
    session_start();
    if (!$_SESSION['user']){
        header('Location: index.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="directory/mycss.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form>
        <img src="<?= $_SESSION['user']['Avatar']?>" width="200" alt="">
        <h2 style="margin: 10px 0;"><?= $_SESSION ['user']['full_name'] ?>
            <a href="#"><?= $_SESSION['user']['email'] ?> </a>
            <a href="hranenie_BD/logout.php" class = "logout">Выход</a>
    </form>
</body>
</html>