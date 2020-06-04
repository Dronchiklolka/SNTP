<?php
    $url = $_GET['url'];
    $id = $_GET['id'];

    switch ($url) {
        case 'courses':
            include_once '../pages/courses/courses.php';
            break;
        case 'lessons':
            include_once '../pages/lessons/lessons.php';
            break;
            
        default:
            # code...
            break;
    }
?>
