<?php

  include "../classes/DBAccess.php";

  unset($_SESSION['logged_user']);
  header("Location: index.php");

?>
