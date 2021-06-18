<?php
$title = "Acasa";
require "blocks/header.php";
?>
<h3>Pagina principala</h3>

<?php

$list = [5,7,3,6,7,8];
//unset($list[1]); // stergem un element din masiv
//sort($list); //sortam un masiv de la mic la mare
//rsort($list); //sortam un masiv invers de la mare la mic
//shuffle($list); //sortam un masiv aleatoriu
//echo in_array(3, $list);// cauta un element in masiv, 1true, numic false rezultat 1Array ( [0] => 6 [1] => 8 [2] => 7 [3] => 3 [4] => 5 )

//if (in_array(3, $list) == ""){
//    echo "not found";
//}else{
//    echo "found";
//}

$arr = array_slice($list, 0, count($list)); // array(6) { [0]=> int(5) [1]=> int(7) [2]=> int(3) [3]=> int(6) [4]=> int(7) [5]=> int(8) }
var_dump($arr);

echo '<br>';
echo '<br>';

$arr1 = [5, 7];
$arr2 = [6, 8, 9];
$arr3 = array_merge($arr1, $arr2); //lipeste mai multe masive Array ( [0] => 5 [1] => 7 [2] => 3 [3] => 6 [4] => 7 [5] => 8 )
print_r($arr3);

echo '<br>';
echo '<br>';



print_r($list);

echo '<br>';
echo '<br>';

$x = 10;
echo gettype($x); //integer
echo '<br>';
echo '<br>';

$x = "10";
echo gettype($x); //string
echo '<br>';
echo '<br>';

$x = floatval("10");
echo gettype($x); //double
echo is_numeric($x)."<br>";//double1
echo '<br>';
echo '<br>';


$x = "10";
echo  is_integer($x)."<br>";//false
echo '<br>';
echo '<br>';

$x = "10";
echo  is_double($x)."<br>";//false
echo '<br>';
echo '<br>';

$x = "10";
echo  is_string($x)."<br>";//1
echo '<br>';
echo '<br>';

$x = "10";
echo  is_numeric($x)."<br>";//1
echo '<br>';
echo '<br>';

$x = "10";
echo  is_bool($x)."<br>";//false
echo '<br>';
echo '<br>';

$x = [];
echo  is_array($x)."<br>";//1 true
echo '<br>';
echo '<br>';

$str = "Exemplu";
echo  strpos($str, "mp"); // 3 transforma in masiv din trei elemente
echo '<br>';
echo '<br>';

$words = "jhon, bob, alex";
$arr_words = explode(",", $words); // Array ( [0] => jhon [1] => bob [2] => alex )
print_r($arr_words);
echo "<br>" . implode(" | ", $arr_words); //jhon | bob | alex

echo '<br>';
echo '<br>';
require "blocks/footer.php";
?>



























