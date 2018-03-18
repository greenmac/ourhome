<?php
if(!empty($_POST['aa'])){
  include_once("link.php");
  $aa = $_POST['aa'];

  $sql = "select * from shopcar where sc_seq = '$aa' and sc_status < 2";
  $re = mysql_query($sql);
  $row = mysql_fetch_assoc($re);
  $sc_count = $row['sc_count'];
  $sc_no = $row['sc_no'];

  $updatesql = "update shopcar set sc_status = sc_status + 2 where sc_seq = '$aa' and sc_status < 2";
  mysql_query($updatesql);

  $updatesql = "update my_item set mi_count = mi_count + $sc_count where mi_seq = '$sc_no'";
  mysql_query($updatesql);
}

?>
