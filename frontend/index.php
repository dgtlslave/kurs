<?php
    include '../classes/DBAccess.php';
    require '../classes/Authorization.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PMI Workflow</title>
    <link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../css/reset.css">
    <!-- <link rel="stylesheet" type="text/css" href="../css/style.css"> -->
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="logo"></div>
            <div class="nav_bar">

                <?php if (isset($_SESSION['logged_user'])) {?>
                        authorazed as: <?php echo $_SESSION['logged_user']['login']?>
                    <a href="logedout.php">logout</a>
                    <a href="dashboard.php">dashboard</a>
                    <a href="spec.php">specification</a>
                 <?php } else { ?>
                    <a href="signin.php">sign in</a>
                    <a href="reg.php">sign up</a>
                    <a href="about.php">about</a>
                <?php } ?>

            </div>
        </header>
        <main>
            <div class="form">
                <!-- <form name="signin" action="index.php" method="POST">
                    <fieldset form="signin">
                        <legend>Sign in</legend>
                    <input type="email" name="inputEmail" id="inputEmail" required autofocus>
                        <label for="inputEmail"></label>
                    <input type="password" name="inputPass" id="inputPass" required>
                        <label for="inputPass"></label>
                    <div class="btn">
                    <button class="submit" type="submit">Go</button>
                    <button class="clear" type="reset">Clear</button>
                    </div>
                    </fieldset>
                </form> -->
            </div>
        </main>
        <footer>
            <p><span>&copy  2017</span><span><a href="#">contact us</a></span></p>
        </footer>
    </div>
</body>
</html>
