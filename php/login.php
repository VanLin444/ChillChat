<?php
    session_start();

    include_once "config.php";

    // Основная цель этой функции — защитить сайт от SQL-инъекций.
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Функция mysqli_fetch_assoc() в PHP используется для получения одной строки данных из результата 
    // запроса к базе данных в виде ассоциативного массива. 
    if(!empty($email) && !empty($password)){
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
        $row = mysqli_fetch_assoc($sql);
        // Проверка на наличие указанной почты в БД и правильности пароля
        if((mysqli_num_rows($sql) > 0) && (password_verify($password, $row['password']))){
            $status = "Active now";
            $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
            if($sql2){
                $_SESSION['unique_id'] = $row['unique_id'];
                echo "success";
            }
        } else{
            echo "Неправильный email или пароль!";
        }
    } else{
        echo "Заполните все поля!";
    }
?>