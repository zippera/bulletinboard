<?php
require_once "nav.php"; 
      unset ($_SESSION['username']);
	  if(empty($_SESSION['username']))
      echo "<script>location.href='index.php';</script>";
     else
      echo "sorry";
 
?>

