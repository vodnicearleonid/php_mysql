<?php
$title = "Acasa";
require "blocks/header.php";
?>
<h3>Pagina principala</h3>

<?php
//echo '<pre>';
//print_r($_SERVER);
//echo '</pre>';
//phpinfo();

//echo $_SERVER['HTTPS'];
//echo $_SERVER['HTTP_HOST'];//localhost:63342
//echo $_SERVER['HTTP_HOST']. ' - ' . $_SERVER['REQUEST_URI']; // localhost:63342 - /PHP_MySQL/index.php?_ijt=p3ljqddm5qm59asjt1lis73jne
//echo $_SERVER['HTTP_USER_AGENT'];// Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36

//echo $url = $_SERVER['REQUEST_URI'];///PHP_MySQL/index.php?_ijt=1dipbn1k8b7t90bpl5usjm11vf
//echo '<br>';
//
//$link = explode("?_ijt=", $_SERVER['REQUEST_URI']); //Array ( [0] => /PHP_MySQL/index.php [1] => 1dipbn1k8b7t90bpl5usjm11vf )
//print_r($link);
//echo '<br>';
//
//$redirect = "http://".$_SERVER['HTTP_HOST'].$link[0]; //http://localhost:63342/PHP_MySQL/index.php
//print_r($redirect);
//echo '<br>';



//$arrUrl = parse_url($_SERVER['REQUEST_URI']);
//if ($arrUrl['scheme'] != 'https') {
//    header("Location: https://{$arrUrl['host']}/{$arrUrl['path']}");
//   die;
//}


//$url = $_SERVER['REQUEST_URI'];
//$parse = parse_url($url);
//$component = $parse['scheme'];
//$arrparse = parse_url ($url, $component = -1);
//print_r($arrparse);
//
//exit();

//$url = parse_url('http://localhost:63342/PHP_MySQL/index.php?_ijt=e3ujtk0g77uaskl3ia7cgbskf1');
//$url = $_SERVER['REQUEST_URI'];
//print_r($url);

//$arrUrl = parse_url($_SERVER['REQUEST_URI']);
//print_r($arrUrl);

//echo '<pre>';
//print_r($_GET);
//echo '</pre>';
////exit();
//
//$first_part_url = explode('?', $_SERVER['REQUEST_URI']);
//print_r($first_part_url);
////exit();


if (isset($_GET['_ijt'])) {
    $first_part_url = explode('?', $_SERVER['REQUEST_URI']);
    header("Location: " . $first_part_url[0]);
    exit();
}

//if ($_SERVER['REQUEST_URI'] != "") {
//    $first_part_url = explode('?', $_SERVER['REQUEST_URI']);
//    header("Location: " . $first_part_url[0]);
//    exit();
//}



//if ($url["scheme"] != "https"){
//
//    $link = explode("?_ijt=", $_SERVER['REQUEST_URI']);
//    $redirect = "http://".$_SERVER['HTTP_HOST'].$link[0];
//    header('HTTP/1.1 301 Moved Permanently');
//    header('Location: ' .$redirect );
//    exit();
//}




//course
//if ($_GET['_ijt='] != ""){
//    $link = explode("?_ijt=", $_SERVER['REQUEST_URI']);
//    $redirect = "http://".$_SERVER['HTTP_HOST'].$link[0];
//    header('HTTP/1.1 301 Moved Permanently');
//    header('Location: ' .$redirect );
//    exit();
//}


require "blocks/footer.php";
?>



























