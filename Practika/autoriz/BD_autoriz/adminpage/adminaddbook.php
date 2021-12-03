<?php
function uploadeImage($imgb)
{
    $extencion = pathinfo($imgb['name'], PATHINFO_EXTENSION);
    $filename = uniqid() . "." . $extencion;
    move_uploaded_file($imgb['tmp_name'], "../../../uploadsimg/".$filename);
    return $filename;
}

function addBook($nameb, $filename, $description, $yearofissue, $autors)
{
    $pdo = new PDO("mysql:host=localhost;dbname=bookcatalog","root","root");
    $sql = "INSERT INTO books(nameb, imgb, description, yearofissue, autors) VALUE (:nameb, :imgb, :description, :yearofissue, :autors)";

    $statement = $pdo -> prepare($sql);
    $statement -> bindParam("nameb",$nameb);
    $statement -> bindParam("imgb",$filename);
    $statement -> bindParam("description",$description);
    $statement -> bindParam("yearofissue",$yearofissue);
    $statement -> bindParam("autors",$autors);
    $statement -> execute();
}
function addAutors($autors, $nameb){
    $pdo = new PDO("mysql:host=localhost;dbname=bookcatalog","root","root");
    $sql = "INSERT INTO autors(autors, nameb) VALUE (:autors, :nameb)";

    $statement = $pdo -> prepare($sql);
    $statement -> bindParam("autors",$autors);
    $statement -> bindParam("nameb",$nameb);
    $statement -> execute();
}
function addBXA($nameb, $autors){
    $pdo = new PDO("mysql:host=localhost;dbname=bookcatalog","root","root");
    $sql = "INSERT INTO bxa(nameb, autors) VALUE(:nameb, :autors)";

    $statement = $pdo -> prepare($sql);
    $statement -> bindParam("nameb", $nameb);
    $statement -> bindParam("autors", $autors);
    $statement -> execute();
}
function getBook()
{
    $pdo = new PDO("mysql:host=localhost;dbname=bookcatalog","root","root");
    $statement = $pdo -> prepare("SELECT * FROM books");
    $statement -> execute();
    $books = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $books;
}
