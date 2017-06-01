<?php
  include "../classes/DBRequest.php";


  if (isset($_POST['signin'])) {

    $errors = array();

    if (DBRequest::loginCheck($__conn, $_POST['login']) == true) {

      if (password_verify($_POST['password'], DBRequest::passCheck($__conn, $_POST['password']))) {
        echo "test";
      } else {
        $errors[] = "Password not valid";
      }

    } else {
      $errors[] = "User with current login does not exist."
    }

  }


 ?>

<form class="signin" action="singin.php" method="POST">
  <p>
    <input type="text" name="login">
  </p>
  <p>
    <input type="password" name="password">
  </p>
  <p>
    <input type="submit" name="signin" value="GO">
  </p>
</form>
