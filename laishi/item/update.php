<?php include_once('../../link.php');?>
<?php include_once("../session.php");?>
<?php
mysql_query("SET NAMES 'utf8'");//設定編碼
mysql_select_db('ourhome',$link);//開啟DB

if(!empty($_POST['mi_name'])){
  $mi_type1 = $_POST['mi_type1'];
  $mi_name = $_POST['mi_name'];
  $mi_type2 = $_POST['mi_type2'];
  $mi_source = $_POST['mi_source'];
  $mi_no = $_POST['mi_no'];
  $mi_money= $_POST['mi_money'];
  $mi_con = $_POST['mi_con'];
  //$mi_count = $_POST['mi_count'];
  $mi_status = $_POST['mi_status'];
  $seq = $_POST['seq'];

$up="update my_item set mi_name='$mi_name', mi_type1='$mi_type1', mi_type2='$mi_type2', mi_money='$mi_money' , mi_con='$mi_con', mi_source='$mi_source', mi_no='$mi_no', mi_status='$mi_status' where mi_seq='$seq'";
mysql_query($up);

?>
<script>document.location.href="item_admin.php?update=1";</script>
<?php

}

$sql1 = "select * from my_item";//設定SQL
##下面這段if判斷式是多餘的
// if(!empty($_POST['search'])){
//   $search = $_POST['search'];
//   $sql1 = "select * from my_item where mi_no like '%$search%'";
// }
$re1 = mysql_query($sql1);//SQL語法帶入DB執行
$row1 = mysql_fetch_assoc($re1);//以陣列儲存資料
$re2 = mysql_query($sql1);//SQL語法帶入DB執行
$row2 = mysql_fetch_assoc($re2);//以陣列儲存資料

$sql3 = "select * from my_type";//設定SQL
$re3 = mysql_query($sql3);//SQL語法帶入DB執行
$row3 = mysql_fetch_assoc($re3);//以陣列儲存資料
$t3 = mysql_num_rows($re3);

$sql4 = "select * from source";//設定SQL
$re4 = mysql_query($sql4);//SQL語法帶入DB執行
$row4 = mysql_fetch_assoc($re4);//以陣列儲存資料
$t4 = mysql_num_rows($re4);

do{
$r3seq = $row3['mt_seq'];
$r3type = $row3['mt_name'];
$r3[$r3seq] = $r3type;
}while($row3 = mysql_fetch_assoc($re3));

do{
$r4seq = $row4['s_seq'];
$r4type = $row4['s_name'];
$r4[$r4seq] = $r4type;
}while($row4 = mysql_fetch_assoc($re4));

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- <script src="..\jq\jquery-1.11.1.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  </head>
  <body>
    <table width="100%" border="0" cellspacing="0" cellpadding="5" align="center">
      <form action="item_admin.php?insert2=1" method="post" id="mysearch">
        <tr>
          <td colspan="7" align="center"><input name="search" type="text" id="search" size="80" /></td>
          <td align="center"><input name ="送出" type="submit" value="搜尋" /></td>
        </tr>
      </form>
      <tr  bgcolor="#99BBFF">
        <td align="center">產品名稱</td>
        <td align="center">產品編號</td>
        <td align="center">產品規格</td>
        <td align="center">產品售價</td>
        <td align="center">產品內容</td>
        <td align="center">產品狀態</td>
        <td align="center">產品來源</td>
        <td align="center">產品類別</td>
        <td align="center">操作</td>
      </tr>
      <?php do{?>
      <?php
      /*
            $sql3 = "select mt_name from my_type where mt_seq=".$row1['mi_type1'];//設定SQL
            $re3 = mysql_query($sql3);//SQL語法帶入DB執行
            $row3 = mysql_fetch_assoc($re3);//以陣列儲存資料

            $sql4 = "select s_name from source where s_seq=".$row1['mi_source'];//設定SQL
            $re4 = mysql_query($sql4);//SQL語法帶入DB執行
            $row4 = mysql_fetch_assoc($re4);//以陣列儲存資料
      */
      ?>
      <form name="f1" id="f1" method="post">

        <tr>
          <td align="center"><input name="mi_name" type="text" value="<?php echo $row1['mi_name'];?>"/></td>
          <td align="center"><input name="mi_no" type="text" value="<?php echo $row1['mi_no'];?>"/></td>
          <td align="center"><input name="mi_type2" type="text" value="<?php echo $row1['mi_type2'];?>"/></td>
          <td align="center"><input name="mi_money" type="text" value="<?php echo $row1['mi_money'];?>"/></td>
          <td align="center"><textarea name="mi_con" type="text" id="con"><?php echo $row1['mi_con'];?></textarea></td>
          <td align="center">
            <select name="mi_status" id="mi_status">
            <option value="0" <?php if ($row1['mi_status'] == 0){?>selected="selected"<?php }?>>準備中</option>
            <option value="1" <?php if ($row1['mi_status'] == 1){?>selected="selected"<?php }?>>上架中</option>
            </select>

          <td align="center">
            <select name="mi_source" id="mi_source">
         <?php
            $sql4 = "select * from source";//設定SQL
            $re4 = mysql_query($sql4);//SQL語法帶入DB執行
            $row4 = mysql_fetch_assoc($re4);//以陣列儲存資料
         do{?>
            <option value="<?php echo $row4['s_seq']?>" <?php if ($row1['mi_source'] == $row4['s_seq']){?>selected="selected"<?php }?>><?php echo $row4['s_name'];?></option>
          <?php }while($row4 = mysql_fetch_assoc($re4)) ;?>
            </select>
         </td>

          <td align="center">
            <select name="mi_type1" id="mi_type1">
         <?php
            $sql3 = "select * from my_type";//設定SQL
            $re3 = mysql_query($sql3);//SQL語法帶入DB執行
            $row3 = mysql_fetch_assoc($re3);//以陣列儲存資料
         do{?>
            <option value="<?php echo $row3['mt_seq'];?>" <?php if ($row1['mi_type1'] == $row3['mt_seq']){?>selected="selected"<?php }?>><?php echo $row3['mt_name'];?></option>
         <?php }while($row3 = mysql_fetch_assoc($re3));?>
            </select>
          </td>

          <td align="center"><input name="seq" type="hidden" id="seq" value="<?php echo $row1['mi_seq'];?>"/><input name="送出" type="submit" value="修改"/></td>
        </tr>
      </form>
      <?php }while ($row1 = mysql_fetch_assoc($re1));?>
        <tr>
          <td colspan="4">&nbsp;</td>
          <td align="center">&nbsp;</td>
        </tr>
  </table>
  </body>
</html>
<?php
mysql_free_result($re1);//釋放記憶體
mysql_free_result($re2);//釋放記憶體
mysql_close($link);//關閉連線
?>
