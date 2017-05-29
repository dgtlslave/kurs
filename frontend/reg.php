<?php
    require "../classes/DBAccess.php";

    //$data = $_POST;

    if (isset($_POST['do_signup'])) {

        $errors = array();

        if (trim($_POST['login']) == "") {
            $errors[] = "Enter your login, please.";
        }
        if (trim($_POST['email']) == "") {
            $errors[] = "Enter your e-mail, please.";
        }
        if ($_POST['password'] == "") {
            $errors[] = "Enter password, please.";
        }
        if ($_POST['password_2'] != $_POST['password']) {
            $errors[] = "The second password is not equal to the first password, please check and repet.";
        }
        if (empty($errors)) {
            //all is good - registrate - SQL
            echo "<div class=\"reg_succss\">Registration successful. <a href=\"index.php\">Get started</a></div>";
        }
        else {
            echo "<div class=\"sign_up_mssg\">".array_shift($errors)."</div>";
        }
    }
?>

<form action="reg.php" method="POST">
    <p>
        <input type="text" name="login" placeholder="login..." value = "<?php echo @$_POST['login'];?>">
    </p>
    <p>
        <input type="email" name="email" placeholder="email..." value = "<?php echo @$_POST['email']?>">
    </p>
    <p>
        <input type="password" name="password" placeholder="pass...">
    </p>
    <p>
        <input type="password" name="password_2" placeholder="pass_2...">
    </p>
    <p>
        <button type="submit" name="do_signup">Sign up</button>
    </p>
</form>
