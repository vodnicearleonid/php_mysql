<?php
session_start();

unset($_SESSION['username']);
unset($_SESSION['email']);
unset($_SESSION['subject']);
unset($_SESSION['message']);

unset($_SESSION['error_username']);
unset($_SESSION['error_email']);
unset($_SESSION['error_subject']);
unset($_SESSION['error_message']);

function redirect(){
    header('Location: contacts.php');
    exit();
}

$username = htmlspecialchars(trim($_POST['username']));
$email = htmlspecialchars(trim($_POST['email']));
$subject = htmlspecialchars(trim($_POST['subject']));
$message = htmlspecialchars(trim($_POST['message']));

$_SESSION['username'] = $username; // set session username
$_SESSION['email'] = $email; // set session email
$_SESSION['subject'] = $subject; // set session subject
$_SESSION['message'] = $message; // set session message

if (strlen($username) <= 1){
    $_SESSION['error_username'] = "Wrong name, minimum 1 symbol";
    redirect();
}elseif (strlen($email) < 5 or strpos($email, "@") == false){
    $_SESSION['error_email'] = "Wrong email, minimum 5 symbols, and im the middle symbol @";
    redirect();
}elseif (strlen($subject) < 5){
    $_SESSION['error_subject'] = "Wrong subject, minimum 5 symbols";
    redirect();
}elseif (strlen($message)< 15){
    $_SESSION['error_message'] = "Wrong message, minimum 15 symbols";
    redirect();
}else{
    $subject = "=?utf-8?B?".base64_decode('subject')."?=";
    $headers = "From: $email\r\nReplay-to:  $email\r\nContent-type:text/plain; charet=utf-8\r\n";
    $_SESSION['success_mail'] = "Email sent successfully!";
    mail('vodnicear@gmail.com', $subject, $message, $headers);
    redirect();
}








//if (strlen($username) <= 1){
//   $error_username = "Wrong name, minimum 1 symbol";
//}elseif (strlen($email) < 5 or strpos($email, "@") == false){
//    $error_email = "Wrong email, minimum 5 symbols, and im the middle symbol @";
//}elseif (strlen($subject) < 5){
//    $error_subject = "Wrong subject, minimum 5 symbols";
//}elseif (strlen($message)< 15){
//    $error_message = "Wrong message, minimum 15 symbols";
//}


//if (strlen($username) <= 1){
//    $_SESSION['error_username'] = "error_username";
//    redirect();
//}elseif (strlen($email) < 5 or strpos($email, "@" == false)){
//    $_SESSION['error_email'] = "error_email";
//    redirect();
//}elseif (strlen($usersubject) <= 5){
//    $_SESSION['user_subject'] = "user_subject";
//    redirect();
//}elseif (strlen($usermessage) <= 15){
//    $_SESSION['error_message'] = "error_message";
//    redirect();
//}else{
//    $subject = "=?utf-8?B?".base64_decode('subject')."?=";
//    $headers = "From: $email\r\nReplay-to:  $email\r\nContent-type:text/plain; charet=utf-8\r\n";
//    $_SESSION['succes_mail'] = "email expediat cu succes!";
//    mail('vodnicear@gmail.com', $subject, $user_message, $headers);
//}
