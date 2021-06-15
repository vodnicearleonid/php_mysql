<?php
$name = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

if (trim($name) == ""){
    echo "Completeaza campul cu numele";
}elseif (strlen(trim($name)) <= 1){
    echo "Acest nume nu exista";
}elseif (trim($email) == "" and trim($pass) == "" and trim($_POST['message']) == ""){
    echo "Completati toate campurile";
}else{
//    $_POST['password'] = md5($pass);
//    echo "<h3>Toate campurile</h3>";
//    foreach ($_POST as $key => $value){
//        echo "<p>$value</p>";
//    }
    header('Location: about.php');
    exit;
}

