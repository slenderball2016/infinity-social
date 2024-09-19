<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>
<!doctype html>
<html lang="ukr">
<head>
    <meta charset="UTF-8">
    <title>Змінити пароль</title>
    <link rel="stylesheet" href="assets/css/change-profile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
    <header class="header">
        <div class="nav-back-block">
            <div class="shape"></div>
            <a href="profile.php">
                <button class="nav-back"><i class="bi bi-arrow-left"></i>Відмінити</button>
            </a>
        </div>
    </header>
    <main class="main">
        <form action="vendor/save-password.php" method="post" class="form-input">
            <span>Введіть старий пароль</span><br>
            <input type="password" required="" name="old_password" class="old_password"><br><br>
            <span>Введіть новий пароль</span><br>
            <input type="password" required="" name="new_password" class="new_password"><br><br>
            <span>Введіть новий пароль ще раз</span><br>
            <input type="password" required="" name="congfrim_new_password" class="congfrim_new_password"><br><br>
            <button type="submit" class="save-changes">Зберегти</button>
        </form>
        <!-- /.form-input -->
        <?if(!empty($_SESSION['error_password'])){?>
        <div class="message">
            <h3><?=$_SESSION['error_password']?></h3>
        </div><?}?>
    </main>
</body>
</html>
<?
    unset ($_SESSION['error_password']);
?>