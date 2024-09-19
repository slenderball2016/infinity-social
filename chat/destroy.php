<?php
session_start();
unset($_SESSION['chat_id']);
header('Location: /chat/index.php');