<?php
    session_start();
    if (!$_SESSION['user']) {
        header('Location: ../reg/');
    }
?>

<!doctype html>
<html lang="ukr">
<head>
    <meta charset="UTF-8">
    <title>Створити пост</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<body>
<?php
    require_once "header.php"
?>
<div class="main">
<div class="main-container">
<div class="left_side_bar">
    <ul>
        <h1>Пам'ятка про створення постів</h1>
        <li>Можна додавати картинки для цього натисніть на <span class="bi bi-upload fs-4"></span></li>
        <li>Максимальний розмір повідомлення 10000 символів</li>
        <h2>Забороненно:</h2>
        <li>Використовувати нeцензурну лексику</li>
        <li>Не публікуйте пост якщо він може образити інших</li>
    </ul>
</div>

    <div class="post-block">
        <form action="deliver.php" method="post"  enctype="multipart/form-data">        
            <textarea type="text" name="post_text" placeholder="Напишіть про що думаєте" maxLenght="10000" autocomplite="off" required="" oninvalid="this.setCustomValidity('Неможливо відправити пусте повідомлення!')" oninput="setCustomValidity('')" rows="15" cols="78" class="post_text"> </textarea>
            <label for="fileinput">Оберіть фото для завантаження:</label>
            <input type="file" name="photo" id="fileinput" accept="image/*"><br>
            <button type="submit" class="send btn btn-dark d-inline" style="font-size: 20px;">Відправити</button>
            <div placeholder="Введіть повідомлення" name="post_text" contenteditable="true" style=" user-select: text;  overflow-wrap: break-word;"></div>
                    
        </form>
    </div>

</div>
<style>
:out-of-range{
    background: red;
}
.img{
    margin-top:50px;
}

.send{
    font-size: 20px;
    border: none;
    margin: auto;
    margin-top: 3vh;
}

.post_text{
    height:50%;
    font-size: 1.1vw;
    resize: none;
}

form{
    width: fit-content;
}

label, #fileinput{
    font-size: large;
}

.main-container{
    height: 100%;
    display: inline-block;
}

.post-block{
    text-align: center;
    display: inline-block;
    width: 60vw;
    border: 1px solid black;
    
}

.main-container {
    width: 30vw;
    margin: auto;
    position: relative; 
}
.left_side_bar, .post-block, .right_side_bar{ position: absolute; }
.left_side_bar{
    background: #C6DD7D; 
    width: fit-content; 
    margin-right: 2%;
    left: 7%;
    height: fit-content;
    padding: 0 5vw;

}
.post-block {
    background: #F4ECCE; 
    left: 40vw;  
    width: fit-content;
}
</style>
</div>
</body>
</html>