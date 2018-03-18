<?php include_once('../../link.php');?>
<?php include_once("../session.php");?>
<?php
mysql_query("SET NAMES 'utf8'");//設定編碼
mysql_select_db('ourhome',$link);//開啟DB

$sql1 = "select * from my_item";//設定SQL
if(!empty($_POST['search'])){
  $search = $_POST['search'];
  $sql1 = "select * from my_item where mi_name like '%$search%'";
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
    <!-- <script src="..\jq\jquery-1.11.1.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  </head>
  <body>
    <table width="100%" border="1" cellspacing="0" cellpadding="0" align="center">
      <form action="item_admin.php?insert2=1" method="post" id="mysearch">
        <tr>
          <td colspan="5" align="center"><input name="search" type="text" id="search" size="80" /></td>
          <td align="center"><input name ="送出" type="submit" value="搜尋" /></td>
        </tr>
      </form>
      <tr>
        <td align="center">產品名稱</td>
        <td align="center">產品圖片</td>
        <td align="center">產品編號</td>
        <td align="center">數量</td>
        <td align="center">數量增減</td>
        <td align="center">操作</td>
      </tr>
      <?php do{?>
        <tr>
          <td align="center"><?php echo $row1['mi_name'];?></td>
          <td align="center"><img src="img/<?php echo $row1['mi_pic'];?>" width="50" </td>
          <td align="center"><?php echo $row1['mi_no'];?></td>
          <td align="center"><?php echo $row1['mi_count'];?></td>
          <td align="center"><input name="insert" type="text" id="in<?php echo $row1['mi_seq'];?>" size="10" /></td>
          <td align="center"><input type="button" value="新增" onclick="insert('in<?php echo $row1['mi_seq'];?>')" /></td>
          <!--<td align="center"><input type="button" value="刪除" onclick="del(<?php echo $row1['mi_seq'];?>)" /></td>-->
        </tr>
      <?php }while ($row1 = mysql_fetch_assoc($re1));?>
  </table>
  <script>
      function insert(x1){
        <?php do{?>
          if(x1 == 'in<?php echo $row2['mi_seq'];?>'){ y1 = document.getElementById('in<?php echo $row2['mi_seq'];?>').value; z1=<?php echo $row2['mi_seq']?>;}
        <?php } while ($row2 = mysql_fetch_assoc($re2));?>
           if(isNaN(y1)){//isNaN判斷是不是數字
               alert('請輸入數字');
               return false;
             }else{
               if(y1 == 0){
               alert('輸入數字不得等於0');
               return false;
            }else{
               $.post("insert_2_2.php",{z1,y1},function(data){
                 if(data == 1){
                   alert('新增成功');
                   document.location.href="item_admin.php?insert2=1"
                 }else{
                   alert('新增失敗\n原因'+data);
                 }
               });
             }
          }
        }
        function del(aa){
             $.post("insert_2_del.php",{aa},function(data){
                alert('刪除完成');
                document.location.href="item_admin.php?insert2=1";
             });
           }
  </script>
  </body>
</html>
<?php
mysql_free_result($re1);//釋放記憶體
mysql_free_result($re2);//釋放記憶體
mysql_close($link);//關閉連線
?>
