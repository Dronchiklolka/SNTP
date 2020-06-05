<?php
    $url = $_GET['url'];
    // id принадлежит конкретному курсу. переименуешь потом в courseId
    $id = $_GET['id'];
    
    // когда переходим по ссылке файла который не существует выполняется файл 
    //и дальше нельзя зайти и если не могли найти то эти глобальные переменые юрл берёт из htcss //

   //смотрим на url если он = курсам то переходим на страницу курсов а если lessons то к ним. // 
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
