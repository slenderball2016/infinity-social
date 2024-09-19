<?php

#session_start();
require_once 'connect.php';

    #$text = $_POST['search'];
    //$user_id2=$_GET['id'];
    $id=$_SESSION['user']['id'];
    if (empty($_POST['search'])) {
        $q = "SELECT * FROM `users` WHERE `id` !='$id'";
        $sql = mysqli_query($connect, $q); 
    }
    else{
        $text = $_POST['search'];
        $q = "SELECT * FROM `users` WHERE `full_name` LIKE '%$text%' AND `id` !='$id' OR `id`='$text'";
        $sql = mysqli_query($connect, $q);
    }
?>