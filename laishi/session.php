<?php
//session_start();
if(!empty($_SESSION['myaccount'])){
  $user = $_SESSION['myaccount'];
}else{
  header('Location:../login.php');
  exit();
}
?>
