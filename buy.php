<?php include_once("link.php");?>
<?php
  mysql_query("SET NAMES 'utf8'");//設定編碼
  $ip = $_SERVER['REMOTE_ADDR'];
  $time = date('Y-m-d H:i:s');

    $error = 0;
    $error2 ='"無"';

    if(empty($_POST['mybill'])){$error = 1;}else{$mybill = $_POST['mybill'];}
    if(empty($_POST['myname'])){$error = 2;}else{$myname = $_POST['myname'];}
    if(empty($_POST['mytel'])){$error = 3;}else{$mytel = $_POST['mytel'];}
    if(empty($_POST['mycontact'])){$error = 4;}else{$mycontact = $_POST['mycontact'];}
    if(empty($_POST['myemail'])){$myemail = "";}else{$myemail = $_POST['myemail'];}
    if($error == 0){
      $sql = "select * from shopcar, my_item where sc_no = mi_seq and sc_bill = '$mybill' and sc_status < 2";
      $re = mysql_query($sql);
      $row = mysql_fetch_assoc($re);
      $allmoney = 0;
      $error3 = 0;
          do{
            $mi_name = $row['mi_name'];
            if($row['mi_status'] != 1){$error="4";
              $error2 = $error2.',"'.$mi_name.'此產品已經停賣]"';
              $error3++;
            }
            if($row['mi_count'] < $row['sc_count']){$error="5";
              $error2 = $error2.',"'.$mi_name.'此產品庫存量不足]"';
              $error3++;
            }
            if(($row['sc_status'] == 1) or ($row['sc_m_bill']>=1)){
              $error="6";
              $error2 = $error2.',"'.$mi_name.'此帳單已經結帳過了"';
              $error3++;
            }

            $allmoney = $allmoney + $row['sc_count']*$row['mi_money'];
          }while($row = mysql_fetch_assoc($re));
      if($error == 0){
          $insertsql = "insert into mybill(mb_bill, mb_name, mb_tel, mb_contact, mb_email, mb_money, mb_time, mb_ip)
          value ('$mybill', '$myname', '$mytel', '$mycontact', '$myemail', '$allmoney', '$time', '$ip')";
          mysql_query($insertsql);

          $sql = "select * from mybill, shopcar where mb_bill = '$mybill' and sc_status < 2";
          $re = mysql_query($sql);
          $row = mysql_fetch_assoc($re);
          $billseq = $row['mb_seq'];

          $sql="update shopcar set sc_status = '1', sc_m_bill = $billseq where sc_bill = '$mybill'";
          mysql_query($sql);
          $_SESSION['mybill'] = NULL;
          unset ($_SESSION['mybill']);
        }
    }
    echo '{error:"'.$error.'",error2:['.$error2.'],error3:'.$error3.'}';
?>
