<link rel=stylesheet type="text/css" href="item.css">
<?php
   $myitem = $_GET['item'];
   $sql1 = "select * from my_type";
   $re1 = mysql_query($sql1);
   $row1 = mysql_fetch_assoc($re1);

   $sql2 = "select * from my_item where mi_type1 = $myitem and mi_status =1";
   $re2 = mysql_query($sql2);
   $row2 = mysql_fetch_assoc($re2);
   $total2 = mysql_num_rows($re2);//計算產品總數
?>
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td>
  <?php do{?>
     <a href="index.php?item=<?php echo $row1['mt_seq'];?>"><?php echo $row1['mt_name'];?></a><br>
  <?php }while ($row1 = mysql_fetch_assoc($re1));?></a></td>
    <td><?php if($total2 == 0){echo "歡迎光臨";} else{?>
  <?php do{?>
    <div class="item" onclick="buy(<?php echo $row2['mi_seq'];?>)"><div class="itemimg" style="background-image:url(laishi/item/img/<?php echo $row2['mi_pic'];?>);"></div><div class="itemword"><?php echo $row2['mi_name'];?></div></div>
  <?php }while ($row2 = mysql_fetch_assoc($re2));?>
    <?php }?></td>
  </tr>
</table>
<script>
   function buy(mi_seq){
     document.location.href="index.php?item2="+mi_seq;
   }
</script>
