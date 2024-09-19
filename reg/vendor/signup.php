<?php

session_start();
require_once "connect.php";
mysqli_query($connect, "SET NAMES utf8");
$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);
$login = trim($login);
$password = trim($password);
$password_confirm = stripslashes($password_confirm);
$password_confirm = htmlspecialchars($password_confirm);
$password_confirm = trim($password_confirm);

$error_fields = [];

if ($login === '') {
    $error_fields[] = 'login';
}

if ($password === '') {
    $error_fields[] = 'password';
}

if ($full_name === '') {
    $error_fields[] = 'full_name';
}

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error_fields[] = 'email';
}

if ($password_confirm === '') {
    $error_fields[] = 'password_confirm';
}

if (!empty($error_fields)) {
$_SESSION['message'] = "Перевірте правильність таких полів: " . "$error_fields"."!";

}
if ($password == $password_confirm) {



    $path = 'uploads/' . time() . $_FILES['avatar']['name'];
    if($_FILES['avatar']['name']==''){
           $path='uploads/1617352268Иконка.png';

    }else{
    if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
        

            $_SESSION['message'] ="Помилка при завантаженні аватарки!";
        
    }}
    $password = md5($password);

    if(mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')")){
                $_SESSION['message'] = "Реєстрація пройшла успішно!";
    header('Location: ../index.php');
    }
    else{
        $_SESSION['message'] = "Такий логін вже існує!";
    }
} else {
   
        $_SESSION['message'] = "Паролі не співпадають!";
}
    

header('Location: ../index.php');



?>