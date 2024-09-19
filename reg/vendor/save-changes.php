<?php
    session_start();
    require_once "connect.php";

    $full_name=$_POST['full_name'];
    $login=$_POST['login'];
    $email=$_POST['email'];

    $full_name = stripslashes($full_name);
    $full_name = htmlspecialchars($full_name);
    $full_name = trim($full_name);
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $login = trim($login);
    $email = stripslashes($email);
    $email = htmlspecialchars($email);
    $email = trim($email);
    if(empty($login)){
        $login=$_SESSION['user']['login'];
    }
    if(empty($email)){
        $email=$_SESSION['user']['email'];
    }
    if(empty($full_name)){
        $full_name=$_SESSION['user']['full_name'];
    }

    $path = 'uploads/' . time() . $_FILES['avatar']['name'];
    if($_FILES['avatar']['name']==''){
          $path=$_SESSION['user']['avatar'];

    }else{
    if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
        

            $_SESSION['change_message'] ="Помилка при завантаженні аватарки!";
        header('Location: ../profile.php');
    }}
    
    $id=$_SESSION['user']['id'];
    if(mysqli_query($connect, "UPDATE `users` SET `full_name`='$full_name',`login`='$login',`email`='$email',`avatar`='$path'  WHERE `id`='$id'")){
                $_SESSION['change_message'] = "Ви успішно змінили аккаунт!";
    }
    else{
        $_SESSION['change_message'] = "Такий логін вже існує!";
    }
    header('Location: ../profile.php');
    unset ($_SESSION['change_message']);
    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = '$id'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "full_name" => $user['full_name'],
            "login" => $user['login'],
            "avatar" => $user['avatar'],
            "email" => $user['email']
        ];
    }  
?>