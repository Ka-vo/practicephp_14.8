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
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300&family=Ubuntu:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../src/assets/css/reset.css">
    <link rel="stylesheet" href="../src/assets/css/main.css">
    <title>SPA-салона</title>
  </head>

  <body>
    <nav>
      <div class="logo">
        <a href="#"><img src="../src/assets/images/logo.jpg" alt=""></a>
      </div>
    </nav>
    <div class="container">

      <div class="title">
        <h1>SPA-салон Lorem.</h1>
      </div>
      <div class="content-suggestions">
        <div class="content-text">
          <h2>Скидка 20% на первый сенас массажа</h2>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque tempore laborum quia dolore soluta eveniet hic reiciendis, accusantium ea, pariatur cumque voluptatibus, molestias maiores eum?</p>
        </div>
        <div class="content-text">
          <h2>Приведи подругу и обе получите скидку 50%</h2>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque tempore laborum quia dolore soluta eveniet hic reiciendis, accusantium ea, pariatur cumque voluptatibus, molestias maiores eum?</p>
        </div>
      </div>
      <div class="menu">
        <h2>Наши услуги:</h2>
        <ol>
          <li>Массаж</li>
          <li>Все виды эпиляции</li>
          <li>Косметология</li>
        </ol>
      </div>
      <div class="form">
        <p>Введите логин и пароль чтобы узнать больше</p>
        <form method="post" action="login.php">
          <input type="text" name="login" placeholder="login">
          <input type="password" name="password" placeholder="password">
          <input type="submit" value="submit" class="input">
        </form>
      </div>

    </div>
    <footer>

    </footer>
  </body>
<?php

}
