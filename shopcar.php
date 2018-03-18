<?php include_once('link.php');?>
<?php
mysql_query("SET NAMES 'utf8'");//設定編碼
if(empty($_SESSION['mybill'])){$mybill="";}else{$mybill = $_SESSION['mybill'];}

$sql3 = "select * from shopcar,my_item where sc_no = mi_seq and sc_bill = '$mybill' and sc_status < 2";
$re3 = mysql_query($sql3);
$row3 = mysql_fetch_assoc($re3);
$total3 = mysql_num_rows($re3);
$allmoney = 0;

if($total3 <= 0){echo "您尚未選購任何產品";}else{}
?>
<!DOCTYPE html>
<html>
  <head>
    <script src="jq\jquery-1.8.3.min.js"></script>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table align="center" width="100%" border="1" cellpadding="5" cellspcing="0">
      <tr bgcolor="#00BBFF">
        <td align="center">購買項目</td>
        <td align="center">數量</td>
        <td align="center">單價金額</td>
        <td align="center">總價金額</td>
        <td align="center"></td>
      </tr>
<?php do { $allmoney = $allmoney+$row3['sc_count']*$row3['mi_money'];?>
      <tr align="center">

        <td align="center"><?php echo $row3['mi_name'];?></td>
        <td align="center"><?php echo $row3['sc_count'];?></td>
        <td v><?php echo $row3['mi_money'];?></td>
        <td align="center"><?php echo $row3['sc_count']*$row3['mi_money'];?></td>
        <td align="center"><input type="button" value="刪除" onclick='del(<?php echo $row3['sc_seq'];?>)'/></td>

      </tr>
<?php } while ($row3 = mysql_fetch_assoc($re3));?>
      <tr bgcolor="#FF8888">
        <td colspan="3" align="center"><input type="button" value="結帳" onclick="gobuy()"></td>
        <td align="center"><?php echo $allmoney;?></td>
      </tr>
    </table>
    <div id="contact" style="display:none; position:absolute; background-color:#FFF; width:300px; height:170px; padding:20px; top:30%; left:50%; margin:0 0 0 -150px; border-radius:15px">
        收件姓名　<input type="text" id="myname"><br/><br/>
        連絡電話　<input type="text" id="mytel"><br/><br/>
        送貨地址　<input type="text" id="mycontact"><br/><br/>
        聯絡信箱　<input type="text" id="myemail"><br/><br/>
        <input type="button" value="送出" onclick="gogo()">
        <input type="button" value="取消" onclick="closebuy()">
    </div>
  </body>
</html>
<script>
  //$("#back").hide();
  $("#contact").hide();
  var gogogo=0;

  function gobuy(){
    $("#back").show();
    $("#contact").show();
  }
  function gogo(){
    myname = document.getElementById("myname").value;
    mytel = document.getElementById("mytel").value;
    mycontact = document.getElementById("mycontact").value;
    myemail = document.getElementById("myemail").value;
    mybill = '<?php echo $mybill;?>';
    if(myname.length == 0){alert('[收件姓名]未輸入');return false;};
    if(mytel.length == 0){alert('[連絡電話]未輸入');return false;};
    if(mycontact.length == 0){alert('[送貨地址]未輸入');return false;};
    if(gogogo == 1){alert('請不要點太快');return false;}
    gogogo = 1;
    $.post("buy.php",{mybill,myname,mytel,mycontact,myemail},function(data){
      gogogo = 0;
      var gg = eval("("+data+")");
      if(gg.error == 0){
        alert('結帳成功\n您的帳單編號為:'+mybill);
        document.location.href="index.php?shopcar=1";
      }else{
           var errorword = '';
        for(i=1;i<gg.error3;i++){
          errorword = errorword + gg.error2[i]+"\n";
        }
        alert(errorword);
      }
    });
  }
  function closebuy(){
    //$("#back").hide();
    $("#contact").hide();
  }
  function del(aa){
       $.post("shopcardel.php",{aa},function(data){
          alert('刪除完成');
          document.location.href="index.php?shopcar=1";
       });
  }
</script>
