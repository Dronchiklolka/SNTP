<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/helpers/mysqlDB.php';
    $login = $_POST['login'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    
    
    $queryString = "INSERT INTO users VALUES ('$login', '$password', '$email')";
    $queryResult = mysqli_query($mysqlConnection, $queryString);

    session_start(); 
    $_SESSION['login'] = $login;
    $_SESSION['password'] = $password;
    $_SESSION['email'] = $email;

    header('Location: http://dron69rus.beget.tech/');
?>