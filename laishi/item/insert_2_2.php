<?php include_once('../../link.php') ?>
<?php include_once("../session.php");?>
<?php
$receive = 1;
    if(!empty($_POST['z1'])){
      $mi_seq = $_POST['z1'];
      $mi_count = $_POST['y1'];
    mysql_query("SET NAMES 'utf8'");//設定編碼
    mysql_select_db('ourhome',$link);//開啟DB

$nosql = "select mi_count from my_item where mi_seq = '$mi_seq'";
$nosqltotal = mysql_query($nosql);
$dbno = mysql_fetch_assoc($nosqltotal);
$total = $dbno['mi_count']+$mi_count;
if ($total < 0){$total = 0;}

      $sql = "update my_item set mi_count = $total where mi_seq = '$mi_seq'";
      mysql_query($sql);

      echo $receive;
    }else{
      header("location:item_admin.php");
      exit();
    }
?>
