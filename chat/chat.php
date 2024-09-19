<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: ../reg/');
   
    }

?>

<!DOCTYPE html>
<html lang="ukr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="index.css">
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script type="text/javascript">
    var scroll = function () {window.scrollBy (0,10000);};
    	setInterval(function(){
    	    $(document).ready(
            function() {
                $.get('show.php', function(data) {
                    $('#messages').html(data);
                });
            }
        )
    
        
    	}, 100)
        $(document).ready(function() {
            $('#submit').click(function() {
                var text = $("#message").val();
                $.get('send.php', {id:text}, function(data) {
                    //$('#messages').html(data);
                });
            });
        });
  var height = 0;
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
intS = setInterval(scrollToEndPage,1);
    </script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>Чат</title>
</head>
 
<body>
    <?php
    $fixed="fixed-top";
    require_once "header.php"?>
    <div id="messages" style="display: flex;flex-direction: column;">

    </div>
    <form class="fixed-bottom bg-light" method="get">
        <input type="text" id="message" autocomplete="off" required placeholder="Type message...">
        <label for="submit" style="margin-top: 22px">
            <span class="bg-primary text-light fw-bold rounded send p-3">Send</span>
        </label>
        <input class="btn btn-light d-none" id="submit" type="submit">
    </form>
</body>
 <style>
 
        body {
            margin: 0;
            background-color: #6495ED;
            /*font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;*/
        }
    
        body::-webkit-scrollbar {
  width: 10px;
  background-color: #f9f9fd;
}

body::-webkit-scrollbar-thumb {

  background-color: #CD853F;
}

body::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.2);
  background-color: #f9f9fd;
}


        .send{
            height: 3.1rem;
        }
        
        #messages {
           min-height: 100vh;
            height: fit-content;
            padding: 10px;
            padding-top: 8rem;
            padding-bottom: 5.5rem;
            background-color: #6495ED;
        }
        
        form {
            display: flex;
            margin: 0;
            padding: 0;
            align-item:center;
            justify-content:center;
        }
        
        input {
            font-size: 1.2rem;
            padding: 10px;
            margin: 10px 5px;
            appearance: none;
            -webkit-appearance: none;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        #message {
            width:70vw;
}
        
        .msg {
            max-width:60%;
            color: #4169E1;
            background-color:#F5F5F5;
            padding: 5px 10px;
            border-radius: 20px 15px 10px 0px;
            margin-bottom: 8px;
            width: fit-content;
        }
        
        .msg p {
            margin: 0;
            font-weight: bold;
        }
        
        .msg span {
            font-size: 0.7rem;
            margin-left: 15px;
        }
        
        .your{
            background-color: #4169E1;
            color:#F5F5F5;
            border-radius: 20px 15px 0px 10px;
            padding: 5px 10px;
            margin-bottom: 8px;
            width: fit-content;
            max-width:60%;
            
        }
        .your p {
            margin: 0;
            font-weight: bold;
        }
        
        .your span {
            font-size: 0.8rem;
            margin-left: 15px;
        }
 </style>
</html>