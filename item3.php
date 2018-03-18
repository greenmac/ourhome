<link rel=stylesheet type="text/css" href="item.css">
<?php
 include_once('link.php');
 if(empty($_SESSION['mybill'])){
   $word="";
   for($i=0;$i<4;$i++){
     $a01 = rand(0,35);
     if($a01 == 0){$word = $word."0";}
     if($a01 == 1){$word = $word."1";}
     if($a01 == 2){$word = $word."2";}
     if($a01 == 3){$word = $word."3";}
     if($a01 == 4){$word = $word."4";}
     if($a01 == 5){$word = $word."5";}
     if($a01 == 6){$word = $word."6";}
     if($a01 == 7){$word = $word."7";}
     if($a01 == 8){$word = $word."8";}
     if($a01 == 9){$word = $word."9";}
     if($a01 == 10){$word = $word."a";}
     if($a01 == 11){$word = $word."b";}
     if($a01 == 12){$word = $word."c";}
     if($a01 == 13){$word = $word."d";}
     if($a01 == 14){$word = $word."e";}
     if($a01 == 15){$word = $word."f";}
     if($a01 == 16){$word = $word."g";}
     if($a01 == 17){$word = $word."h";}
     if($a01 == 18){$word = $word."i";}
     if($a01 == 19){$word = $word."j";}
     if($a01 == 20){$word = $word."k";}
     if($a01 == 21){$word = $word."l";}
     if($a01 == 22){$word = $word."m";}
     if($a01 == 23){$word = $word."n";}
     if($a01 == 24){$word = $word."o";}
     if($a01 == 25){$word = $word."p";}
     if($a01 == 26){$word = $word."q";}
     if($a01 == 27){$word = $word."r";}
     if($a01 == 28){$word = $word."s";}
     if($a01 == 29){$word = $word."t";}
     if($a01 == 30){$word = $word."u";}
     if($a01 == 31){$word = $word."v";}
     if($a01 == 32){$word = $word."w";}
     if($a01 == 33){$word = $word."x";}
     if($a01 == 34){$word = $word."y";}
     if($a01 == 35){$word = $word."z";}
   }
   $word = date("YmdHis",strtotime('+6hours')).$word;
   $_SESSION['mybill'] = $word;
 }
 $ip = $_SERVER['REMOTE_ADDR'];
 $time = date('Y-m-d H:i:s');

 $myseq = $_POST['myseq'];
 $mycount = $_POST['mycount'];
 $mybill = $_SESSION['mybill'];

   $sql2 = "select * from my_item where mi_seq = '$myseq'";
   $re2 = mysql_query($sql2);//SQl語法帶入DB執行
   $row2 = mysql_fetch_assoc($re2);//以陣列儲存資料
   $total2 = mysql_num_rows($re2);//計算搜尋結果總數

//字串驗證
      if($total2 !=1){
        echo 3;
        mysql_close($link);
        exit();
      }
      if(!is_numeric($mycount)){//is_numeric意思為驗證是不是數字
        echo 4;
        mysql_close($link);
        exit();
      }
//數量庫存驗證
   $itemcount = $row2['mi_count'];//產品的庫存數量
   if($itemcount<$mycount){
     echo 1;
     mysql_close($link);
     exit();
   }
 //是否開放驗證
    if($row2['mi_status']!=1){
      echo 2;
      mysql_close($link);
      exit();
    }
 //庫存驗證
 $sqlcount = $itemcount - $mycount;
 $sql="update my_item set mi_count = $sqlcount where mi_seq ='$myseq'";
 mysql_query($sql);//SQL語法帶入DB執行

 $sql="insert into shopcar (sc_no, sc_bill, sc_count, sc_status, sc_time, sc_ip) value ('$myseq', '$mybill', '$mycount','0', '$time', '$ip')";
 mysql_query($sql);//SQL語法帶入DB執行

 mysql_close($link);
?>
