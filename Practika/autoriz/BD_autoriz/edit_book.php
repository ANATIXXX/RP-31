<?php
require_once "adminpage/adminaddbook.php";
$img = $_FILES['imgb'];
$filename = uploadeImage($_FILES['imgb']);
$temp_nameb = $_POST['nameb'];
$temp_id = $_POST['IDB'];
$temp_description = $_POST['description'];
$temp_yearofissue = $_POST['yearofissue'];
$temp_autors = $_POST['autors'];

if (empty($img['name'])) {
    $pdo = new PDO("mysql:host=localhost;dbname=bookcatalog","root","root");
    $statement = $pdo->prepare("UPDATE autors SET `autors`='$temp_autors', `nameb`='$temp_nameb'");
    $statement->execute();

    $pdo = new PDO("mysql:host=localhost;dbname=bookcatalog","root","root");
    $statement = $pdo->prepare("UPDATE books SET `nameb`='$temp_nameb',`description`='$temp_description',`yearofissue`='$temp_yearofissue', `autors`='$temp_autors' where `IDB`='$temp_id' ");
    $statement->execute();

} else {
    $pdo = new PDO("mysql:host=localhost;dbname=bookcatalog","root","root");
    $statement = $pdo->prepare("UPDATE books SET `nameb`='$temp_nameb',`description`='$temp_description',`yearofissue`='$temp_yearofissue', `autors`='$temp_autors'");
    $statement->execute();
}
$id = $pdo->prepare("SELECT * FROM bxa WHERE `nameb`='$temp_nameb' and `autors`='$temp_autors'");
$id->execute();
$ids = $id->FetchAll(PDO::FETCH_ASSOC);
foreach ($ids as $id) {
    $id_user = intval($id['id_autor']);
    $author = $pdo->prepare("UPDATE author SET `nameb`='$temp_nameb',`autors`='$temp_autors'");
    $author->execute();
}
header("Location: adminpage/adminpage.php");