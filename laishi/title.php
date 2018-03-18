<?php include_once("session.php");?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <table width="1000" border="0" align="center" cellspacing="0">
    <tr align="center">
      <td align="center"><a href="title.php?item_admin=1">產品管理系統</a></td>
      <td align="center"><a href="title.php?shopcar_admin=1">購物車管理系統</a></td>
      <td align="center"><a href="title.php?bill_admin=1">帳單管理系統</a></td>
    </tr>
    <tr>
      <td height="800" colspan="4" align="center" valign="top">
        <?php
          if(!empty($_GET['item_admin'])){
                include_once('item/item_admin.php');
          }
          if(!empty($_GET['shopcar_admin'])){
                include_once('shopcar/shopcar_admin.php');
          }
          if(!empty($_GET['bill_admin'])){
                include_once('bill/bill_admin.php');
          }
      ?></td>
  </table>
  </body>
</html>
