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
        <section class="form login">
            <header>ChillChat</header>
            <form action="#">
                <div class="error-txt">Здесь выводится сообщение об ошибке</div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" placeholder="Enter your email">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" placeholder="Enter Password">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Not yet signed up? <a href="#">Signup now</a></div>
        </section>
    </div>
    <script src="./js/pass-show-hide.js"></script>
</body>
</html>