<?php

class Post
{
    // Считаем номер текущей страницы передачей значения методо GET
    // Если значения нет устанавливаем 1
    function getNumberPage()
    {
        if(isset($_GET['page'])){
            $pageNum = (int)$_GET['page'];
        }else{
            $pageNum = 1;
        }
        return $pageNum;
    }
    // Получаем посты из БД по лимиту
    function getPostsPerPage($startindex, $countview)
    {
        $sql = "SELECT * FROM `posts` LIMIT $startindex, $countview;";
        $connection = new PDO("mysql:host=localhost;dbname=itcube", "admin", "admin529");
        $statement = $connection->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }
    // Получаем количество всех постов в БД
    function getAllCountPosts()
    {
        $sql = "SELECT COUNT(*) FROM `posts`";
        $connection = new PDO("mysql:host=localhost;dbname=itcube", "admin", "admin529");
        $statement = $connection->prepare($sql);
        $statement->execute();
        return $statement->fetchColumn();

    }
    // 
    function getNumberLastPage($countposts, $countview)
    {
        return ceil($countposts/$countview);
    }

}
$newPost = new Post();
$numberPage =  $newPost->getNumberPage();
// количество постов на странице
$countView = 3;
// с какой записи начать выборку
$startIndex = ($numberPage - 1) * $countView;
// все посты отобранные по лимиту для отображения на 1-ой странице
$allPosts = $newPost->getPostsPerPage($startIndex,$countView);
// общее количество записей в бд
$allCountPosts = $newPost->getAllCountPosts();
// считаем номер последней страницы
$lastPage = $newPost->getNumberLastPage($allCountPosts,$countView);
