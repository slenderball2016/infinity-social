<?php
session_start();
require_once "connect.php";
$user_id=$_SESSION['user']['id'];
$user_id2=$_GET['id'];
$online=1;


if ($user_id2>$user_id) {
    $chat_id="chat_" . $user_id2 . "_" . $user_id;
}
else {
    if ($user_id2<$user_id) {
        $chat_id="chat_" . $user_id . "_" . $user_id2;
    }
    else{
    
    echo "<h1>Error 404</h1>";
}
$test=$_SESSION['chat_id'] = "$chat_id";
if(empty($test))
{
    unset($_SESSION['chat_id']);
}

}
$q = "
CREATE TABLE IF NOT EXISTS `$chat_id` (
  `Id` int(111) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `from` varchar(127) NOT NULL,
  `id_user` int(111) NOT NULL,
  `age` varchar(1) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
";

$sql_create_table = mysqli_query($connect, $q);

if ($sql_create_table) {
    $insert_q = "
    INSERT IGNORE INTO `chats` (`Id`, `chat_name`, `user_1`, `user_2`)
    VALUES (NULL, '$chat_id', '$user_id', '$user_id2');
    ";

    $sql_insert = mysqli_query($connect, $insert_q);

    if ($sql_insert) {
        echo "Таблиця створена і запис вставлено успішно.";
    } else {
        echo "Помилка при вставці запису: " . mysqli_error($connect);
    }
} else {
    echo "Помилка при створенні таблиці: " . mysqli_error($connect);
}

if( mysqli_query($connect, $q)){
    $_SESSION['chat_id'] = "$chat_id";
    header("Location: chat.php?chat_id=$chat_id");   
}
else{
    $_SESSION['chat_id'] = "$chat_id";
    header("Location: chat.php?chat_id=$chat_id");
}
?>
