<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
  }
  if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
        <title>Home</title>
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
    <br><br><br><br>

<div class="header">
        
</div>
<div class="content">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
                echo $_SESSION['success']; 
                unset($_SESSION['success']);
          ?>
        </h3>
      </div>
        <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
<br><br><br>
<footer>
    <p>© 2023 Стерлитамакское троллейбусное управление · официальный сайт</p>
</footer>        
</body>
</html>