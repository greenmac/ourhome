<?php
$link = @mysql_connect('sql301.byethost12.com','b12_21914855','mac50787','b12_21914855_ourhome');
mysql_query("SET NAMES 'utf-8'");
mysql_select_db('b12_21914855_ourhome',$link);
if(!isset($_SESSION)){
  session_start();
}
?>
