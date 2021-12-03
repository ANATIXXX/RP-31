<?php
require_once 'checkBoxSearch.php';
if (!empty($_POST['nameb'])){
    $autorsSearch = getBookSearch();
}
function getBookSearch()
{
    $nameb = $_POST['nameb'];
    if (!empty($nameb)){
        $pdo = new PDO("mysql:host=localhost;dbname=bookcatalog","root","root");
        $statement = $pdo->prepare("SELECT * FROM `bxa` WHERE `nameb` like '%$nameb%'");
        $statement->execute();
        $nameb = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $nameb;
    }
    else{
        echo "Книги нет в каталоге";
    }
}
?>