<?php
    require_once "connect.php";
   $USER_ID=$_SESSION['user']['id'];
   $result=mysqli_query($connect, "UPDATE `users` SET `chat`=NULL WHERE `id`='$USER_ID'");
   $m = "SELECT COUNT(*) FROM `notification` WHERE `status`='0' AND `user_id`='$USER_ID'";
   $all_done=mysqli_query($connect, $m);
   $n = mysqli_fetch_row( $all_done )[0];
if($n>=1){
       $display="inline-block";
       $color="color:yellow";
       $text="text-yellow";}
   else{
       $display="none";
       $color="";
       $text=""; 
   }
   
?>
   
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand"  href="/">
                <h1>&infin; Inifinity</h1>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="../post">Пости</a>
                    <!--<a class="nav-link" href="../books/">Підручники</a>
                    <a  href="../test/" class="nav-link">Тестування</a>-->
                    <a href="../reg/" class="nav-link">Профіль</a>
                    
                    <div class="dropdown">
                      <a class="nav-link dropdown-toggle active" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Спілкування
                      </a>
                    
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item active" href="../search/">Пошук</a></li>
                        <li><a class="dropdown-item" href="../friends/">Друзі</a></li>
                        <li><a class="dropdown-item" href="../chat/">Чат</a></li>
                      </ul>
                    </div>
                    <a class="nav-link"  href="../notification/">
                        <span class="<?="$text"?> ">Повідомлення</span>
                        <span class="bi bi-bell-fill" style="<?="$color"?>">
  <span class="position-absolute top-10 translate-middle badge d-<?="$display"?> rounded-pill bg-danger start-90">
    <?="$n"?>
    <span class="visually-hidden">unread messages</span>
  </span>
</span>

</a>
                </div>
            </div>
        </div>
    </nav>