
<!DOCTYPE html>
<html lang="ukr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <title>Game</title>
  <link rel="stylesheet" href="css/Header.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/Body.css">
</head>
<form name="myform">
<input type="password" name="q1"/>
<input type="button" value="Check" onclick="check()">
</form>
<script>
function check() {
 var q1 = document.myform.q1.value;
if (q1 == "mircovki.ks") {
          <?php
		header('Location: image_mirkivki.html');
	  ?>
        }
else{
alert('Error');
}
}
</script>
<body>
  
<p><a href="img/avatar.png" >Скачать</a></p>
</body>

</html>