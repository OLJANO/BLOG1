<?php require 'inc/msg.php' ?>

<form action="" method="post">
    <p><label for="email">Email:</label><br />
    <?php
?>
<?php require 'inc/header.php' ?>    <input type="email" name="email" id="email" required="required" />
    </p>
    <p><label for="password">Password:</label><br />
        <input type="password" name="password" id="password" required="required" />
    </p>
    <p><input type="submit" value="Log In" /></p>
</form>

    <?php require 'inc/footer.php' ?>

Not_found
<?php
?>
<?php require 'inc/header.php' ?>
<h1>Page Not Found</h1>
<p>Whoops! Sorry but this page doesn't seem to exist.</p>
<?php require 'inc/footer.php' ?>

