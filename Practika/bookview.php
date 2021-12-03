<?php
require_once 'autoriz/BD_autoriz/adminpage/adminaddbook.php';
$books = getBook();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Книжный каталог Booker</title>
    <link rel='stylesheet' href='css/index.css'>
</head>
<body>
<header style="background: #C1E1DC">
    <img src="img/logo.png" class="logo">
    <div class="sitename">
        <h1 style="padding-top: 27px">BOOKER</h1>
    </div>
</header>
<div class="main-content" style="background: ">
    <div class="page-books" style="background: #fbcbc9">
            <div class="book" style="border: 1px black solid; width: 250px; text-align: center; background: white">
                <h2><?= $book['nameb']?></h2>
                <img src="uploadsimg/<?= $book['imgb'];?>" width="200">
                <p><?= $book['description']?></p>
                <p><?= $book['yearofissue']?></p>
                <p><?= $book['autors']?></p>
            </div>
    </div>
</div>
<footer></footer>
</body>
</html>