<?php
session_start();
require_once "connect.php";
if ($_SESSION['chat_id']) {
            $chat_id=$_SESSION['chat_id'];
        }
        else {
            echo 'Помилка!';
        }
        $id=$_SESSION['user']['id'];
$result=mysqli_query($connect, "SELECT * FROM `$chat_id`");
while($row = mysqli_fetch_array( $result,MYSQLI_ASSOC))
    {
        if($row['age']=='O'){
            if($row['id_user']==$id)
            {
                 echo "<div><div class=your style=float:right;><p>{$row['from']}</p>{$row['message']}<br><span>{$row['created']}</span></div></div>";
            }
            else
            {
                 echo "<div><div class=msg style=float:left;><p>{$row['from']}</p>{$row['message']}<br><span>{$row['created']}</span></div></div>";
                
            }
        }
        else{
            if($row['id_user']==$id)
            {
                 echo "<div><div class=your id=last style=float:right;><p>{$row['from']}</p>{$row['message']}<br><span>{$row['created']}</span></div></div>";
            }
            else
            {
                 echo "<div><div class=msg id=last style=float:left;><p>{$row['from']}</p>{$row['message']}<br><span>{$row['created']}</span></div></div>";
                
            }
        }
       
}
?>