<?php
  require "routing.php";
  session_start();

  if(isset($_SESSION["is_login"])){
    goToRoute("dashboard");
  }else{
    goToRoute("login");
  }
?>