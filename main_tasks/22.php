<?php
 // 85
// Дан массив. Сделайте так, чтобы при обновлении страницы 
// в абзац выводился случайный элемент массива.

$arr = [1, 2, 58, 100, 1235];

echo $arr[array_rand($arr)];


?>