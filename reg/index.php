<?php
session_start();

if (isset($_SESSION['user'])) {
    header('Location: ../reg/profile.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="ukr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinity</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>

<body style="background-image: url(img/main_icon.jpg);">
    <main>
        <div class="row" style="width: 100%;height: 100vh;">

            <div class="col-2"></div>
            <div class="col-8" style="height:60%; z-index: 100; padding: 1vh 0 1vh 0;">
                <div class="row rounded" style="background-color: rgba(255, 255, 255, 0.86); align-items: center;">

                    <h1 class="lh-base fs-1 mt-1" style="font-size: 8vh;"><span style="font-size: larger; font-family: monospace;">&infin;</span> Infinity</h1>
                    <h5 class="lh-base fs-4 text-center">Знайдіть нових знайомих разом з нами</h5>
                    <div id="tabs">
                        <div class="tab whiteborder">Ввійти</div>
                        <div class="tab">Зареєструватися</div>
                        <div class="tabContent">
                            <form action="vendor/signin.php" method="post">
                                <label>Логін</label>
                                <input type="text" name="login" placeholder="Введіть свій логін">
                                <label>Пароль</label>
                                <input type="password" name="password" placeholder="Введіть пароль">
                                <?php
                                    if(isset($_SESSION['message']) && !empty($_SESSION['message'])) {
                                ?>
                                <div class="container text-center" style="margin: 1vw 0; border: double red; background-color: rgba(255, 255, 255, 0.95);">
                                        <h4 class="m-3 text-danger"><?php echo $_SESSION['message']; ?></h4>
                                </div>
                                <?php
                                        unset($_SESSION['message']); // Optionally, clear the message after displaying it
                                    }
                                ?>

                                <button type="submit" class="login-btn btn-primary">Ввійти</button>
                            </form>
                        </div>
                        <div class="tabContent">
                            <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
                                <label>Ім'я</label>
                                <input type="text" name="full_name" required placeholder="Введіть своє ім'я">
                                <label>Логін</label>
                                <input type="text" name="login" required placeholder="Введіть свій логін">
                                <label>Пошта</label>
                                <input type="email" name="email" required placeholder="Введіть свою електрону адресу">
                                <label>Зображення профиля</label>
                                <input type="file" class="form-control" name="avatar" id="inputGroupFile02">
                                <label>Пароль</label>
                                <input type="password" name="password" required placeholder="Введіть пароль">
                                <label>Підтверження пароля</label>
                                <input type="password" name="password_confirm" required placeholder="Підтвердіть пароль">
                                <button type="submit" class="btn-primary">Зареєструватися</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>

    <style>
        .row {
            padding-bottom: 2vh;
        }
        
        #tabs .tab {
            display: inline-block;
            padding: .5vh 1vw;
            cursor: pointer;
            position: relative;
            z-index: 5;
        }
        
        .tab {
            width: 49%;
            text-align: center;
        }
        
        @media(max-width:768px){
            .tab{
                font-size:12px;
            }
        }
        
        @media(min-width:992px){
            .tab{
                font-size:21px!important;
            }
        }
        
        #tabs .whiteborder {
            background: rgba(174, 202, 255, 0.507);
            border: .1vw solid #707070;
            border-radius: 3px solid 0 0;
            border-bottom: none;
        }
        
        #tabs .tabContent {
            width: 100%;
            border: .1vw solid #707070;
            position: relative;
            top: -.1vh;
            z-index: 1;
            padding: 1vw;
            border-radius: 0 0 3px 3px;
        }
        
        #tabs .hide {
            display: none;
        }
        
        #tabs .show {
            display: block;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;

        }
        
        a {
            color: #7c9ab7;
            font-weight: bold;
            text-decoration: none;
        }
        
        p {
            margin: 1vw 0;
        }
        
        form {
            display: flex;
            flex-direction: column;
            width: 100%;
        }
        
        input {
            margin: 1vw 0;
            /*padding: 1vw;
            border: unset;
            border-bottom: .2vw solid #e3e3e3;
            outline: none;*/
        }
        
        button {
            padding: 1vw;
            border: unset;
            cursor: pointer;
        }
        
        .error {
            border-bottom: .2vw solid #ff4332;
        }
        
        .msg {
            border: .2vw solid #ffa908;
            border-radius: .3vw;
            padding: 1vw;
            text-align: center;
            font-weight: bold;
        }
        
        .none {
            display: none;
        }
        
        .logout {
            color: #b7625c;
        }
    </style>
    <script>
        var tab;
        var tabContent;

        window.onload = function() {
            tabContent = document.getElementsByClassName('tabContent');
            tab = document.getElementsByClassName('tab');
            hideTabsContent(1);
        }

        function hideTabsContent(a) {
            for (var i = a; i < tabContent.length; i++) {
                tabContent[i].classList.remove('show');
                tabContent[i].classList.add('hide');
                tab[i].classList.remove('whiteborder');
            }
        }

        document.getElementById('tabs').onclick = function(event) {
            var target = event.target;
            if (target.className == 'tab') {
                for (var i = 0; i < tab.length; i++) {
                    if (target == tab[i]) {
                        showTabsContent(i);
                        break;
                    }
                }
            }
        }

        function showTabsContent(b) {
            if (tabContent[b].classList.contains('hide')) {
                hideTabsContent(0);
                tab[b].classList.add('whiteborder');
                tabContent[b].classList.remove('hide');
                tabContent[b].classList.add('show');
            }
        }
    </script>
</body>

</html>