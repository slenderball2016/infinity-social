<?php

    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = md5($_POST['password']);
    mysqli_query($connect, "SET NAMES utf8");
    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "full_name" => $user['full_name'],
            "login" => $user['login'],
            "avatar" => $user['avatar'],
            "email" => $user['email'],
            "n_posts" => $user['n_posts'],
            "chat" => $user['chat']
        ];
        
        header('Location: ../profile.php');}
        
     else {
        $_SESSION['message'] = 'Не правильний логін чи пароль!';
        header('Location: ../index.php');
    }
    ?>



