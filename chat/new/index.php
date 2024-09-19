<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: ../../reg/');
   
    }
//$online=$_GET['chat_id'];
require_once "connect.php";
$chat_id=$_GET['chat_id'];

if($chat_id==''){
    $id=$_SESSION['user']['id'];
    $q="SELECT * FROM `chats` WHERE `user_1`='$id' OR `user_2`='$id' ORDER BY `date`";
    $sql = mysqli_query($connect, $q);
    while ($result = mysqli_fetch_array($sql)) {
        $chat_id=$result['chat_name'];
    }
}

mysqli_query($connect, "UPDATE `users` SET `chat`='$chat_id' WHERE `id`='$user_id'");
unset($_SESSION['chat_id']);
$_SESSION['chat_id'] = "$chat_id";


?>

<!DOCTYPE html>
<html lang="ukr">
<head>
    <meta charset="UTF-8">
    <title>Чат</title>
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../header.css">
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script type="text/javascript">
        $(document).ready ( function(){
            
        });
        setInterval(function(){
    	    $(document).ready(
                function() {
                    var div = $("#messages");
                    div.scrollTop(div.prop('scrollHeight'));
                });
        }, 9999)
    	/*setInterval(function(){
    	    $(document).ready(
                function() {
                    $.get('../show.php', function(data) {
                        $('#messages').html(data);
                        
                    });
                }
            )
        }, 2000)*/
        
        function changeClass() {
                document.getElementById('side').className = "show";
                var button_class = document.getElementById('side').className;
                document.getElementById('message-form').className = "hide";
                var button_class = document.getElementById('message-form').className;
            }
            function backClass() {
                document.getElementById('side').className = "hide";
                var button_class = document.getElementById('side').className;
                
            }
        
        $(document).ready(function() {
            $('#submit').click(function() {
                var text = $("#message").val();
                $.get('../send.php', {id:text}, function(data) {
                    //$('#messages').html(data);
                });
            });
        });
/*  var height = 0;
var attempt = 0;
var intS = 0;
function scrollToEndPage() {
if (height < document.body.scrollHeight)
{
    height = document.body.scrollHeight;
    window.scrollTo(0, height);
    attempt++;
    height = parseInt(height) + attempt;
}
else
{
    clearInterval(intS);
}
}
intS = setInterval(scrollToEndPage,1);*/


window.onload = scroll;
    </script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>Чат</title>
</head>
 
<body>
    <?
    $fixed="fixed-top";
    require_once "../header.php"?>
    <aside class="sidebar d-none d-lg-block" id="side">
        <button class="close" onclick="backClass()">
            <img src="img/close.svg" height="25px" alt="">
        </button>
        <ul class="all-chats">
            <?
            $id=$_SESSION['user']['id'];
            $q="SELECT * FROM `chats` WHERE `user_1`='$id' OR `user_2`='$id'";
            $sql = mysqli_query($connect, $q);
            while ($result = mysqli_fetch_array($sql)) {
            if($id== "{$result['user_1']}"){
                $zapros = "SELECT * FROM `users` WHERE `id` ='{$result['user_2']}'";
            }
            else{
                $zapros = "SELECT * FROM `users` WHERE `id` ='{$result['user_1']}'";
            }
            $resultat=mysqli_query($connect, $zapros);
            while ($row = mysqli_fetch_array($resultat)) {
                $q1="SELECT `chat_name` FROM `chats` WHERE `user_1`='$id' AND `user_2`='{$row['id']}' OR `user_1`='{$row['id']}' AND `user_2`='$id'";
                $sql1 = mysqli_query($connect, $q1);
                while ($result1 = mysqli_fetch_array($sql1)) {
        ?>
            <a href="?chat_id=<?="{$result1['chat_name']}"?>">
            <li class="chat">
                <img src="../../reg/<?="{$row['avatar']}"?>" alt="usericon">
                <span><?="{$row['full_name']}"?></span>
            </li></a>
            <?
                }}}
            ?>
        </ul>
    </aside>
    <main>
        <button class="show-chats" onclick="changeClass()"><p>Список чатів</p></button>
        <div id="messages" class="messages" style="display: flex;flex-direction: column;">
        </div>
        <form class="fixed-bottom rounded bg-light" action="../new/index.php?chat_id=<?="$chat_id"?>" method="get">
            <input type="text" id="message" autocomplete="off" required placeholder="Type message...">
            <input class="btn btn-light d-none" id="submit" type="submit">
            <label for="submit">
                <span class="bg-primary text-light fw-bold rounded send p-3">Send</span>
            </label>
        </form>
    </main>
</body>
</html>