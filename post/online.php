<?php
    session_start();
    if (!$_SESSION['user']) {
        header('Location: ../reg/');
    }
    require_once "connect.php";
    $id=$_SESSION['user']['id'];
    $sql_q="SELECT `chat` FROM `users` WHERE `id` ='$id' ";
    $chat=mysqli_query($connect, $sql_q);
    if ($chat!='0') {
        $sql_q="UPDATE `chat` FROM `users` WHERE `id` ='$id' ";
        mysqli_query($connect, $sql_q);        
    }