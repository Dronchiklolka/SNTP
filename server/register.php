<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/helpers/connection.php';
    $login = $_POST['login'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $usersCollection = $database->users;
        
    $usersCollection->insertOne([
        'login' => $login,
        'password' => $password,
        'email' => $email
    ]);

    session_start(); 
    $_SESSION['login'] = $login;
    $_SESSION['password'] = $password;
    $_SESSION['email'] = $email;

    header('Location: http://localhost/');
?>