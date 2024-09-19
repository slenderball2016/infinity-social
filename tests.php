<?php
$to = "slenderball2016@gmail.com";
$subject = "Тема листа";
$message = "Текст повідомлення";
$headers = "From: slenderball2020@gmail.com";

if (mail($to, $subject, $message, $headers)) {
    echo "Лист успішно відправлено.";
} else {
    echo "Помилка при відправці листа.";
}
?>