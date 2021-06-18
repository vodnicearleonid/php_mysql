<?php
$title = "Acasa";
require "blocks/header.php";
?>
<h3>Pagina principala</h3>

<?php
//$file = fopen("text.txt", "w");
//fwrite($file, "Exemplu de text scris in fisier prin limbajul de programare php");
//fclose($file);
//
//echo '<br>';
//echo '<br>';

//$file = fopen("text.txt", "a");
//fwrite($file, "\nExemplu de adaugate text in fisier la cel existent");
//fclose($file);
//
//echo '<br>';
//echo '<br>';

//$filename = "text.txt";
//$file = fopen($filename, "r");
//    $content = fread($file, filesize($filename));
//fclose($file);
//echo "<pre>" . $content . "</pre>";
//
//echo '<br>'; // test content file, test2, test3

//$filename = "text.txt";
//$file = fopen($filename, "r");
//$content = fread($file, filesize($filename));
//fclose($file);
//echo "<pre>" . $content . "</pre>";

//echo '<br>'; // test content file, test2, test3
//file_put_contents("text.txt", "text exemlu");//adauga test in fisierul creat sau existent
//file_get_contents("a.txt");// afiseaza continutul text din fisier

//echo "<br>";
//echo file_exists("a.txt");// 1

//echo "<br>";
//rename("a.txt", "new.txt");//redenumeste fisierul a.txt in new.php

//echo "<br>";
//unlink("test.php");//sterge complet fisierul

echo __FILE__;// /Users/leovodnicear/Documents/PHP_MySQL/index.php drumul fisierului

echo fileperms(__FILE__);






require "blocks/footer.php";
?>



























