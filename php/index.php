<?php
require "functions.php";
session_start(); ?>



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
      <p class="username"> <?php echo "Hello, " . $_SESSION['login'] ?></p>
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
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae facilis reiciendis dolores quod iste, minus nesciunt eius autem laborum recusandae, voluptate ipsa consequuntur ratione consequatur. Unde quam, deleniti voluptate adipisci laudantium, nesciunt tempora delectus, porro illo incidunt odio ipsam? Iste consectetur cum praesentium repudiandae autem quam inventore. Enim ullam libero incidunt temporibus nam molestias velit laboriosam eum ut, corporis quod!</p>
    </div>
    <div class="img">
      <img src="../src/assets/images/spa.avif" alt="">
      <img src="../src/assets/images/spa1.avif" alt="">
    </div>
    <div class="title">
      <a href="logout.php" class="input">Log out</a>
    </div>

  </div>
  <footer>

  </footer>
</body>
<?php
