<?php
session_start();
require_once "connect.php";
$id_2=$_GET['id'];
$id=$_SESSION['user']['id'];

$q="UPDATE `friends` SET `status_2`=1 WHERE `user1`='$id_2' AND `user2`='$id'";
//mysqli_query($connect, $q);
if(!mysqli_query($connect, $q)){
    die ("<h1 style=text-center>Error try again</h1>");
}
header ('Location: ../friends/');
?>