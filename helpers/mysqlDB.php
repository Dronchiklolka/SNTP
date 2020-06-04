<?php
    require_once("config.php");

    // подключаемся к mysql
    $mysqlConnection = mysqli_connect($config['db']['server'], $config['db']['username'], $config['db']['password'], $config['db']['name']);

    mysqli_set_charset($mysqlConnection, "utf8");
    
    if ($mysqlConnection == false) {
        echo 'Не удалось подключиться к базе данных<br>';
        echo mysqli_connect_error();
        exit();
    }
?>