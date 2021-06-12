<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>l2php</title>
</head>
<body>
<?php

define('MY_AGE', 37);
echo MY_AGE . '<br>';

$number = 5; //int
//$number = 45;
$num = -0.56; //float
$str = "Variabilele"; //string
$bool = false; // boolean
$a = 0.5;
$b = "0.5";

echo $a + floatval($b) . "</br>";

echo $str . ': ' . $number . '.Var 2 ' . $num;
?>

</body>
</html>

