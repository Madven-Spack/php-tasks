<?php
//125

// Сделайте функцию, которая будет возвращать массив, 
// заполненный N случайными числами из заданного 
// диапазона так, чтобы числа не повторялись. 


$data = [
    [
        'text' => '111',
        'href' => '1.html',
    ],
    [
        'text' => '222',
        'href' => '2.html',
    ],
    [
        'text' => '333',
        'href' => '3.html',
    ],
];
?>

<!-- Сформируйте с помощью этих данных следующую верстку: -->
<!-- <a href="1.html">111</a>
<a href="2.html">222</a>
<a href="3.html">222</a> -->





<?php foreach($data as $d): ?>

    <a href="<?= $d['href'] ?>"><?= $d['text'] ?></a>
<?php endforeach ?>