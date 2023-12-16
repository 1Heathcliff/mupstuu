<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
        <div class="cap">
            <img src="asset/img/logoo.svg" alt="">
            <div class="nav">
                <a href="main.html">Главная</a>
                <a href="o_predpriatie.html">О предприятии</a>
                <a href="">Предложение</a>
                <a href="login.php">Войти</a>
            </div>
        </div>
        <div class="header_img">
            <img src="asset/img/main_image.png" alt="">
        </div>
    </header>
    <br><br>
  <div class="header">
       
  </div>
         
  <form method="post" action="login.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" >
        </div>
        <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
        </div>
        <div class="input-group">
                <button type="submit" class="btn" name="login_user">Login</button>
        </div>
        <p>
                Not yet a member? <a href="register.php">Sign up</a>
        </p>
  </form>
  <br><br><br><br> <br>
  <footer>
    <p>© 2023 Стерлитамакское троллейбусное управление · официальный сайт</p>
</footer>
</body>
</html>