<?

session_start();
require_once "connect.php";

$item=$_GET['item'];
$id=$_SESSION['user']['id'];

if($item='avatar'){
$path = 'uploads/' . time() . $_FILES['avatar']['name'];
if($_FILES['avatar']['name']!=''){
    if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
      die ('ERROR');
    }}
    mysqli_query($connect, "UPDATE `users` SET `avatar`='$path' WHERE `id`='$id'") or die('ERROR');
}

if($item='name'){
    $name=$_POST['name'];
    mysqli_query($connect, "UPDATE `users` SET `full_name`='$name' WHERE `id`='$id'") or die('ERROR');
}

if($item='email'){
    $email=$_POST['email'];
    mysqli_query($connect, "UPDATE `users` SET `email`='$email' WHERE `id`='$id'") or die('ERROR');
}
?>