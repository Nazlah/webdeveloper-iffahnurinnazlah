<?php
 require_once '../../action/connection.php';


  session_start();
  session_destroy();

  header("Location:../../login.php");
?>