<?php
$title = "Acasa";
require "blocks/header.php";
?>
<h3>Pagina principala</h3>

<?php

//echo date('m l Y H:i:s', time() + 1000) . '<br>';
echo date('m l Y H:i:s', strtotime("now"));
echo '<br>';

echo date('m l Y H:i:s', strtotime("+1 Houer"));
echo '<br>';

echo date('m l Y H:i:s', strtotime("-1 Week -2 day -3 Houer"));
echo '<br>';

echo time();
//print_r($_GET);
require "blocks/footer.php";
?>



























