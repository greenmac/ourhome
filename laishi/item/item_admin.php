<?php
session_start();
include_once("../session.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

<body>
<table width="800" border="0" align="center" cellspacing="0">
  <tr align="center">
    <td align="center"><a href="item_admin.php">產品管理系統</a></td>
    <td align="center"><a href="../shopcar/shopcar_admin.php">購物車管理系統</a></td>
    <td align="center"><a href="../bill/bill_admin.php">帳單管理系統</a></td>
  </tr>
</table>
<table width="800" border="0" align="center" cellspacing="0">
  <tr align="center" bgcolor="CCDDFF">
    <td colspan="2">產品管理系統</td>
    <td>使用者:<?php echo $user;?></td>
    <td><a href="../logout.php">登出</a></td>
  </tr>
  <tr>
    <td align="center" bgcolor="#FFFFCC"><a href="item_admin.php?insert=1">新增產品</a></td>
    <td align="center" bgcolor="#FFFFCC"><a href="item_admin.php?insert2=1">新增數量</a></td>
    <td align="center" bgcolor="#FFFFCC"><a href="item_admin.php?update=1">修改</a></td>
    <td align="center" bgcolor="#FFFFCC"><a href="item_admin.php?select=1">查詢</a></td>
  </tr>
  <tr>
    <td height="600" colspan="4" align="center" valign="top">
      <?php
        if(!empty($_GET['insert'])){
              include_once('insert.php');
        }
        if(!empty($_GET['insert2'])){
              include_once('insert_2.php');
        }
        if(!empty($_GET['update'])){
              include_once('update.php');
        }
        if(!empty($_GET['select'])){
              include_once('select.php');
        }
    ?></td>
  </tr>
  <tr align="center">
    <td colspan="3" align="center"><p>footer</p></td>
  </tr>
</table>
</body>
</html>
