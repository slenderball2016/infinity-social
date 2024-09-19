<?php
    session_start();
    if (!$_SESSION['user']) {
        header('Location: ../reg/');
    }
    
    require_once "connect.php";
    mysqli_query($connect, "SET NAMES utf8");
    
?>

<!doctype html>
<html lang="ukr">
<head>
    <meta charset="UTF-8">
    <title>Повідомлення</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        require "header.php";
    ?>
    <div class="container mt-5">
        <?php	$id=$_SESSION['user']['id'];    
        $m = "SELECT * FROM `notification` WHERE `user_id`='$id' AND `status`='0' ORDER BY Id DESC";
        $all_done=mysqli_query($connect, $m);
        while($row =mysqli_fetch_assoc( $all_done)){ 
        ?>
        <div class="bg-warning notification d-block text-center border border-dark pb-1">
            <p><?= "{$row['text']} ";?></p>
            <a href="<?= "{$row['link']} ";?>" class="btn btn-primary">Переглянути</a>
        </div><?php
        }?>
        <?php
            $m = "SELECT * FROM `notification` WHERE `user_id`='$id' AND `status`='1'ORDER BY Id DESC";
            $all_done=mysqli_query($connect, $m);
            while($row =mysqli_fetch_assoc( $all_done)){            
        ?>
        <div class="bg-light notification d-block text-center border border-dark pb-1">
            <p><?= "{$row['text']} ";?></p>
            <a href="<?= "{$row['link']} ";?>" class="btn btn-primary">Переглянути</a>
        </div><?php
    }?>
    </div>
</body>
</html>
<?php
$update="UPDATE `notification` SET `status`='1' WHERE `status`='0' AND `user_id`='$USER_ID'";
mysqli_query($connect, $update);
?>