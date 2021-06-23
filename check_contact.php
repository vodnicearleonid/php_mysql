<?php
session_start();

unset($_SESSION['error_username']);
unset($_SESSION['error_email']);
unset($_SESSION['error_subject']);
unset($_SESSION['error_message']);
unset($_SESSION['success_mail']);


function redirect(){
    header('Location: contacts.php');
    exit();
}

$_SESSION['username'] = htmlspecialchars(trim($_POST['username']));
$_SESSION['email'] = htmlspecialchars(trim($_POST['email']));
$_SESSION['subject'] = htmlspecialchars(trim($_POST['subject']));
$_SESSION['message'] = htmlspecialchars(trim($_POST['message']));


if (strlen($_SESSION['username']) <= 1){
    $_SESSION['error_username'] = "Wrong name, minimum 1 symbol";
    redirect();
}elseif (strlen($_SESSION['email']) < 5 or strpos($_SESSION['email'], "@") == false){
    $_SESSION['error_email'] = "Wrong email, minimum 5 symbols, and im the middle symbol @";
    redirect();
}elseif (strlen($_SESSION['subject']) < 5){
    $_SESSION['error_subject'] = "Wrong subject, minimum 5 symbols";
    redirect();
}elseif (strlen($_SESSION['message'])< 15){
    $_SESSION['error_message'] = "Wrong message, minimum 15 symbols";
    redirect();
}else{
    $subject = "=?utf-8?B?".base64_decode('subject')."?=";
    $message = $_SESSION['message'];
    $headers = "From: $message \r\nReplay-to: $message\r\nContent-type:text/plain; charet=utf-8\r\n";
    $_SESSION['success_mail'] = "Email sent successfully!";
    mail('vodnicear@gmail.com', $subject, $_SESSION['message'], $headers);
    redirect();
}