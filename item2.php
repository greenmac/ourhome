<link rel=stylesheet type="text/css" href="item.css">
<?php
   $myitem = $_GET['item2'];

   $sql2 = "select * from my_item where mi_seq = $myitem and mi_status =1";
   $re2 = mysql_query($sql2);
   $row2 = mysql_fetch_assoc($re2);
   $total2 = mysql_num_rows($re2);//計算產品總數
   //$url = "http://127.0.0.1:8080/buy/index.php?item2=".$row2['mi_seq'];
   $url2 = "index.php?item=1";
/*
   include_once("phpqrcode.php");
   $url = "http://localhost:8080/buy/index.php?item2=".$row2['mi_seq'];
   $ecc = "L";
   $size = 10;
*/
?>
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td align="center"><div class="itemimg2" style="background-image:url(laishi/item/img/<?php echo $row2['mi_pic'];?>);"></td>
    <td align="left" valign="top">產品名稱:<?php echo $row2['mi_name'];?><br/>產品規格:<?php echo$row2['mi_type2']?><br/>
       <?php //QRcode::png($url,FALSE,$ecc,$size);?>
       <img src="http://chart.apis.google.com/chart?cht=qr&chl=<?php echo $url;?>&chs=210x210">
        <div class="item2">
<?php if($row2['mi_count'] > 0){?>
          <input type="button" value="＋" onclick="plus()"/>
        <span id="item">1</span>
         <input type="button" value="－" onclick="minus()"/>
         <div id="buy" onclick="buy()"></div>
<?php }else{echo "該產品已售完";}?>
       </div>
    </td>
  </tr>
  <tr>
    <td colspan="2">產品內容:<?php echo $row2['mi_con'];?></td>
  </tr>
</table>
<?php if($row2['mi_count'] > 0){?>
<script>
   var gogo=0;
   function plus(){
     mycount = document.getElementById("item").innerHTML;
     mycount = parseInt(mycount)+1;
     document.getElementById("item").innerHTML = mycount;
   }
   function minus(){
     mycount = document.getElementById("item").innerHTML;
     mycount = parseInt(mycount)-1;
     if (mycount<=1){mycount = 1;}
     document.getElementById("item").innerHTML = mycount;
   }
   function buy(){
     if (gogo == 1){
       alert('請不要連續快速點擊');
       return false;
     }
     gogo = 1;
     var myseq=<?php echo $myitem;?>;
     var itemcount=<?php echo $row2['mi_count']?>;
     mycount = $("#item").html();
//數量驗證
     if(mycount<1){
       alert('購買數量不能少於1');
       gogo = 0;
       return false;
     }
//字串驗證
     if(isNaN(mycount)){
       alert('請輸入數字');
       gogo=0;
       return false;
     }
//庫存驗證
     if(itemcount < mycount){
       alert('存貨不足');
       return false;
     }else{
       $.post('item3.php',{myseq,mycount},function(data){
           if(data == 1){alert('產品庫存不足');}
           if(data == 2){alert('該產品未開放購買');}
           if(data == 3){alert('產品不存在');}
           if(data == 4){alert('數量輸入不正確')}
           document.location.href="<?php echo $url2;?>";
       });
     }
     //document.location.href="index.php?item2="+mi_seq;
   }
</script>
<?php }?>
