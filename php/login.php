<?php
require "functions.php";
session_start();
$username = $_POST['login'];
$password = $_POST['password'];

if (checkPassword($username, $password)) {
  $_SESSION['login'] = $username;
}

if ($_SESSION['login']) {
  header("Location: http://localhost/practicePHP14.8/php/index.php");
} else { ?>

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/assets/css/reset.css">
    <link rel="stylesheet" href="../src/assets/css/main.css">
    <title>SPA-салона</title>
  </head>

  <body>
    <div class="container">

      <div class="form">
        <p>Введите логин и пароль</p>
        <form method="post" action="login.php">
          <input type="text" name="login" placeholder="login">
          <input type="password" name="password" placeholder="password">
          <input type="submit" value="submit" class="input">
        </form>
      </div>
    </div>
  </body>
<?php
}
