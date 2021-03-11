<?php
session_start();

$connect = mysqli_connect('localhost','admin','admin529','itcube');

$login = $_POST['login'];
$password = $_POST['password'];
    // Проверяем пользовательский ввод
$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' ");
    // Проверяем логин и пароль, если значений нет записываем ошибку в массив
$error_fields = array();
if ($login === ''){
       $error_fields[] = 'login';
}
if ($password === ''){
    $error_fields[] = 'password';
}
// Если массив с ошибками содержит данные присваиваем статут фолс и записываем в message ошибку
if (!empty($error_fields)){
    $response=[
        "status"=>false,
        "type"=> 1,
        "message"=>'Проверьте правильность полей',
        "fields"=> $error_fields,
    ];
    echo json_encode($response);
    die();
}

if (mysqli_num_rows($check_user) > 0 ){
    $user = mysqli_fetch_assoc($check_user);
    $_SESSION['user'] = [
        "id"=>$user['id'],
        "email"=>$user['email'],
        "login"=>$user['login'],
        "name"=>$user['name']
    ];
    $response =[
        "status"=>true
    ];
    echo json_encode($response);
} else {
    $response =[
        "status"=>false,
        "message"=>'Не верный логин или пароль'
    ];
    echo json_encode($response);
}