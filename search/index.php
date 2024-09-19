<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: ../reg/');
}
?>
<!DOCTYPE html>
<html lang="ukr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>Пошук учасників</title>
</head>
<body>
    <?php
    require_once "header.php"?>

    <form method="post" name="search_form" id="search_form" class="search_form mt-2" style="float:right; width:100%; text-align:right">
    <input type="search" name="search" id="search" class="search" style="" placeholder="Введіть ім'я або id">
    <button type="submit" name="search_btn" id="search_btn" class="btn btn-primary bi bi-search me-2"></button>
    </form>
    <div class="result" style="text-align:center;">
    <?php
    require_once 'search.php';
        while ($result = mysqli_fetch_array($sql)) {?>
         <a href="../user/?id=<?= "{$result['id']}"?>">
    <div class="card d-inline-block" style="width:20%; margin:2% 5vw">
          <img src="../reg/<?="{$result['avatar']} ";?>" class="card-img-top" alt="<?= "{$result['full_name']}"?>" style="width:100%; height:20vw; object-fit:cover;">
      <div class="card-body px-0">
        <a href="../user/?id=<?= "{$result['id']}"?>" class="btn btn-primary px-1 py-1 pb-0" style=""><h5 style="font-size:3vw;"><?= "{$result['full_name']}"?></h5></a>
      </div>
    </div>
  </a>
    <?php
        } 
    ?>
</div>
    <style>
    

</style>

</body>
</html>