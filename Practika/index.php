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
		<div class="autoriz-reg" style="padding-top: 25px">
		<p><a href="autoriz/index.php" style="color: black; text-decoration: none">Войти</a></p>
            <a href="autoriz/BD_autoriz/adminpage/adminpage.php" style="cursor: pointer; text-decoration: none; color: black">Админ панель</a>
		</div>
	</header>
	<div class="main-content" style="background: ">
		<div class="choose-category" style="background: #EED8C9">
			<h1 class="zagkat">Каталог</h1>
			<hr>
			<form action="booksearch/usersearchbook.php" method="post">
			<input type="text" name="nameb" placeholder="Введите название книги" class="searchcat">
			<button class="searchbutton" style="cursor: pointer; background: white">Поиск</button>
			</form>
			<hr>
			<div class="choose">
				<p>Выберите жанр:</p>
				<label for="genre">Эпопея: </label><input type="checkbox" id="genre" name="epopee" style="margin-left: 15px"><br>
  				<label for="genre">Роман: </label><input type="checkbox" id="genre" name="novel" style="margin-left: 22px"><br>
  				<label for="genre">Комедия: </label><input type="checkbox" id="genre" name="novel">
  				<p>Выберите автора:</p>
                <form method="post" action="booksearch/usersearchbook.php">
  				<label for="autors">А.С Пушкин</label><input type="checkbox" id="autors" name="autors" value="А.С Пушкин" style="margin-left: 20px"><br>
  				<label for="autors">Л.Н Толстой</label><input type="checkbox" id="autors" name="autors" value="Л.Н Толстой" style="margin-left: 18px"><br>
  				<label for="autors">Н.В Гоголь</label><input type="checkbox" id="autors" name="autors" value="Н.В Гоголь" style="margin-left: 29px"><br>
                <button class="searchbutton" style="cursor: pointer; background: white">Поиск</button>
                </form>
			</div>
		</div>
		<div class="page-books" style="background: #fbcbc9">
        <?php foreach ($books as $book):?>
            <div class="book" style="border: 1px black solid; width: 250px; text-align: center; background: white">
                <h2><?= $book['nameb']?></h2>
                <img src="uploadsimg/<?= $book['imgb'];?>" width="200">
                <p>Описание:</p>
                <p><?= $book['description']?></p>
                <p>Дата выпуска: <?= $book['yearofissue']?></p>
                <p>Автор: <?= $book['autors']?></p
                </form>
            </div>
        <?php endforeach;?>
		</div>
	</div>
<footer></footer>
</body>
</html>