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

$x = 10;
$y = 20;

echo $x + $y . "<br>";
echo $x - $y . "<br>";
echo $x  * $y . "<br>";
echo $x / $y . "<br>";
echo $x % $y . "<br>";

$x += 10; //$x = $x + 10;
$y -= 10; //$y = $y - 10;
echo $x."<br>";
echo $y."<br>";

$x++; //$x += 1;
$y--; //$y -= 1;

echo $x."<br>";
echo $y."<br>";

echo M_PI."<br>";
echo M_E."<br>";

echo abs(-22)."<br>";
echo ceil(3.1)."<br>";//rotungeste numarul res 4
echo floor(3.9)."<br>";//rotungeste numarul res 3
echo round(3.9)."<br>";//rotungeste numarul 3.9 = 4, 3.1 = 3
echo round(3.9474848, 3)."<br>";//rotungeste numarul parametru indica cite cifre dupa punct

$min = 5;
$max = 59;
$rand = mt_rand ($min , $max ). "<br>";// numar aleatoriu in finctie de interval
echo $rand++. "<br>";

echo min(3, 9, 6, 4, 8, 1)."<br>"; // gaseste valoarea minima  1
echo max(3, 9, 6, 4, 8, 1)."<br>"; // gaseste valoarea minima  9


?>
</body>
</html>

