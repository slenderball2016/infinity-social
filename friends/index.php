<?php
session_start();
require_once "connect.php";

if (!isset($_SESSION['user'])) {
    header('Location: ../reg/');
    exit;
}

mysqli_query($connect, "SET NAMES utf8");
$id = $_SESSION['user']['id'];
?>

<!doctype html>
<html lang="ukr">

<head>
    <meta charset="UTF-8">
    <title>Друзі</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>

<body>
    <?php require_once "header.php" ?>

    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><h4>Мої друзі</h4></button>
            <?php
            $q = "SELECT * FROM `friends` WHERE `user1`='$id' OR `user2`='$id'";
            $sql = mysqli_query($connect, $q);
            $num_of_requests=0;
            while ($result = mysqli_fetch_array($sql)) {
                if ($id == $result['user2'] && $result['status_1'] == '1' && $result['status_2'] == '0') {
                    $num_of_requests++;
                }}?>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><h4>Очікують підтвердження(<?=$num_of_requests?>)</h4></button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <?php
            $q = "SELECT * FROM `friends` WHERE `user1`='$id' OR `user2`='$id'";
            $sql = mysqli_query($connect, $q);

            while ($result = mysqli_fetch_array($sql)) {
                if (($id == $result['user1'] && ($result['status_1'] == 1 && $result['status_2'] == 1 || $result['status_1'] == 1 && $result['status_2'] == 0)) || ($id == $result['user2'] && $result['status_1'] == 1 && $result['status_2'] == 1)) {
                    if ($id == "{$result['user1']}") {
                        $zapros = "SELECT * FROM `users` WHERE `id` ='{$result['user2']}'";
                        $id_2 = $result['user2'];
                    } else {
                        $zapros = "SELECT * FROM `users` WHERE `id` ='{$result['user1']}'";
                        $id_2 = $result['user1'];
                    }
                    $resultat = mysqli_query($connect, $zapros);
                    while ($row = mysqli_fetch_array($resultat)) {
                        if ($result['status_1'] == 1 && $result['status_2'] == 1) {
                            $text_btn = "Видалити з друзів";
                            $style = "btn-danger";
                        } elseif ($result['status_1'] == 1 && $result['status_2'] == 0) {
                            $text_btn = "Очікується";
                            $style = "disabled";
                        }
            ?>
                            <a href="../user/?id=<?= "{$row['id']}" ?>">
                                <div class="card d-inline-block" style="width:20%; margin:2% 5vw">
                                    <img src="../reg/<?="{$row['avatar']} ";?>" class="card-img-top" alt="<?= "{$row['full_name']}" ?>" style="width:100%; height:20vw; object-fit:cover;">
                                    <div class="card-body text-center px-0">
                                        <a href="../user/?id=<?= "{$row['id']}" ?>" class="btn btn-primary px-1 py-1 pb-0" style=""><h5 style="font-size:3vw;"><?= "{$row['full_name']}" ?></h5></a><br>
                                        <a href="delete_friend.php?id=<?= "$id_2" ?>" class="btn <?= "$style" ?> mt-1 p-1 pb-0"><h5 style="font-size:2.5vw;"><?="$text_btn"?></h5></a>
                                    </div>
                                </div>
                            </a>
            <?php 
                    }
                }
            }
            ?>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"><?php
            $q = "SELECT * FROM `friends` WHERE `user1`='$id' OR `user2`='$id'";
            $sql = mysqli_query($connect, $q);
            while ($result = mysqli_fetch_array($sql)) {
                if ($id == $result['user2'] && $result['status_1'] == '1' && $result['status_2'] == '0') {
                    $zapros = "SELECT * FROM `users` WHERE `id` ='{$result['user1']}'";
                    $id_2 = $result['user1'];
                    $bg = "background:red;";
                    $resultat = mysqli_query($connect, $zapros);
                    while ($row = mysqli_fetch_array($resultat)) {
                    ?>
                        <a href="create.php?id=<?= "{$row['id']}" ?>">
                            <div class="card d-inline-block" style="width:20%; margin:2% 5vw">
                                <img src="../reg/<?="{$row['avatar']} ";?>" class="card-img-top" alt="<?= "{$row['full_name']}" ?>" style="width:100%; height:20vw; object-fit:cover;">
                                <div class="card-body text-center px-0">
                                    <a href="../user/index.php?id=<?= "{$row['id']}" ?>" class="btn btn-primary px-1 py-1 pb-0" style=""><h5 style="font-size:3vw;"><?= "{$row['full_name']}" ?></h5></a>
                                    <a href="submit_friend.php?id=<?= "{$row['id']}" ?>" class="btn btn-warning mt-1 p-1 pb-0"><h5 style="font-size:1.75vw;">Підтвердити запит</h5></a>
                                    <a href="delete_friend.php?id=<?= "$id_2" ?>" class="btn btn-danger mt-1 p-1 pb-0"><h5 style="font-size:1.75vw;">Відхилити запит</h5></a>
                                </div>
                            </div>
                        </a>
            <?php 
                    }
                }
            }
            
            ?></div>
    </div>

            
        </div>
        <div class="tabContent">
            
        </div>
    </div>
    <script>
        var tab;
        var tabContent;

        window.onload = function() {
            tabContent = document.getElementsByClassName('tabContent');
            tab = document.getElementsByClassName('tab');
            hideTabsContent(1);
        }

        function hideTabsContent(a) {
            for (var i = a; i < tabContent.length; i++) {
                tabContent[i].classList.remove('show');
                tabContent[i].classList.add('hide');
                tab[i].classList.remove('whiteborder');
            }
        }

        document.getElementById('tabs').onclick = function(event) {
            var target = event.target;
            if (target.className == 'tab') {
                for (var i = 0; i < tab.length; i++) {
                    if (target == tab[i]) {
                        showTabsContent(i);
                        break;
                    }
                }
            }
        }

        function showTabsContent(b) {
            if (tabContent[b].classList.contains('hide')) {
                hideTabsContent(0);
                tab[b].classList.add('whiteborder');
                tabContent[b].classList.remove('hide');
                tabContent[b].classList.add('show');
            }
        }
    </script>

    <style>

    </style>

</body>

</html>