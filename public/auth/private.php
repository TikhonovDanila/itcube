<?php
session_start();
if ($_SESSION['user']['login'] != 'tkhvds'){
    header("Location: auth.php");
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="../style/private.css">
</head>
<body>
    <p>Добро пожаловать,<?php echo $_SESSION['user']['name']; ?></p>
    <div class="addPost">
        <input type="text" name="title" placeholder="Введите заголовок статьи"><br>
        <textarea name="content"  cols="30" rows="10" placeholder="Введите текст статьи"></textarea><br>
        <input type="date" name="datepublic"><br>
        <button type="submit" class="addpost-btn">Опубликовать</button><br>
    </div>

    <p><a href="../posts.php">Выйти</a></p>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../script/addPost.js"></script>
</body>
</html>
