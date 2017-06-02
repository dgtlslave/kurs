<?php
  include "../classes/DBRequest.php";
  include "../classes/DBAccess.php";

  if (isset($_POST['signin'])) {

    $errors = array();

    $user = DBRequest::signInCheck($__conn, $_POST['login'], $_POST['password']);

    if ($user == true) {
      $_SESSION['logged_user'] = $user;
      header("Location: index.php");
    } else {
       $errors[] = "Login or password are incorrect.";
    }
    if (!empty($errors)) {
      echo "<div class=\"sign_in_mssg\">".array_shift($errors)."</div>";
    }
  }


 ?>

<form class="signin" action="signin.php" method="POST">
  <p>
    <input type="text" name="login" value="<?php echo @$_POST['login']?>">
  </p>
  <p>
    <input type="password" name="password">
  </p>
  <p>
    <button type="submit" name="signin">GO</button>
  </p>
</form>
