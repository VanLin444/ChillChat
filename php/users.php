<?php
    session_start();

    include_once "config.php";

    $outgoing_id = $_SESSION['unique_id'];

    // Вывод всех пользователей за исключением нас
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id}");
    $output = "";

    if(mysqli_num_rows($sql) == 0){
        $output .= "There are no users available to chat!";
    } elseif(mysqli_num_rows($sql) > 0){
        include "data.php";
    }
    echo $output;
?>