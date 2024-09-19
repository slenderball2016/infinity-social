<?php
    session_start();
    if (!$_SESSION['user']) {
        header('Location: ../reg/');
    }
    
    require_once "connect.php";
    
    
?>

<!doctype html>
<html lang="ukr">
<head>
    <meta charset="UTF-8">
    <title>Друзі</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<body>
    <?php
     require_once "header.php"?>
    <?php 
    require_once "connect.php";
    mysqli_query($connect, "SET NAMES utf8");
    $id=$_GET['id'];
    if($id==$_SESSION['user']['id']){
        header ('Location: ../friends/');
    }
    $user=$_SESSION['user']['id'];
    

    
    ?>
                            
    <div class="friends">
    <?php
    $q="SELECT * FROM `friends` WHERE `user1`='$id' OR `user2`='$id'";
       $sql = mysqli_query($connect, $q);
        while ($result = mysqli_fetch_array($sql)) {
                if($result['status_1']==1 && $result['status_2']==1){
                    if($id== "{$result['user1']}"){
                        $zapros = "SELECT * FROM `users` WHERE `id` ='{$result['user2']}'";
                        $id_2=$result['user1'];
                    }
                    else if($id== "{$result['user2']}"){
                        $zapros = "SELECT * FROM `users` WHERE `id` ='{$result['user1']}'";
                        $id_2=$result['user2'];
                    }
            $resultat=mysqli_query($connect, $zapros);
            while ($row = mysqli_fetch_array($resultat)) {
                $q1="SELECT * FROM `friends` WHERE `user1`='$id_2' AND `user2`='$id' OR `user1`='$id' AND  `user2`='$id_2'";
    $result1=mysqli_query($connect, $q1);
    $n=mysqli_num_rows($result1);
    if($n==0){
        $link_btn='../friends/new_friend.php';
        $style="btn-primary";
        $text_btn="Додати до друзів";
    }
    else{
        while ($result = mysqli_fetch_array($result1)) {
            if($id==$result['user1']){
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
    <a href="../user/?id=<?= "{$row['id']}"?>">
    <div class="card d-inline-block" style="width:20%; margin:2% 5vw">
          <img src="../reg/<?="{$row['avatar']} ";?>" class="card-img-top" alt="<?= "{$row['full_name']}"?>" style="width:100%; height:20vw; object-fit:cover;">
      <div class="card-body text-center px-0">
        <a href="../user/?id=<?= "{$row['id']}"?>" class="btn btn-primary px-1 py-1 pb-0" style=""><h5 style="font-size:3vw;"><?= "{$row['full_name']}"?></h5></a><br>
        <a href="delete_friend.php?id=<?= "$id_2"?>" class="btn <?="$style"?> mt-1 p-1 pb-0"><h5 style="font-size:2.5vw;"><?="$text_btn"?></h5></a>
      </div>
    </div>
  </a>
<?php
}}}?>
         </div>



</body>
</html>