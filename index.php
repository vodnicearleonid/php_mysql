<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Уроки PHP 9 – Цикл for, while и do while. Операторы циклов</title>
</head>
<body>

</body>
</html>

<?php

//For

//for ($i = 0; $i < 10; $i++){
//    echo $i.'<br>';
//}

//for ($i = 10; $i <= 20; $i++){
//    echo $i.'<br>';
//}

//for ($i = 100; $i > 20; $i -= 5){
//    echo $i.'<br>';
//}


//While

//$i = 1;
//
//while ($i <= 10){
//    echo $i . '<br>';
//    $i++;
//}


//do while

//$i = 100;
//do {
//    echo $i;
//}while($i < 10);



//for ($el = 100; $el > 10; $el /= 2 ){
//    echo $el.'<br>';
//}

//for ($el = 100; $el > 10; $el /= 2 ){
//    if ($el < 50)
//        break;
//    echo $el.'<br>';
//}

//for ($el = 100; $el > 10; $el /= 2 ){
//
//    if ($el < 15)
//        break;
//    if ($el % 2 == 0)
//        continue;
//
//    echo $el.'<br>';
//}

//$list = [5, 7, 3, 8, "some", 45.7];
//
//for ($i = 0; $i < count($list); $i++){
//    echo "Element -  $i: $list[$i]<br>";
//}

//foreach
$list = ["age" => 45, "name" => "Alex", "hobby" => "Football"];
$arr = [5, 7, 8, 9];

foreach ($list as $key => $value){
    echo "Key: $key  Value: $value <br>";
}

echo "<br>";

foreach ($arr as $key => $value){
    echo "Key: $key Value: $value<br>";
}














