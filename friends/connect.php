<?php
    $connect = mysqli_connect('localhost', 'root', '', 'infinity');
    if (!$connect) {
        die('Error connect to DataBase');
    }