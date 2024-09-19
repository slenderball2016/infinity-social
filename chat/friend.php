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
    <title>Профіль</title>
    <link rel="stylesheet" href="../reg/assets/css/prof.css">
<link rel="stylesheet" href="../reg/assets/css/hedprof.css">
</head>
<body>
    <div class="container">
<?php
require_once "header.php";?>

    <!-- Профиль -->
<div class="container_form">
    <form>
        <div class="user_info_and_icon">
        <img src="" width="200" alt="usericon" class="usericon">
        <div class="user_info">
        <h2 style="margin: 10px 0;"><?=  ?></h2>
        <p><?=  ?></p>
        <button class="logoutbtn"><a href="create_friend.php" class="logout">
            <?php
                if(mysqli_query($connect,"SELECT COUNT(1)
FROM `friends`
WHERE `users_id` ="$users_id" ";)
            ?>
        </a></button>
        </div>
        </div>
    </form>
    </div>
    
<style>
.user_info_and_icon {
    display: inline-block;
	margin-top: 13%;
	margin-left:35%;
}
.container
{
    height:100%;
        	background: #90EE90;
}
.container_form{
    
    	width:100%;
    	height:100%;
}
a{
text-decoration: none;
}
body{
    height:100%;
}
html{
    height:100%;
}
</style>
</div>
</body>
</html>
