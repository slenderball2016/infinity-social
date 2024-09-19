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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script>
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
    </script>
    <title>Чат</title>
</head>
 
<body>
    <?php
        require_once "header.php";
    ?>
    <aside class="sidebar d-none d-lg-block" id="side">
        <button class="close" onclick="backClass()">
            <img src="img/close.svg" height="25px" alt="">
        </button>
        <ul class="all-chats">
            
            <a href="#">
                
                    <li class="chat">
                        <img src="img/logo.png" alt="usericon">
                        <span>Username</span>
                    </li>
                
            </a>
            
        </ul>
    </aside>
    <main>
        <button class="show-chats" onclick="changeClass()"><p>Список чатів</p></button>
        <div id="messages" class="messages" style="display: flex;flex-direction: column;">
        </div>
        <form class="fixed-bottom rounded bg-light" action="#" method="get">
            <input type="text" id="message" autocomplete="off" required placeholder="Type message...">
            <input class="btn btn-light d-none" id="submit" type="submit">
            <label for="submit">
                <span class="bg-primary text-light fw-bold rounded send p-3">Send</span>
            </label>
        </form>
    </main>
</body>
</html>