<?php include_once('../../link.php');?>
<?php include_once("../session.php");?>
<?php
mysql_query("SET NAMES 'utf8'");//設定編碼
mysql_select_db('ourhome',$link);//開啟DB

$sql1 = "select * from my_type";//設定SQL
$sql2 = "select * from source";//設定SQL

$re1 = mysql_query($sql1);//SQL語法帶入DB執行
$re2 = mysql_query($sql2);//SQL語法帶入DB執行

$row1 = mysql_fetch_assoc($re1);//以陣列儲存資料
$row2 = mysql_fetch_assoc($re2);//以陣列儲存資料
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- <script src="../../jq/jquery-1.11.1.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  </head>
  <body>
  <form name="f1" id="f1" action="insert2.php" method="post" enctype="multipart/form-data">
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td align="center">&nbsp;</td>
      <td></td>
    </tr>
    <tr>
      <td align="center">產品類別</td>
      <td><select name="mi_type1" id="mi_type1" >
      <?php do{?>
          <option value="<?php echo $row1['mt_seq'];?>"><?php echo $row1['mt_name'];?></option>
      <?php }while ($row1 = mysql_fetch_assoc($re1));?>
      </select></td>
    </tr>
    <tr>
      <td align="center">產品圖片</td>
      <td><input type="file" name="mi_pic" id="mi_pic" /></td>
    </tr>
      <td align="center">產品名稱</td>
      <td><input type="text" name="mi_name" id="mi_name"></td>
    </tr>
    <tr>
      <td align="center">產品規格</td>
      <td><input type="text" name="mi_type2" id="mi_type2"></td>
    </tr>
    <tr>
      <td align="center">來源(廠商)</td>
      <td><select name="mi_source" id="mi_source">
    <?php do {?>
        <option value="<?php echo $row2['s_seq'];?>"><?php echo $row2['s_name'];?></option>
    <?php } while ($row2 = mysql_fetch_assoc($re2));?>
  </selcet></td>
    </tr>
    <tr>
      <td align="center">產品編號(英文數字)</td>
      <td><input type="text" name="mi_no" id="mi_no"></td>
    </tr>
    <tr>
      <td align="center">產品定價</td>
      <td><input type="text" name="mi_money" id="mi_money"></td>
    </tr>
    <tr>
      <td align="center">產品介紹</td>
      <td><textarea name="mi_con" id="mi_con" cols="70" rows="10"></textarea></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="button" value="新增" onclick="post()"></td>
    </tr>
  </table>
</form>
  <script>
    function post(){

      mi_type1 = document.getElementById('mi_type1').value;
      mi_name = document.getElementById('mi_name').value;
      mi_pic = document.getElementById('mi_pic').value;
      mi_type2 = document.getElementById('mi_type2').value;
      mi_source = document.getElementById('mi_source').value;
      mi_no = document.getElementById('mi_no').value;
      mi_money = document.getElementById('mi_money').value;
      mi_con = document.getElementById('mi_con').value;
      if(mi_type1.length == 0){alert('[產品類別]未輸入');return false;}
      if(mi_name.length == 0){alert('[產品名稱]未輸入');return false;}
      if(mi_pic.length == 0){alert('[產品圖片]未選擇');return false;}
      if(mi_type2.length == 0){alert('[產品規格]未輸入');return false;}
      if(mi_source.length == 0){alert('[來源(廠商)]未輸入');return false;}
      if(mi_no.length == 0){alert('[產品編號(英文數字)]未輸入');return false;}
      if(mi_money.length == 0){alert('[產品金額(英文數字)]未輸入');return false;}
      if(mi_con.length == 0){alert('[產品介紹]未輸入');return false;}
    /*  $.post('insert2.php',{mi_type1:mi_type1,mi_name:mi_name,mi_pic:mi_pic,mi_type2:mi_type2,mi_source:mi_source,mi_no:mi_no,mi_money:mi_money,mi_con:mi_con},function(data){
      		  if (data == 1){
      		  alert('資料新增成功');
            document.location.href="item_admin.php?insert=1";
          }else if(data == 2){
            alert('資料新增失敗 \n 原因:產品編號已經存在');
          }else {
            alert('資料新增失敗 \n 原因:'+data);
          }
      });
      */
      document.f1.submit();
    }
  </script>
  </body>
</html>
<?php
mysql_free_result($re1);
mysql_free_result($re2);
mysql_close($link);
?>
