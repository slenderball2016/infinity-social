<?php
    session_start();
    require "connect.php";
    $text=$_GET['id'];
        $full_name= $_SESSION['user']['full_name'];
    $user_id= $_SESSION['user']['id'];
     if ($_SESSION['chat_id']) {
            $chat_id=$_SESSION['chat_id'];
        }
    else {
            echo 'Помилка!';
    }
    if($text!=''){
        mysqli_query($connect, "UPDATE `$chat_id` SET `age`='O' WHERE `age`='N'");
        if(mysqli_query($connect, "INSERT INTO `$chat_id`(`message`, `from`, `id_user`, `age`) VALUES ('$text','$full_name','$user_id','N')")){
        }
        else{
            die('ERROR');
        }
        $result=mysqli_query($connect, "SELECT `user_1`,`user_2` FROM `chats` WHERE `chat_name`='$chat_id'");
        while($row = mysqli_fetch_array( $result,MYSQLI_ASSOC)){
            if($row['user_1']==$user_id)
            {
                $user_2=$row['user_2'];
            }
            else {
                $user_2=$row['user_1'];
            }
        }
    }        
    mysqli_query($connect,"UPDATE `chats` SET `date`=NULL WHERE `chat_name`='$chat_id'");
?>