<?php
require_once 'adminaddbook.php';

$filename = uploadeImage($_FILES['imgb']);
addBook($_POST['nameb'], $filename, $_POST['description'], $_POST['yearofissue'], $_POST['autors']);
addAutors($_POST['autors'], $_POST['nameb']);
addBXA($_POST['nameb'], $_POST['autors']);
header("Location: adminpage.php");
