<?php
    //Указываем кодировку
    header('Content-Type:text/html;charset=utf-8');

    $server="localhost";//Имя хоста
    $username="root";//Имя пользователя БД
    $password="";//Пароль пользователя
    $database="reg";//Имя БД

    //Подключаемся к БД через MySQLi
    $mysqli=new mysqli($server, $username,$password,$database);

    //Проверяем, успешность соединения
    if($mysqli->connect_errno){
        die("<p><strong>Ошибка подключения к БД </string></p><p><strong>Код ошибки: </strong>" 
            . $mysqli->connect_errno ." </p><p><strong>Описание ошибки:</strong> "
                .$mysqli->connect_error."</p>");

    // Устанавливаем кодировку подключения
    $mysqli->set_charset('utf8');
 
    //URL сайта
    $address_site = "http://testsite.local";
    }
?>