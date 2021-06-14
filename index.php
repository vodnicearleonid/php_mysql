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

//function info($world){
//    echo "$world<br>";
//}
//info(4);
//info("hello");
//info(5.6);

//echo '<br>';
//
//function math($x, $y){
//    $res = $x + $y;
//   info($res);
//}
//math(4, 6);
//math(5, 5);

//echo '<br>';
//
//function math($x, $y){
//    return $x + $y;
//}
//$res_1 = math(4, 6);
//$res_2 = math(5, 5);
//
////info($res_1);
////info($res_2);
//
//echo '<br>';

//function summary($arr){
//    $summa = 0;
//    foreach ($arr as $value){
//        $summa += $value;
//    }
//    return $summa;
//}
//
//$list = [5, 7, 3];
//echo summary($list)."<br>";
//echo summary([5, 2, 9])."<br>";

//echo '<br>';
//
//function info(){
//    $x = 0;
//}
//
//$x = 10;
//info();
//echo $x;

//echo '<br>';
//
//function info(){
//    global $x;
//    $x = 0;
//}
//
//$x = 10;
//info();
//echo $x;

//echo '<br>';
//
//function click(){
//    static $count;
//    $count++;
//    echo  $count."<br>";
//}
//
//click();
//click();
//click();
//
//echo '<br>';

function click(){
    //static $count;
    $count = 0;
    $count++;
    echo  $count."<br>";
}

click();
click();
click();































