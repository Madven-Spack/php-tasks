<?php
// 107
// Дан массив. При заходе на страницу GET 
// параметром передается число. Выведите в абзац элемент 
// массива, номер которого передан GET параметром. 

$arr = [
    'Главная',
    'Обо мне',
    'Карты'
];

var_dump($arr[$_GET['id']]);


?>