<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Уроки PHP 8 – Массивы данных. Одномерные и многомерные</title>
</head>
<body>

</body>
</html>

<?php

//Одномерные массивы
$numbs = array(1, 3, -77, 4, 66, 8);
$numbs[2] = 9;
var_dump($numbs[2]);

echo '<br>';

//Multidimensional Arrays
$arr = [4, true, 6, "8", 0.4, 'c', 24, 16];
$arr[3] = "88";
echo $arr[3];

echo '<br>';

//Associative Arrays
$list = ["age" => 50, "name" => "Alex", "hobby" => "Football", 3 => "three"];
$list["name"] = "Bob";
echo $list["name"];

echo '<br>';

echo $list[3];

echo '<br>';

//многомерный массив
$matrix = [
        [4, 6.4, 8],
        [3, 2],
        [1, 5, 8, "test многомерный массив"]
];
echo $matrix[1][1] = "переопределения массива"; //переопределения массива

echo '<br>';

echo $matrix[2][3];

echo '<br>';





