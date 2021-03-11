<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Центр цифрового образования детей 'IT-CUBE' Братск" >
    <title>Центр цифрового образования детей</title>

    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/index.css">
</head>
<body>
  <div class="container">
    <?php require_once 'header.php' ?>
    <main>
        <div class="slider">
            <div class="item">
                <img src="images/python-1-1024x751.jpg" alt="Первый слайд">
                <!--<div class="slideText">Заголовок слайда 1</div>-->
            </div>

            <div class="item">
                <img src="images/Robo-1-1024x751.jpg" alt="Второй слайд">
                <!--<div class="slideText">Заголовок слайда 2</div>-->
            </div>

            <div class="item">
                <img src="images/VR-AR-1024x751.jpg" alt="Третий слайд">
                <!-- <div class="slideText">Заголовок слайда 3</div> -->
            </div>

            <a class="prev" onclick="minusSlide()">&#10094;</a>
            <a class="next" onclick="plusSlide()">&#10095;</a>
            <!-- <div class="slider-dots">
                <span class="slider-dots_item" onclick="currentSlide(1)"></span>
                <span class="slider-dots_item" onclick="currentSlide(2)"></span>
                <span class="slider-dots_item" onclick="currentSlide(3)"></span>
            </div>-->
        </div>


    </main>
  </div>

  <script src="script/btnMenu.js"></script>
  <script src="script/carousel.js"></script>
</body>
</html>