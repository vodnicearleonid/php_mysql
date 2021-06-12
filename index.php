<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Уроки 6</title>
</head>
<body>

</body>
</html>

<?php

/*
$a = 6;

if($a !== 5) {
   echo "$a = 5";
}
*/


    $a = 6;
    $str = "Hello";
    $isWeatherGood = false;

    if($str != "Hello" or $isWeatherGood == false) { // ($str != "Hello" && !$isWeatherGood)
           echo  "isWeatherGood";
    }elseif ($a == 5) {
        $res = '$a == 5';
        echo $res;

        if ($str == "Hello") {
            echo '<br>yes $str = Hello';
        }else {
            echo "no!";
        }

    }elseif ($a > 50) {
        echo '$a > 50';

    }elseif ($a <= 4) {
        echo '$a <= 45';

    } else {
        echo " else ";
    }




