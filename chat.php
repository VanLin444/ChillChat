<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>ChillChat</title>
</head>
<body>
    <div class="wrapper">
        <section class="chat-area">
            <header>
                <?php
                    include_once "/php/config.php";
                    $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
                    if(mysqli_num_rows($sql) > 0){
                        $row = mysqli_fetch_assoc($sql);
                    }
                ?>    
                <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                <img src="img/<?php echo $row['image'] ?>" alt="avatar">
                <div class="details">
                    <span><?php echo $row['fname'] . " " . $row['lname']?></span>
                    <p><?php echo $row['status']?></p>
                </div>
            </header>
            <div class="chat-box">
                
            </div>
            <form action="#" class="typing-area">
                <input tepe="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
                <input tepe="text" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
                <input type="text" name="message" class="input-field" placeholder="Write a message...">
                <button><i class="fab fa-telegram-plane"></i></button>
            </form>
            <script>
                var userId = "<?php echo $_SESSION['unique_id'] ?>";
            </script>
        </section>
    </div>

    <script src="js/chat.js"></script>
    <script src="js/activity.js"></script>
</body>
</html>
