'use strict';
/*-------Выплывающее меню в разделе "Направления" <li class="direction"> ----*/
let btnLi = document.querySelector(".direction");
let ul = document.querySelector(".nav-menu-courses");
console.log(btnLi);
btnLi.addEventListener('click', function () {

ul.classList.toggle('show-menu');

})
