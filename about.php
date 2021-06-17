<?php
$title = "Despre noi";
require "blocks/header.php";
?>

<h3>Despre noi</h3>

<div class="container mt-2">

    <form action="check_get.php" method="get">
        <div class="form-floating mb-3">
            <input type="text" name="username" class="form-control" placeholder="Numele meu">
            <label for="floatingName">My name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control" placeholder="emailulmeu@example.com">
            <label for="floatingEmail">Email address</label>
        </div>
        <div class="form-floating mb-3"">
        <input type="password" name="password" class="form-control" placeholder="Parola mea">
        <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" name="message" placeholder="Leave a comment here" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Comments</label>
        </div>
        <input class="btn btn-primary" type="submit" value="trimite">
    </form>

<!--    <form action="check_post.php" method="post">-->
<!--        <div class="form-floating mb-3">-->
<!--            <input type="text" name="username" class="form-control" placeholder="Numele meu">-->
<!--            <label for="floatingName">My name</label>-->
<!--        </div>-->
<!--        <div class="form-floating mb-3">-->
<!--            <input type="email" name="email" class="form-control" placeholder="emailulmeu@example.com">-->
<!--            <label for="floatingEmail">Email address</label>-->
<!--        </div>-->
<!--        <div class="form-floating mb-3"">-->
<!--            <input type="password" name="password" class="form-control" placeholder="Parola mea">-->
<!--            <label for="floatingPassword">Password</label>-->
<!--        </div>-->
<!--        <div class="form-floating mb-3">-->
<!--            <textarea class="form-control" name="message" placeholder="Leave a comment here" style="height: 100px"></textarea>-->
<!--            <label for="floatingTextarea2">Comments</label>-->
<!--        </div>-->
<!--        <input class="btn btn-primary" type="submit" value="trimite">-->
<!--    </form>-->

</div>

<?php
require "blocks/footer.php";
?>





























