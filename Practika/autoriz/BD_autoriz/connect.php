<?php
	function addUser($Full_name, $Login, $Email, $Password)
	{
	    $pdo = new PDO("mysql:host=localhost;dbname=bookcatalog","root","root");
	    $sql = "INSERT INTO user(Full_name, Login, Email, Password) VALUE (:Full_name, :Login, :Email, :Password)";

	    $statement = $pdo -> prepare($sql);
	    $statement -> bindParam("Full_name",$Full_name);
	    $statement -> bindParam("Login", $Login);
	    $statement -> bindParam("Email", $Email);
	    $statement -> bindParam("Password", $Password);
	    $statement -> execute();
	}

    function getUser($Login, $Password)
    {
       $pdo = new PDO("mysql:host=localhost;dbname=bookcatalog","root","root");
       $statement = $pdo->prepare("SELECT * FROM `user` WHERE `Login` = '$Login' and `Password` = '$Password'");
       $statement->execute();
       $user = $statement->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($user)){
            echo "круто";
        }
        else if ($Login = "admin" && $Password = "admin"){
            header('Location: adminpage.php');
        } else{
        	echo "Неверный логин или пароль";
        }

    }