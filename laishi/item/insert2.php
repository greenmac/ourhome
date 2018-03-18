<?php include_once('../../link.php');?>
<?php include_once("../session.php");?>
<?php
  $receive = 1;
    if(!empty($_POST['mi_name'])){
      $mi_type1 = $_POST['mi_type1'];
      $mi_name = $_POST['mi_name'];
      $mi_money = $_POST['mi_money'];
      $mi_type2 = $_POST['mi_type2'];
      $mi_source = $_POST['mi_source'];
      $mi_no = $_POST['mi_no'];
      $mi_con = $_POST['mi_con'];
      $time1 = strtotime("+6hours");
      $time2 = date("Y-m-d H:i:s",$time1);
      $pic = $_FILES["mi_pic"]["name"];//檔案名稱
      $where = $_FILES["mi_pic"]["tmp_name"];//檔案為位置
      $size = $_FILES["mi_pic"]["size"];//檔案大小 1MB=1048576BIT
      $type1 = $_FILES["mi_pic"]["type"];//檔案類型
      $type2 = strrchr($pic,".");//抓副檔名
      $time3 = date("Ymd-His",$time1).$type2;


if(($type2==".jpg") or ($type2==".png") or ($type2==".JPG") or ($type2==".PNG")){

copy($_FILES["mi_pic"]["tmp_name"],"img/".$time3);
mysql_query("SET NAMES 'utf8'");//設定編碼
mysql_select_db('ourhome',$link);//開啟DB

$nosql = "select count(*) as nosqltotal from my_item where mi_no = '$mi_no'";//設定驗證產品編號的SQL語法
$nosqltotal = mysql_query($nosql);//SQL語法帶入DB執行並將結果以變數紀錄
$dbno = mysql_fetch_assoc($nosqltotal);//將紀錄結果的變數內容轉成陣列格式
$total = $dbno['nosqltotal'];
        if($total == 0){
    $sql1 = "insert into my_item value(NULL,'$time3', '$mi_name', '$mi_type1', '$mi_type2','$mi_money', '$mi_con', '$mi_source', '$mi_no', '0', '0')";//設定SQL
    $re1 = mysql_query($sql1);//SQL語法帶入DB執行
}else{
    $receive = 2;
}
}

  header("location:item_admin.php?insert=1&error=$receive");

    }else{
      header("location:insert.php");
      exit();
    }
?>
