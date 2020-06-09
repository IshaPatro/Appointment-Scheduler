<?php
  session_start();
  if(empty($_SESSION['UserName'])){
      header("location:Login.php");
  }
  echo "hello";
  echo '<a href="logout.php?logout"> Logout</a>';
?>
