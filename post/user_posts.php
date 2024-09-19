<?php
    session_start();
    if (!$_SESSION['user']) {
        header('Location: ../reg/');
    }
    require_once "connect.php";
    $id=$_GET['id'];
    if ($id==NULL) {
        $id=$_SESSION['user']['id'];
    }
    $check = mysqli_query($connect, "SELECT * FROM `posts`");
$all=mysqli_num_rows($check);
$check_login = mysqli_query($connect, "SELECT * FROM `posts` WHERE `user_id` = '{$_SESSION['user']['id']}'");
$my=mysqli_num_rows($check_login)
?>

<!doctype html>
<html lang="ukr">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <title>Пости</title>
  <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="header.css">
    
</head>
<body>
<?php
$fixed="fixed-top";
require_once "header.php";
?>
   <div class="row mx-0" style="padding-top:5.8rem; padding-bottom:2rem;">
       <div class="col-3 border border-dark position-fixed" style="z-index:100; text-align:center; height:100vh;">
       <h4 style="margin-top:50%;">Поділіться своїми думками, враженнями з нами!</h4>
       <a class="btn btn-primary fs-4" href="create_page.php">Створіть пост</a>
   </div>  
<div class="div_posts" style="align-items:center;">
<?php
require_once 'connect.php';
	
$all_posts=mysqli_query($connect, "SELECT * FROM `posts` WHERE `user_id` = '$id' ORDER BY `post_id` DESC");


while($row =mysqli_fetch_assoc( $all_posts)){
 
        ?>
<div class="card" style="margin-top:5vh; width:50%;">
  <div class="card-body">
    <h5 class="card-title"><a href="../user/?id=<?= "{$row['user_id']}"?>" class="link-dark"><?= "{$row['login']} ";?></a></h5>
    <p class="card-text"><?= "{$row['text']} ";?></p>
   <!-- <p class="card-text"><small class="text-muted"></small></p>-->
  </div>
	<?php
	    $image=$row['img'];

	    if(!empty($image)){
	        
		?>
		<img src="<?=$image;?>" class="card-img-bottom"  alt="image">
<?php
	    }	
	?></div>
<?php
}?>
</div>
<div class="col-3 border border-dark position-fixed" style="z-index:100; right:0; text-align:center; height:100vh;">
    <h4 style="margin-top:60%;">Статистика</h4>
       <a href="../post/" class="link-dark" style="margin-top:5%;"><h5>Всьго створенно:<?=" $all"?></h5></a>
       <a href="user_posts.php" class="link-dark" style="margin-top:5%;"><h5>Ви створили:<?=" $my"?></h5></a>

   </div> 
	</div> 
<style>
.post_text{

    resize: none;
    display: inline-block;
    height: 91px;
    width: 723px;
    font-size: 15px;
}
.div_posts{
    align-items: left;
    width: 90%;
    font-weight: bold;
    min-height: 30em;
    margin-left: 5%;
    display: flex;
    flex-direction: column;
    overflow: auto;
font-size: 20px;
}
.post-block {
    position: fixed; /* Фиксированное положение */
    left: 95%; bottom: 0; /* Левый нижний угол */
    /*padding: 10px; /* Поля вокруг текста */
    color: #fff; /* Цвет текста */
    width: 100%; /* Ширина слоя */
   
}
.send{
margin-left: 50px;
height:80px;
font-size: 20px;
margin-bottom:40px;
}
.text_post
{
  text-indent: 1em;
font-size:15px;
}
.post{
    height: fit-content;
    max-width: 90%;
    word-wrap: break-word;
}
.all_posts{
border: 1px solid;
border-radius: 40px;
max-width: 50%;
min-width:0;
}
.posts{
margin-top: 15px;
margin-left: 20px;
margin-bottom: 15px;
}
#file-input{
display: none;
}
 .imgicon{
         width: 30px;
    }

@media (max-width: 930px) { 
    .imgicon{
         width: 15px;
    }
    .sumite {
    background: #e3e3e3;
    border: unset;
    width:60px;
    cursor: pointer;
    height:10px;
}
  .text{
      font-size:15px;
  } 
    .dropbtn {
    background-color: #3498DB;
    color: white;
    height: 10px;
    font-size: 6px;
    cursor: pointer;
}
}
</style>
</body>
</html> 