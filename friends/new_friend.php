<?php
session_start();
require_once "connect.php";
$id=$_SESSION['user']['id'];
$name=$_SESSION['user']['full_name'];
$id_2=$_GET['id'];

$q="INSERT INTO `friends`(`Id`, `user1`, `user2`, `status_1`, `status_2`) VALUES (NULL,'$id','$id_2','1','0')";
mysqli_query($connect, $q);
$q="INSERT INTO `notification`(`Id`, `user_id`, `text`, `link`, `status`) VALUES (NULL,'$id_2','У вас новий запит в друзі від користувача $name','../friends/','0')";
mysqli_query($connect, $q);
header ('Location: ../friends/');
?>