<?php
require_once "../src/Model/Post.php";

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Центр цифрового образования детей 'IT-CUBE' Братск" >
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/posts.css">
    <title>Центр цифрового образования детей</title>
</head>
<body>
<div class="container">
    <?php require_once 'header.php' ?>
    <main>
        <h2>It-Лента</h2>
        <div class="pagination">
            <!-- вывод пагинатора -->
            <ul>
                <?php if($numberPage > 1): ?>
                    <li><a href="posts.php?page=1">&lt;&lt;</a></li>
                    <li><a href="posts.php?page=<?=$numberPage-1;?>">&lt;</a></li>
                <?php endif; ?>
                <?php for($i = 1; $i <= $lastPage; $i++): ?>
                    <li <?=($i == $numberPage) ? 'class="current"' : '';?>><a href="posts.php?page=<?=$i;?>"><?=  $i; ?></a></li>
                <?php endfor; ?>

                <?php if($numberPage < $lastPage): ?>
                    <li><a href="posts.php?page=<?=$numberPage+1;?>">&gt;</a></li>
                    <li><a href="posts.php?page=<?=$lastPage;?>">&gt;&gt;</a></li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="posts">
        <!-- Вывод постов по лимиту -->
            <?php foreach($allPosts as $onePost): ?>
            <div class="posts-content">
                <?=$onePost['title'];?>
                <p><?=$onePost['content'];?></p>
                <a href="/public/auth/private.php?id=<?=$onePost['id'];?>">Подробнее</a>
                <p>Дата публикации: <?=$onePost['datepublic'];?></p>
                <hr/>
            </div>
            <div class="posts-image">
                <img src="images/<?=$onePost['image'];?>" alt="">
            </div>
            <?php endforeach; ?>
        </div>

    </main>
</div>
<script src="script/btnMenu.js"></script>
</body>
</html>
