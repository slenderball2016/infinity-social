<?php
    session_start();
    require_once 'connect.php';

    if (!isset($_SESSION['user'])) {
        die("Користувач не автентифікований.");
    }

    $text = trim($_POST['post_text']);
    $text = stripslashes($text);
    $text = htmlspecialchars($text);
    $full_name = $_SESSION['user']['full_name'];
    $user_id = $_SESSION['user']['id'];
    $n_posts = $_SESSION['user']['n_posts'];

    if (empty($text)) {
        die("Пост не може бути пустим.");
    }

    if (empty($_FILES['photo']['name'])) {
        $n = $n_posts + 1;
        $sql_insert = "INSERT INTO `posts` (`post_id`, `login`, `user_id`, `text`, `img`) VALUES (NULL, ?, ?, ?, '0')";
        $stmt = mysqli_prepare($connect, $sql_insert);
        mysqli_stmt_bind_param($stmt, 'sis', $full_name, $user_id, $text);
        mysqli_stmt_execute($stmt);

        $sql_update = "UPDATE users SET n_posts = ? WHERE id = ?";
        $stmt_update = mysqli_prepare($connect, $sql_update);
        mysqli_stmt_bind_param($stmt_update, 'ii', $n, $user_id);
        mysqli_stmt_execute($stmt_update);
    } else {
        $upload_dir = 'uploads/';
        $file_name = time() . '_' . basename($_FILES['photo']['name']);
        $file_path = $upload_dir . $file_name;

        if (move_uploaded_file($_FILES['photo']['tmp_name'], $file_path)) {
            $n = $n_posts + 1;
            $sql_insert = "INSERT INTO `posts` (`post_id`, `login`, `user_id`, `text`, `img`) VALUES (NULL, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($connect, $sql_insert);
            mysqli_stmt_bind_param($stmt, 'siss', $full_name, $user_id, $text, $file_path);
            mysqli_stmt_execute($stmt);

            $sql_update = "UPDATE users SET n_posts = ? WHERE id = ?";
            $stmt_update = mysqli_prepare($connect, $sql_update);
            mysqli_stmt_bind_param($stmt_update, 'ii', $n, $user_id);
            mysqli_stmt_execute($stmt_update);
        } else {
            die("Помилка при завантаженні файлу.");
        }
    }

    header('Location: index.php');
?>
