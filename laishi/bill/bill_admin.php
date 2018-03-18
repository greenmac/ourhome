<?php include_once("../../link.php");?>
<?php include_once("../session.php");?>
<?php
  $sql = "select * from mybill";
  $re = mysql_query($sql);
  $row = mysql_fetch_assoc($re);
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
        <td align="center"><a href="../item/item_admin.php">產品管理系統</a></td>
        <td align="center"><a href="../shopcar/shopcar_admin.php">購物車管理系統</a></td>
        <td align="center"><a href="bill_admin.php">帳單管理系統</a></td>
      </tr>
   </table>
   <table width="800" border="1" align="center" cellspacing="0">
      <tr align="center" bgcolor="#FFFFCC">
        <td>帳單編號</td>
        <td>姓名</td>
        <td>電話</td>
        <td>地址</td>
        <td>email</td>
        <td>總金額</td>
        <td>購買時間</td>
        <td>狀態</td>
        <td>ip</td>
      </tr>
  <?php do{;?>
      <tr align="center">
        <td><?php echo $row['mb_bill'];?></td>
        <td><?php echo $row['mb_name'];?></td>
        <td><?php echo $row['mb_tel'];?></td>
        <td><?php echo $row['mb_contact'];?></td>
        <td><?php echo $row['mb_email'];?></td>
        <td><?php echo $row['mb_money'];?></td>
        <td><?php echo $row['mb_time'];?></td>
        <td><?php echo $row['mb_status'];?></td>
        <td><?php echo $row['mb_ip'];?></td>
      </tr>
  <?php } while($row = mysql_fetch_assoc($re));?>
   </table>
  </body>
</html>
