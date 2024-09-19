<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: ../reg/');
   
    }
    require_once "connect.php";
    
    $user_2=$_GET['id'];
    $zaput="SELECT `full_name` FROM `users` WHERE `id`='$user_2'";
    $rez=mysqli_query($connect, $zaput);
   
    while ($i = mysqli_fetch_assoc($rez)) {
            $user2_name=$i['full_name'];
    }
    $user=$_SESSION['user']['id'];
    $link='';
    $style='';
    $text='';
    $q1="SELECT * FROM `friends` WHERE `user1`='$user' AND `user2`='$user_2' OR `user1`='$user_2' AND  `user2`='$user'";
    $result1=mysqli_query($connect, $q1);
    $n=mysqli_num_rows($result1);
    if($n==0){
        $link_btn='../friends/new_friend.php';
        $style="btn-primary";
        $text_btn="Додати до друзів";
    }
    else{
        while ($result = mysqli_fetch_array($result1)) {
            if($user==$result['user1']){
                if($result['status_1']=='1' && $result['status_2']=='0'){
                  $style="disabled";
                  $text_btn="Очікується"; 
                }
                if($result['status_1']=='0' && $result['status_2']=='1'){
                  $style="btn-warning";
                  $text_btn="Підтвердити запит"; 
                  $link_btn='../friends/submint_friend.php';
                }
                if($result['status_1']=='1' && $result['status_2']=='1'){
                  $style="btn-danger";
                  $text_btn="Видалити з друзів"; 
                  $link_btn='../friends/delete_friend.php';
                }
            }
            else{
                if($result['status_1']=='0' && $result['status_2']=='1'){
                  $style="disabled";
                  $text_btn="Очікується"; 
                }
                if($result['status_1']=='1' && $result['status_2']=='0'){
                  $style="btn-warning";
                  $text_btn="Підтвердити запит"; 
                  $link_btn='../friends/submint_friend.php';
                }
                if($result['status_1']=='1' && $result['status_2']=='1'){
                  $style="btn-danger";
                  $text_btn="Видалити з друзів"; 
                  $link_btn='../friends/delete_friend.php';
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="ukr">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="header.css">
    <title><?= "$user2_name"?></title>
</head>
<body>
    <?php
    require_once "header.php"?>
    <?php
        $resul = mysqli_query($connect,"SELECT * FROM users WHERE `id`='$user_2'");
        while ($line = mysqli_fetch_assoc($resul)) {
    ?>
    <div class="container-fluid">
        <div class="row text-center" style="margin-top:10vh">
            <div class="col-lg-6">
            <img src="../reg/<?= "{$line['avatar']}" ?>" alt="usericon" class="d-inline usericon rounded-circle">
            </div>
            
            <div class="col-lg-4 user_info" style="width:40vw;">
                <h1><?= "{$line['full_name']}"?></h1><br>

                    <?php
                    $check_posts = mysqli_query($connect, "SELECT * FROM `posts` WHERE `user_id` = '{$line['id']}'");
                    $n_p=mysqli_num_rows($check_posts);?>
                    <a href="../post/user_posts.php?id=<?="$user_2"?>" class="text-center"><h2 class="mb-3">Постів:<?="$n_p"?></h2></a>
                    <?php
                    $check_friends = mysqli_query($connect, "SELECT * FROM `friends` WHERE `user1` = '$user_2' AND `user2`!='$user_2' AND `status_1`='1' AND `status_2`='1' OR  `user1`!='$user_2' AND `user2` = '$user_2' AND `status_1`='1' AND `status_2`='1'");
                    $n_f=mysqli_num_rows($check_friends);?>
                    <a href="../friends/user_friends.php?id=<?="$user_2"?>" class="text-center"><h2 class="mb-3">Друзів:<?="$n_f"?></h2></a>
                <div class="d-grid col-12" style="height:auto;">
                <a href="<?= "$link_btn";?>?id=<?= "$user_2"?>" class="btn <?= "$style";?> border border-dark fs-1 w btn-lg">
                    <b><?= "$text_btn";?></b>
                    </a>
                    </div>
                    <div class="d-grid col-12 mt-3" style="height:auto;">
                <a href="../chat/create.php?id=<?= "$user_2"?>" class="logout btn btn-danger text-light border border-dark fs-1 w btn-lg">
                    <b>Чат</b>
                    </a>
                    </div>
            </div>
        </div>
    </div><?php
}?>
    
<style>
form h2{
    height:auto;
}

.user_info h1{
    font-size:60px;
}

.user_info p{
    font-size:30px;
}

.usericon{
    width:400px;
    height:400px;
    object-fit:cover;
    border:.2vw solid #000;
}
a{
text-decoration: none;
}

@media(min-width:992px){
    .d-grid{
        height:6vw!important;
    }
}

@media(max-width:992px){
    .user_info{
    margin-left:30%;
}

}

nav{
    font-size:unset;
}</style>
</body>
</html>