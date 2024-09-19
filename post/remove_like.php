<?php

session_start();

$user=$_SESSION['user']['id'];

$id=$_GET['id'];

require_once 'connect.php';

$all_posts=mysqli_query($connect, "SELECT * FROM `posts` WHERE `post_id`='$id'");
while($row =mysqli_fetch_assoc( $all_posts)){
    
$likes=$row['likes'];

$likes=$likes-1;
mysqli_query($connect, "UPDATE `posts` SET `likes`='$likes' WHERE `post_id`='$id'");
}

mysqli_query($connect, "DELETE FROM `likes` WHERE `post_id`='$id' AND `user_id`='$user'");
?>