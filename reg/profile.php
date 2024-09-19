<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: /');
    exit; // Terminate the script to prevent further execution
}
?>

<!doctype html>
<html lang="ukr">
<head>
    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <title><?= $_SESSION['user']['full_name'] ?></title>
    <link rel="stylesheet" href="assets/css/prof.css">
<link rel="stylesheet" href="header.css">
</head>
<body>
<?php
require "header.php";?>
    <div class="container-fluid">
        <div class="row text-center" style="margin-top:10vh">
            <div class="col-lg-6">
            <img src="<?= $_SESSION['user']['avatar'] ?>" alt="usericon" class="d-inline usericon rounded-circle">
            </div>
            
            <div class="col-lg-4 user_info" style="margin-top:7%; width:40vw;">
                <h1><?= $_SESSION['user']['full_name'] ?></h1><br>
                <p><?= $_SESSION['user']['email'] ?></p>
   
                <br>
                <div class="d-grid col-12 " style="height:auto;">
                    <a  href="change_profile.php" class="p-2 mb-5 mt-1 change-profile" style=" font-size:30px">
                        <svg xmlns="http://www.w3.org/2000/svg " style="width:40px; height:40px; " fill="black " class="bi bi-pencil-square " viewBox="0 0 16 16 ">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z "></path>
                            <path fill-rule="evenodd " d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z "></path>
                        </svg>
                        <span><b>Редагувати профіль</b></span>
                    </a>
                <a href="vendor/logout.php" class="logout btn btn-danger text-light border border-dark fs-1 w btn-lg">
                    <b>Вихід</b>
                    </a><br><br>
                    
                    </div>
            </div>
        </div>
        <?php if (!empty($_SESSION['change_message'])) { ?>
            <div class="message">
                <h3><?= $_SESSION['change_message'] ?></h3>
            </div>
        <?php } ?>

    </div>
    
<style>
form h2{
    height:auto;
}

.user_info h1{
    font-size:60px;
}

.user_info p{
    font-size:30px;
}

.change-profile{
    display: flex;
    margin: auto;
    flex-direction:row;
    text-align: center;
    align-items:center;
}

.user_info span{
    margin-left: 10px;
}

.usericon{
    width:400px;
    height:400px;
    object-fit:cover;
    border:.2vw solid #000;
}
a{
text-decoration: none;
}

@media(min-width:992px){
    .d-grid{
        height:6vw!important;
    }
}

@media(max-width:992px){
    .user_info{
    margin-left:30%;
}

}

nav{
    font-size:unset;
}

.message{
    text-align: center;
    width: 100%;
    padding-top: 10px;
    padding-bottom: 10px;
    margin: 0;
    border:1px solid #000;
    
}
</style>
</div>
</body>
</html>

<?
unset ($_SESSION['change_message']);
?>