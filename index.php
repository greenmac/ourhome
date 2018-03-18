<?php include_once('link.php');?>
<?php
  mysql_query("SET NAMES UTF8");
   $go="home.php";
  if(!empty($_GET['item'])){$go="item.php";}
  if(!empty($_GET['item2'])){$go="item2.php";}
  if(!empty($_GET['contact'])){$go="contact.php";}
  if(!empty($_GET['shopcar'])){$go="shopcar.php";}
  //if(!empty($_GET['fb'])){$go="http://goo.gl/PgmJXy";}
  if(!empty($_GET['bill'])){$go="bill.php";}
  if(!empty($_GET['bill_2'])){$go="bill_2.php";}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>我們家</title>
    <style>
    <?php include_once('css.php');?>
    </style>
    <!--<link href="css.css" rel="stylesheet" type="text/css">-->

    <script src="jq\jquery-1.8.3.min.js"></script>
    <script>
    var	a1=1;

    setTimeout('aa1(a1)',3500);//延遲執行1秒鐘後執行function aa1()並帶入變數a1

    function aa1(aaaa){
  	   aaa=aaaa+1;
       if(aaa==1){
         $("#bag1").fadeIn(2000);
         $("#bag2").fadeOut(2000);
         $("#bag3").fadeOut(2000);
         $("#bag4").fadeOut(2000);
       }
       if(aaa==2){
         $("#bag1").fadeOut(2000);
         $("#bag2").fadeIn(2000);
         $("#bag3").fadeOut(2000);
         $("#bag4").fadeOut(2000);
       }
       if(aaa==3){
         $("#bag1").fadeOut(2000);
         $("#bag2").fadeOut(2000);
         $("#bag3").fadeIn(2000);
         $("#bag4").fadeOut(2000);
       }
       if(aaa==4){
         $("#bag1").fadeOut(2000);
         $("#bag2").fadeOut(2000);
         $("#bag3").fadeOut(2000);
         $("#bag4").fadeIn(2000);
       }
      // document.getElementById("bag1").style.backgroundImage="url("+b01+")";

  	if(aaa>=4){  aaa = 0;	 }
     setTimeout('aa1(aaa)',3500);//延遲執行1秒鐘後執行function aa1()並帶入變數aaa
  }


/*
  function aa1(aaaa){
	   aaa=aaaa+1;
     if(aaa==1){b01 = "images/DSC_0041.jpg";}
     if(aaa==2){b01 = "images/DSC_0776.jpg";}
     if(aaa==3){b01 = "images/DSC_0042.jpg";}
     if(aaa==4){b01 = "images/DSC_0827.jpg";}
     document.getElementById("bag1").style.backgroundImage="url("+b01+")";

	if(aaa>=4){  aaa = 0;	 }
   setTimeout('aa1(aaa)',3500);//延遲執行1秒鐘後執行function aa1()並帶入變數aaa
}
*/
    </script>

   </head>
   <body id="body">
       <div id="back" style="">
         <div id="mark"></div>
         <div id="bag1"></div>
         <div id="bag2"></div>
         <div id="bag3"></div>
         <div id="bag4"></div>
       </div>
       <div id="scrollToTop" class="scrollToTop" title="TOP" style="display: block;" onclick="document.location.href='#body'">Top</div>
       <div id="t1">
         <nav>
           <ul>
             <li><a href="index.php" title="Home"><span id="mark"></span>首頁</a></li>
             <li><a href="index.php?item=1" title="item">產品介紹</a>
<!--
                     <ul>
                         <li><a href="">002-1</a></li>
                         <li><a href="">002-2</a></li>
                         <li><a href="">002-3</a></li>
                     </ul>
-->
             </li>
             <li><a href="index.php?contact=1" title="Contact">聯絡我們</a></li>
            <li><a href="index.php?shopcar=1" title="Shopping car">購物車</a></li>
            <li><a href="http://goo.gl/PgmJXy" title="Fb">粉絲團</a></li>
            <li><a href="index.php?bill=1" title="Bill">帳單查詢</a></li>
         </nav>
       </div>
       <div id="main">
    <?php include_once($go);?>
       </div>
   </body>
  </html>
<?php mysql_close($link);?>
