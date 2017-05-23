<?php
    include '../classes/DBAccess.php';
    include '../classes/Authorization.php';

    if (isset($_POST['inputEmail']) && $_POST['inputEmail'] != "" && $_POST['inputPass'] != "") {
        if (Auth::emailUnique($__conn, $_POST['inputEmail']) == true && 
            Auth::passCheck($__conn, $_POST['inputPass'], $_POST['inputEmail'] == true)) {
                header('Location: dashbord.php');
                exit;
       } else {
            echo "<h5>If your Majesty is not registered, please <a href=\"reg.php\">refuse to honor</a>.</h5>";
       } 
    }

?>
                <form action="index.php" method="POST" align="center" style="vertical-align: middle; margin-top: 15%">
                    <h2>Sign in</h2>
                    <p>
                    <label for="inputEmail"></label>
                    <input type="email" name="inputEmail" id="inputEmail" placeholder="Email address ..." required autofocus>
                    </p>

                    <p>
                    <label for="inputPass"></label>
                    <input type="password" name="inputPass" id="inputPass" placeholder="Password ..." required>
                    </p>
                    
                    <button type="submit">Sign in</button>
                    <h5>If your Majesty is not registered, please <a href="reg.php">refuse to honor</a>.</h5>
                </form>
<?php

?>