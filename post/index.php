<?php
    session_start();
    if (!$_SESSION['user']) {
        header('Location: ../reg/');
    }
    require_once "connect.php";
    $user=$_SESSION['user']['id'];
    #$id=$_SESSION['user']['id'];
    $check = mysqli_query($connect, "SELECT * FROM `posts`");
$all=mysqli_num_rows($check);
$check_posts= mysqli_query($connect, "SELECT * FROM `posts` WHERE `user_id` = '$user'");
$my=mysqli_num_rows($check_posts);
?>

<!doctype html>
<html lang="ukr">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <title>Пости</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>

        $(document).ready(function() {
            $(".liked,.like").click(function(){
                if ($(this).is(".like")) {
                    var id = $(this).attr("data-id");
                    $.get('like.php', {id:id}, function(data) {
                        //$('.div_posts').html(data);
                    });
                    var n=$(this).children('input').val();
                    n++;
                    $(this).children('input').val(n);
                    $(this).children('img').attr("src", "heart-fill.svg");
                    $(this).removeClass('like').addClass('liked');
                }
                else {
                    var id = $(this).attr("data-id");
                    $.get('remove_like.php', {id:id}, function(data) {
                        //$('.div_posts').html(data);
                    });
                    var n=$(this).children('input').val();
                    n=n-1;
                    $(this).children('input').val(n);
                    $(this).children('img').attr("src", "heart.svg");
                    $(this).removeClass('liked').addClass('like');
                }
            });
        });        


    </script>
  <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="header.css">
    
</head>
<body>
<?php
$fixed="fixed-top";
require_once "header.php";
?>
   <div class="row mx-0" style="padding-top:5.6rem; padding-bottom:2rem;">
       <div class="col-3 border border-dark position-fixed" style="z-index:100; text-align:center; height:100vh;">
       <h4 style="margin-top:50%;">Поділіться своїми думками, враженнями з нами!</h4>
       <a class="btn btn-primary fs-4" href="create_page.php">Створіть пост</a>
   </div>  
<div class="div_posts" style="align-items:center;">
<?php
require_once 'connect.php';
	
$all_posts=mysqli_query($connect, 'SELECT * FROM `posts` ORDER BY `post_id` DESC');

while($row =mysqli_fetch_assoc( $all_posts)){
    $id=$row['post_id'];
    $likes=mysqli_query($connect, "SELECT * FROM `likes` WHERE `post_id`='$id' AND `user_id`='$user'");
    $num_rows = mysqli_num_rows($likes);
    if ($num_rows > 0) {
       $class="liked";
       $src="heart-fill.svg";
    }
    else{    
        $class="like";
        $src="heart.svg";
    }
        ?>
<div class="card" style="margin-top:5vh; width:50%;">
  <div class="card-body">
    <h5 class="card-title"><a href="../user/?id=<?= "{$row['user_id']}"?>" class="link-dark"><?= "{$row['login']} ";?></a></h5>
    <p class="card-text"><?= "{$row['text']} ";?></p>
    
  </div>
	<?php
	    $image=$row['img'];

	    if(!empty($image)){
	        
		?>
		<img src="<?=$image;?>" class="card-img-bottom"  alt="image">
<?php
	    }	
	?>
	<p class="card-text"><span class="btn <?="$class"?> fs-4" data-id="<?="{$row['post_id']}"?>">
	    <img src="<?="$src"?>" alt="heart">
<input type="text" value="<?="{$row['likes']}"?>" style="background:none; border:none;" disabled>
</span></p></div>
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
.liked input{
    font-weight: bold;
    color:red;
}
.like input{
    font-weight: bold;
    color:black;
}
</style>
</body>
</html>