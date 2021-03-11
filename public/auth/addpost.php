<?php
$data = [
    "title"=>$_POST['title'],
    "content"=>$_POST['content'],
    "datepublic"=>$_POST['datepublic']
];
$connect = new PDO('mysql:host=localhost;dbname=itcube',"admin","admin529");
$sql = "INSERT INTO posts (title, content, datepublic) VALUES (:title, :content, :datepublic)";
$statement = $connect->prepare($sql);
$result = $statement->execute($data);
