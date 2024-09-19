<?php

session_start();

$id=$_GET['id'];

require_once 'connect.php';
$user=$_SESSION['user']['id'];
mysqli_query($connect, "INSERT INTO `likes` (`Id`, `user_id`, `post_id`) VALUES (NULL, '$user', '$id')");
$all_posts=mysqli_query($connect, "SELECT * FROM `posts` WHERE `post_id`='$id'");
while($row =mysqli_fetch_assoc( $all_posts)){
    
$likes=$row['likes'];

$likes++;
mysqli_query($connect, "UPDATE `posts` SET `likes`='$likes' WHERE `post_id`='$id'");
}
$id="post_"."$id";

$_SESSION[$id]="liked";

echo "$id";
?>