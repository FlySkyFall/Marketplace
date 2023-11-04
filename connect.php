<?php
    $connect = "localhost";
    $root ="SkyFall";
    $pass = "danchik2282271";
    $db = "Marketplace";

    $link = mysqli_connect($connect, $root, $pass, $db);

    if (!$link){
        echo "Ошибка. Нет соединения";
        echo '<br>';
        echo "Код ошибки: " . mysqli_connect_errno();
        echo '<br>';
        echo "Текст ошибки: " . mysqli_connect_error();
        exit; 
    }


    echo '<br>';
?>