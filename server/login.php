<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/helpers/mysqlDB.php';
    $login = $_POST['login'];
    $password = $_POST['password'];
    $email = $_POST['email'];
  

    $queryString = "SELECT * FROM users WHERE login = $login";
    $queryResult = mysqli_query($mysqlConnection, $queryString);
    $user = mysqli_fetch_array($queryResult, MYSQLI_ASSOC);

    if ($user && $user['password'] == $password) {
        session_start(); 
        $_SESSION['login'] = $login;
        $_SESSION['password'] = $password;
        $_SESSION['email'] = $email;

        header('Location: http://dron69rus.beget.tech/');
    }
?>