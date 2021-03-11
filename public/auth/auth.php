<?php

?>


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/index.css">
    <link rel="stylesheet" href="../style/auth.css">

    <title>Авторизация</title>
</head>
<body>
<!-- Форма авторизации-->
<form>
    <label>Логин
        <input type="text" name="login"  placeholder="Введите свой логин"><br>
    </label>
    <label>Пароль
        <input type="password" name="password" placeholder="Введите свой пароль"><br>
    </label>
    <button type="submit" class="login-btn">Войти </button> <br>
</form>

<p class="msg none"></p>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../script/auth.js"></script>
</body>
</html>