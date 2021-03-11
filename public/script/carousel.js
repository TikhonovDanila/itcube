'use strict';
// карусель
/* Индекс слайда по умолчанию */
let slideIndex = 1;
showSlides(slideIndex);
autoSlider();
/* Функция увеличивает индекс на 1, показывает следующй слайд*/
function plusSlide() {
    showSlides(slideIndex += 1);
}

/* Функция уменьшает индекс на 1, показывает предыдущий слайд*/
function minusSlide() {
    showSlides(slideIndex -= 1);
}

/* Устанавливает текущий слайд */
function currentSlide(n) {
    showSlides(slideIndex = n);
}

/* Основная функция слайдера */
function showSlides(n) {
    let i;
    let slides = document.querySelectorAll(".item");
    let dots = document.querySelector(".slider-dots_item");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    /*
    for (i = 0; i < dots.length; i++) {
        dots[i].classList = dots[i].classList.replace(" active", "");
    }*/
    slides[slideIndex - 1].style.display = "block";
    //dots[slideIndex - 1].classList += "active";
}
/* Авто прокрутка слайдера */
function autoSlider() {
    let i;
    let slides = document.querySelectorAll(".item");
    let dots = document.querySelector(".slider-dots_item");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}
    /* for (i = 0; i < dots.length; i++) {
         dots[i].classList = dots[i].classList.replace(" active", "");
     }*/
    slides[slideIndex-1].style.display = "block";
    // dots[slideIndex-1].classList += " active";
    setTimeout(autoSlider, 10000); // Измените значения авто прокрутки в миллисекундах (ms), пример 6000 это 6 секунд
}