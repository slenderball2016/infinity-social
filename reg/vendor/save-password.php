<?php
    session_start();
    require_once "connect.php";
    
    $id=$_SESSION['user']['id'];
    $old_password=$_POST['old_password'];
    $new_password=$_POST['new_password'];
    $congfrim_new_password=$_POST['congfrim_new_password'];
    $check=mysqli_query($connect, "SELECT `password` FROM `users` WHERE `id`='$id'");
    if (mysqli_num_rows($check) > 0) {

    $check_password = mysqli_fetch_assoc($check);
    
    $old_password = stripslashes($old_password);
    $old_password = htmlspecialchars($old_password);
    $old_password = trim($old_password);
    $new_password = stripslashes($new_password);
    $new_password = htmlspecialchars($new_password);
    $new_password = trim($new_password);
    $congfrim_new_password = stripslashes($congfrim_new_password);
    $congfrim_new_password = htmlspecialchars($congfrim_new_password);
    $congfrim_new_password = trim($congfrim_new_password);
    
    $old_password=md5($old_password);
    $new_password=md5($new_password);
    $congfrim_new_password=md5($congfrim_new_password);
    if($old_password!=$check_password['password']){
        $_SESSION['error_password']="Перевірте правильність старого паролю!";
        header('Location: ../change-password.php');
    }
    else{
        if($new_password!=$congfrim_new_password){
            $_SESSION['error_password']="Паролі не співпадають!";
            header('Location: ../change-password.php');
        }
        else{
            if($new_password==$old_password){
                $_SESSION['error_password']="Не можна замінити на такий самий пароль!";
                header('Location: ../change-password.php');
            }
            else{
                if(mysqli_query($connect, "UPDATE `users` SET `password`='$new_password' WHERE `id`='$id'")){
                            $_SESSION['change_message'] = "Ви успішно змінили пароль!";
                }
                else{
                    $_SESSION['change_message'] = "Помилка!";
                }
                header('Location: ../profile.php');
            }
        }
    }}
?>