<?php
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = 'root';
    $dbName = 'chill_chat';
    $dbPort = '3306';

    $conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName, $dbPort);

    if (!$conn) die("Ошибка подключения к БД - " . mysqli_connect_error());

?>
