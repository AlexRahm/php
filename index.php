<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$a = 5;
$b = '05';
var_dump($a == $b); // Почему true?
// потому что для сравнения $b автоматически преобразовался в int, как левая часть сравнения
var_dump((int)'012345'); // Почему 12345?
// приведение типов к типу int
var_dump((float)123.0 === (int)123.0); // Почему false?
// потому что сравниваем не только по значению, но и по типу
var_dump((int)0 === (int)'hello, world'); // Почему true?
// потому что при приведении строки, которая начинается с буквы, к типу int получаем 0, в итоге значения и типы одинаковые

// поменять две переменные местами
$a = 1;
$b = 2;
$a += $b;
$b = $a - $b;
$a = $a - $b;
var_dump($a); // 2
var_dump($b); // 1
?>
    
</body>
</html>
