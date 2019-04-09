<?php
  session_start();

  $_SESSION['color'] = $_POST['color'];
  echo $_SESSION['color'];


 ?>
