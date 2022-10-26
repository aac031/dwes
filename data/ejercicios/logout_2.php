<?php
   session_start();
   unset($_SESSION["login_ok"]);
   
   header('Refresh: 1; URL = login_2.php');
