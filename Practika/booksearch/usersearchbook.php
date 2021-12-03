<?php
require_once 'indexSearchBook.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Книжный каталог Booker</title>
    <link rel='stylesheet' href='../css/index.css'>
</head>
<body>
<header>
    <img src="../img/logo.png" class="logo">
    <div class="sitename">
        <h1><a href="../index.php" style="text-decoration: none; color: black">BOOKER</a></h1>
    </div>
    <div class="autoriz-reg">
        <p><a href="../autoriz/index.php">Войти</a></p>
        <a href="../autoriz/BD_autoriz/adminpage/adminpage.php">Админ панель</a>
    </div>
</header>
<div class="main-content">
    <div class="choose-category">
        <h1 class="zagkat">Каталог</h1>
        <hr>
        <form action="usersearchbook.php" method="post">
            <input type="text" name="nameb" placeholder="Введите название книги" class="searchcat">
            <button class="searchbutton">Поиск</button>
        </form>
        <hr>
        <div class="choose">
            <p>Выберите жанр:</p>
            <label for="genre">Эпопея: </label><input type="checkbox" id="genre" name="epopee"><br>
            <label for="genre">Роман: </label><input type="checkbox" id="genre" name="novel"><br>
            <label for="genre">Комедия: </label><input type="checkbox" id="genre" name="novel">
            <p>Выберите автора:</p>
            <form method="post" action="usersearchbook.php">
                <label for="autors">А.С Пушкин</label><input type="checkbox" id="autors" name="autors" value="А.С Пушкин"><br>
                <label for="autors">Л.Н Толстой</label><input type="checkbox" id="autors" name="autors" value="Л.Н Толстой"><br>
                <label for="autors">Н.В Гоголь</label><input type="checkbox" id="autors" name="autors" value="Н.В Гоголь">
                <button class="searchbutton">Поиск</button>
            </form>
        </div>
    </div>
    <div class="page-books">
        <h1 style="text-align: center">Результаты поиска:</h1>
        <?php if(!empty($booksearch)): ?>
        <? foreach ($booksearch as $bookssearch): ?>
            <div style="border: 1px black solid; width: 200px; text-align: center">
                <h2><?= $bookssearch['nameb']?></h2>
                <p><?= $bookssearch['autors']?></p>
            </div>
        <? endforeach;?>
        <?php endif; ?>
        <?php if(!empty($autorsSearch)): ?>
        <? foreach ($autorsSearch as $autorssearch):?>
            <div style="border: 1px black solid; width: 200px; text-align: center">
                <h2><?= $autorssearch['nameb']?></h2>
                <p><?= $autorssearch['autors']?></p>
            </div>
        <? endforeach;?>
        <?php endif; ?>
    </div>
</div>
</body>
</html>