<?php
if(!empty($_POST['aa'])){
  include_once("../../link.php");
  $aa = $_POST['aa'];
/*
  $sql = "select * from my_item where mi_seq = '$aa'";
  $re = mysql_query($sql);
  $row = mysql_fetch_assoc($re);
  $sc_count = $row['sc_count'];
  $sc_no = $row['sc_no'];
*/
  $updatesql = "delete from my_item where mi_seq = '$aa'";
  mysql_query($updatesql);
?>
