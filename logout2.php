<?php
   session_start();
   unset($_SESSION["adminname"]);
   unset($_SESSION["password"]);
 $_SESSION['logged']=false;
   header('Refresh: 1; URL = logintrain1.php');
?>