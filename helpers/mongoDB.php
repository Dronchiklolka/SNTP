<?php
    require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
    $database = (new MongoDB\Client)->sntp;
?>