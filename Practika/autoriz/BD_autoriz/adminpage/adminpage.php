<?php
require_once 'adminaddbook.php';

$books = getBook();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>adminpanel</title>
    <link rel='stylesheet' href='../../../css/autoriz.css'>
    <link rel='stylesheet' href='../../../css/index.css'>
</head>
<body>
    <div class="apg">
        <form class="apg-creator" action="adminpagecreator.php" method="post" enctype="multipart/form-data">
            <a href="../../../index.php">Возврат на главную страницу</a>
            <h1>Добавить книгу в каталог</h1>
            <label>Название книги</label>
            <input type="text" name="nameb">
            <label>Изображение обложки</label>
            <input type="file" name="imgb">
            <label>Краткое описание</label>
            <input type="text" name="description">
            <label>Год выпуска</label>
            <input type="text" name="yearofissue">
            <label>Автор</label>
            <input type="text" name="autors">
            <button>Добавить книгу в каталог</button>
        </form>
        <div class="apg-books">
        <?php foreach ($books as $book):?>
            <div class="book" style="border: 1px black solid; width: 250px; height: 500px; text-align: center; margin-right: 30px">
                <h2><?= $book['nameb']?></h2>
                <img src="../../../uploadsimg/<?= $book['imgb'];?>" width="200">
                <p><?= $book['description']?></p>
                <p><?= $book['yearofissue']?></p>
                <p><?= $book['autors']?></p>
                <a href="#modalwindow">Редактировать</a>
            </div>
        <?php endforeach;?>
        </div>
    </div>
    <div id="modalwindow">
        <div id="okno" style="color: black">
            <form action="../edit_book.php" method="post" enctype="multipart/form-data">
                <label>Название книги</label>
                <input type="text" name="nameb">
                <label>Изображение обложки</label>
                <input type="file" name="imgb">
                <label>Краткое описание</label>
                <input type="text" name="description">
                <label>Год выпуска</label>
                <input type="text" name="yearofissue">
                <label>Автор</label>
                <input type="text" name="autors">
                <button>Отправить</button>
            </form>
            <a href="#" class="close">Закрыть окно</a>
        </div>
    </div>
</body>
</html>