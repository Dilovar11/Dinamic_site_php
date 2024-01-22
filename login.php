<?php 
include("path.php"); 
include("app/controllers/users.php"); 
?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Blog</title>
        <link href="bootstrap_5.3.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
    </head>

    <body>

        <!----------------------------------------- ХИДДЕР СТРАНИЦЫ ------------------------------------------------> 

        <?php include("app/include/header.php"); ?>

        <!----------------------------------------- ФОРМА ВХОДА СТРАНИЦЫ ------------------------------------------------> 
        <br>

        
        <div class="form-container">
            <h2>Форма входа</h2>
            <div class="errMsg">
                <p><?=$errMsg?></p>
            </div>
            <form  method="Post" action="login.php">
                <div class="form-group">
                    <label for="email">Ваша почта (при регистрации):</label>
                    <input type="email" value="<?=$email?>" name="email" class="form-control" id="email" placeholder="Введите email">
                </div>
                <div class="form-group">
                    <label for="password">Пароль:</label>
                    <input type="password" name="password_1" class="form-control" id="password" placeholder="Введите пароль">
                </div>
                <button type="submit" name="btn-login" class="btn btn-primary">Войти</button>
                <a href="registration.php">Зарегистрироваться</a>
            </form>
        </div>
       


        <script src="bootstrap_5.3.2/js/bootstrap.bundle.min.js"></script>
    </body>
</html>