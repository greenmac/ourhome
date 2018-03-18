<?php include_once('link.php');?>
<?php
mysql_query("SET NAMES 'utf8'");//設定編碼
mysql_select_db('ourhome',$link);//開啟DB

$sql1 = "select * from mybill";//設定SQL
if(!empty($_POST['search'])){
  $search = $_POST['search'];
  $sql1 = "select * from mybill where mb_tel like '$search'";
}
$re1 = mysql_query($sql1);//SQL語法帶入DB執行
$row1 = mysql_fetch_assoc($re1);//以陣列儲存資料

$re2 = mysql_query($sql1);//SQL語法帶入DB執行
$row2 = mysql_fetch_assoc($re2);//以陣列儲存資料

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table width="100%" border="1" cellspacing="0" cellpadding="0" align="center">
    <tr>
      <td align="center"><b>帳單編號</b></td>
      <td align="center"><b>姓名</b></td>
      <td align="center"><b>電話</b></td>
      <td align="center"><b>地址</b></td>
      <td align="center"><b>email</b></td>
      <td align="center"><b>總金額</b></td>
    </tr>
    <tr>
      <td align="center"><b><?php echo $row2['mb_bill'];?></b></td>
      <td align="center"><b><?php echo $row2['mb_name'];?></b></td>
      <td align="center"><b><?php echo $row2['mb_tel'];?></b></td>
      <td align="center"><b><?php echo $row2['mb_contact'];?></b></td>
      <td align="center"><b><?php echo $row2['mb_email']?></b></td>
      <td align="center"><b><?php echo $row2['mb_money'];?></b></td>
    </tr>
  </table>
  </body>
</html>
