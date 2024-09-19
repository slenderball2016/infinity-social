<?php
session_start();

if (isset($_SESSION['user'])) {
    header('Location: reg/profile.php');
    exit();
}

?>



<!DOCTYPE html>
<html lang="ukr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Infinity</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="css/styly.css">

</head>

<body>

<?require "header.php"?>
<nav class="navbar <?="$fixed"?> navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand"  href="/">
                <h1>&infin; Inifinity</h1>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link border border-dark rounded-pill" href="reg/">Зареєструватися/Увійти</a>

                </div>
            </div>
        </div>
    </nav>
<div class="container">
    <h1 class="my-5 text-center">
      Infinity-це молодіжна соціальна мережа
    </h1>

<div id="carouselExampleCaptions" class="carousel my-5 slide px-0" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/1578783611_0_237_3069_1963_1920x0_80_0_0_bda8d9ac5cfa8f11a2a07a3bef448f12.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-light" style="width:100%; right:0; left:0; background:rgb(0 0 0 / 50%)">
        <h4>Спілкуйтесь з друзями!</h4>
        <h5>Пишіть друзям у чаті, або зробіть пости зі своїми враженнями</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/friends.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-light" style="width:100%; right:0; left:0; background:rgb(0 0 0 / 50%)">
        <h4>Знайдіть нових друзів!</h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/post.jpg" class="d-block w-100" alt="test">
      <div class="carousel-caption d-none d-md-block text-light" style="width:100%; right:0; left:0; background:rgb(0 0 0 / 50%)">
        <h4>Робіть пости</h4>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="text-center my-5">
    <h1>
      ↓↓Натисніть щоб розпочати↓↓
    </h1>
    <a href="reg/index.php" class="btn btn-primary mt-3 fs-2">
      Зареєструватися/Увійти
    </a>
  </div></div>
      <footer class="footer mt-auto py-3 mt-5 bg-light">
  <div class="container">
    <span class="text-muted">&infin; Infinity<br>©Bortnik Nikita 2021</span>
  </div>
</footer>
    
</body>

</html>