<?php
session_start();
//session_destroy();
//echo "<pre>";
//print_r($_SESSION);
//echo "</pre>";

$title = "Contacts";
require "blocks/header.php";
?>
    <h2 class="mt-5"><?php $title ?></h2>

    <h6>Contacts</h6><br>
<?php
if (isset($_SESSION['success_mail'])) {
    echo '<div class="text-success">' . $_SESSION['success_mail'] . '</div>';
}
?>

    <form action="check_contact.php" method="post">
        <input type="text" name="username" value="<?=$_SESSION['username']?>" placeholder="My Username" class="form-control"><br>
        <?php
            if (isset($_SESSION['error_username'])){
               echo '<div class="text-danger">' . $_SESSION['error_username'] . '</div><br>';
            }
        ?>

        <input type="email" name="email" value="<?=$_SESSION['email']?>" placeholder="My Email" class="form-control"><br>
        <?php
        if (isset($_SESSION['error_email'])){
            echo '<div class="text-danger">' . $_SESSION['error_email'] . '</div><br>';
        }
        ?>

        <input type="text" name="subject" value="<?=$_SESSION['subject']?>" placeholder="My Subject" class="form-control"><br>
        <?php
        if (isset($_SESSION['error_subject'])){
            echo '<div class="text-danger">' . $_SESSION['error_subject'] . '</div><br>';
        }
        ?>

        <textarea name="message" placeholder="My Message" class="form-control"><?=$_SESSION['message']?></textarea><br>
        <?php
        if (isset($_SESSION['error_message'])){
            echo '<div class="text-danger">' . $_SESSION['error_message'] . '</div><br>';
        }
        ?>

        <input class="btn btn-primary" type="submit" value="send!" >
    </form>

<?php
require "blocks/footer.php";
?>