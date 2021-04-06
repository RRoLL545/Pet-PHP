<?php
    include 'templates/passcard.php';
    
    $connect = mysqli_connect($host, $user, $password) 
        or die("Ошибка подключения" . mysqli_error($connect));
    
    if (!mysqli_error($connect)) {
        //echo "Подключение проведено успешно!\n <br/>";
        
    }
    
    $select = mysqli_select_db($connect, $database);
    if (!$select) {
    die("Невозможно выбрать базу данных: <br />". mysqli_error());
    
    }
    else {
        //echo ("Выбрана база данных $database <br/>" );
        
    }
?>