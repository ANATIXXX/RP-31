<?php
    // session_start();
    require_once 'connect.php';

    $Login = $_POST['Login'];
    $Password = ($_POST['Password']);

    getUser($Login,$Password);