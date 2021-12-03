<?php
if (empty($_POST['nameb']) && !empty($_POST['autors'])){
    $autorsSearch = checkBoxAutors();
}
else if (empty($_POST['autors']) && empty($_POST['nameb'])){
}
function checkBoxAutors(){
    $autors = $_POST['autors'];
    if(isset($_POST['autors']) && $_POST['autors']!=""){
        $pdo = new PDO("mysql:host=localhost;dbname=bookcatalog","root","root");
        $statement = $pdo->prepare("SELECT * FROM `autors` WHERE `autors` = '$autors'");
        $statement->execute();
        $autors = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $autors;
    }
}

?>