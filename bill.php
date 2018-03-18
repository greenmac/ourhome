<?php include_once('link.php');?>
<?php
mysql_query("SET NAMES 'utf8'");//設定編碼
mysql_select_db('ourhome',$link);//開啟DB

$sql1 = "select * from mybill";//設定SQL
if(!empty($_POST['search'])){
  $search = $_POST['search'];
  $sql1 = "select * from mybill where mb_tel like '%$search%'";
}
$re1 = mysql_query($sql1);//SQL語法帶入DB執行
$row1 = mysql_fetch_assoc($re1);//以陣列儲存資料

$re2 = mysql_query($sql1);//SQL語法帶入DB執行
$row2 = mysql_fetch_assoc($re2);//以陣列儲存資料

?>
<script>
  //document.location.href="bill_2.php";
</script>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="jq\jquery-1.11.1.min.js"></script>
  </head>
  <body>
    <table width="100%" border="1" cellspacing="0" cellpadding="0" align="center">
      <form action="index.php?bill_2=1" method="post" id="mysearch">
        <tr>
          <td><b>請輸入電話</b></td>
          <td colspan="4" align="center"><input name="search" type="text" id="search" size="80" /></td>
          <td align="center"><input name ="送出" type="submit" value="搜尋" /></td>
        </tr>
      </form>
      <tr>
        <td align="center"><b>帳單編號</b></td>
        <td align="center"><b>姓名</b></td>
        <td align="center"><b>電話</b></td>
        <td align="center"><b>地址</b></td>
        <td align="center"><b>email</b></td>
        <td align="center"><b>總金額</b></td>
      </tr>
      <!--
      <tr>
        <td align="center"><?php echo $row2['mb_bill'];?></td>
        <td align="center"><?php echo $row2['mb_name'];?></td>
        <td align="center"><?php echo $row2['mb_tel'];?></td>
        <td align="center"><?php echo $row2['mb_contact'];?></td>
        <td align="center"><?php echo $row2['mb_email']?></td>
        <td align="center"><?php echo $row2['mb_money'];?></td>
      </tr>
    -->
    </table>
  </body>
  <script>
/*
  function insert(x1){
    <?php do{?>
      if(x1 == 'in<?php echo $row2['mi_seq'];?>'){ y1 = document.getElementById('in<?php echo $row2['mi_seq'];?>').value; z1=<?php echo $row2['mi_seq']?>;}
    <?php } while ($row2 = mysql_fetch_assoc($re2));?>
  }
  */
  </script>
</html>
