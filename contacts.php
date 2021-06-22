<?php
session_start();
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

$title = "Contacts";
require "blocks/header.php";
?>
    <h2 class="mt-5"><?php $title ?></h2>

    <h6>Contacts</h6><br>

    <div class="text-success"><?=$_SESSION['success_mail']?></div>

    <form action="check_contact.php" method="post">
        <input type="text" name="username" value="<?=$_SESSION['username']?>" placeholder="My Username" class="form-control">
        <div class="text-danger"><?=$_SESSION['error_username']?></div><br>

        <input type="email" name="email" value="<?=$_SESSION['email']?>" placeholder="My Email" class="form-control">
        <div class="text-danger"><?=$_SESSION['error_email']?></div><br>

        <input type="text" name="subject" value="<?=$_SESSION['subject']?>" placeholder="My Subject" class="form-control">
        <div class="text-danger"><?=$_SESSION['error_subject']?></div><br>

        <textarea name="message" placeholder="My Message" class="form-control"><?=$_SESSION['message']?></textarea>
        <div class="text-danger"><?=$_SESSION['error_message']?></div><br>

        <input class="btn btn-primary" type="submit" value="send!" >
    </form>

<?php
require "blocks/footer.php";
?>