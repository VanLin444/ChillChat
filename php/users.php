<?php
    session_start();
    include_once "config.php";
    $sql = mysqli_query($conn, "SELECT * FROM users");
    $output = "";

    if(mysqli_num_rows($sql) == 1){
        $output .= "Нет пользователей, доступных для чата!";
    } elseif(mysqli_num_rows($sql) > 0){
        include "data.php";
    }
    echo $output;
?>