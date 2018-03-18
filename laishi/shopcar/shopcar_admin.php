<?php include_once("../../link.php");?>
<?php include_once("../session.php");?>
<?php
  $sql = "select * from shopcar, my_item where sc_no = mi_seq order by sc_seq desc";
  $re = mysql_query($sql);
  $row = mysql_fetch_assoc($re);

  $nowtime = date("Y-m-d");
  $overtime = date("Y-m-d",strtotime("-18hours"));
  //echo $nowtime."<br>";
  //echo $overtime;

  $sql2 = "select * from shopcar where sc_status = 0 and sc_time < '$overtime'";
  $re2 = mysql_query($sql2);
  $row2 = mysql_fetch_assoc($re2);


  $updatesql2 = "update shopcar set sc_status = 6 where sc_status = 0 and sc_time < '$overtime'";
  mysql_query($updatesql2);

  do{ $sc_no = $row2['sc_no'];
      $sc_count = $row2['sc_count'];

     $updatesql3 = "update my_item set mi_count = mi_count + $sc_count where mi_seq = $sc_no";
     mysql_query($updatesql3);
  } while($row2 = mysql_fetch_assoc($re2));
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
      <td align="center"><a href="shopcar_admin.php">購物車管理系統</a></td>
      <td align="center"><a href="../bill/bill_admin.php">帳單管理系統</a></td>
    </tr>
 </table>
<table width="800" border="1" align="center" cellspacing="0">
    <tr align="center">
    <td colspan="10" align="center">購物車管理系統</td>
  </tr>
  <tr>
    <td colspan="2" align="center" bgcolor="#FFFFCC"><a href="admin_item.php?insert=1">新增產品</a></td>
    <td colspan="2" align="center" bgcolor="#FFFFCC"><a href="admin_item.php?insert2=1">新增數量</a></td>
    <td colspan="2" align="center" bgcolor="#FFFFCC"><a href="admin_item.php?update=1">修改</a></td>
    <td colspan="2" align="center" bgcolor="#FFFFCC"><a href="admin_item.php?select=1">查詢</a></td>
    <td align="center" bgcolor="#FFFFCC"></td>
    <td align="center" bgcolor="#FFFFCC"></td>
  </tr>
  <tr>
    <td colspan="9"  align="center"><input type="text" name="" id="" size="80"/></td>
    <td  align="center"><input type="button" name="" id="" value="查詢"/></td>
  </tr>
  <tr>
    <td align="center" bgcolor="#fff">索引鍵</td>
    <td align="center" bgcolor="#fff">帳單編號</td>
    <td align="center" bgcolor="#fff">產品編號</td>
    <td align="center" bgcolor="#fff">圖片</td>
    <td align="center" bgcolor="#fff">數量</td>
    <td align="center" bgcolor="#fff">金額</td>
    <td align="center" bgcolor="#fff">時間</td>
    <td align="center" bgcolor="#fff">狀態</td>
    <td align="center" bgcolor="#fff">ip</td>
    <td align="center" bgcolor="#fff">操作</td>
  </tr>
<?php do{;?>
  <tr align="center">
    <td><?php echo $row['sc_seq'];?></td>
    <td><?php echo $row['sc_bill'];?></td>
    <td><?php echo $row['sc_no'];?></td>
    <td>pic</td>
    <td><?php echo $row['sc_count'];?></td>
    <td><?php echo $row['mi_money'];?></td>
    <td><?php echo $row['sc_time'];?></td>
    <td><?php echo $row['sc_status'];?></td>
    <td><?php echo $row['sc_ip'];?></td>
    <td><input type="button" name="" id="" value="刪除"/></td>
  </tr>
<?php } while($row = mysql_fetch_assoc($re));?>
  <tr>
    <td height="600" colspan="10" align="center" valign="top"><?php
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
    <td colspan="9" align="center"><p>footer</p></td>
  </tr>
</table>
</body>
</html>
