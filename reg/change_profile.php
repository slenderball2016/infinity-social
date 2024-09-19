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
    <title>Змінити аватар</title>
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
        <form action="vendor/save-changes.php" method="post" enctype="multipart/form-data" class="form-input">
            <span class="title">Змінити ім'я</span><br>
            <input type="text" required="" name="full_name" class="full_name" value="<?=$_SESSION['user']['full_name']?>"><br><br>
            <span class="title">Змінити логін</span><br>
            <input type="text" required="" name="login" class="login" value="<?=$_SESSION['user']['login']?>"><br><br>
            <span class="title">Змінити пошту</span><br>
            <input type="email" required="" name="email" class="email" value="<?=$_SESSION['user']['email']?>"><br><br>
            <p><a href="change-password.php" class="password">Змінити пароль</a></p> 
            <span class="title">Змінити зображення профілю</span><br>
            <input type="file" name="avatar" class="avatar"><br><br>
            <button type="submit" class="save-changes">Зберегти</button>
        </form>
        <!-- /.form-input -->
    </main>
</body>
</html>