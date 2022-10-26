<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'Has limpiado la sesión.';
   header('Refresh: 2; URL = login.php');
?>