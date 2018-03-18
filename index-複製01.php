<?php
   $go="home.php";
  if(!empty($_GET['product'])){$go="product.php";}
  if(!empty($_GET['contact'])){$go="contact.php";}
  if(!empty($_GET['shoppingcar'])){$go="shoppingcar.php";}
  //if(!empty($_GET['fb'])){$go="http://goo.gl/PgmJXy";}
  if(!empty($_GET['buy'])){$go="buy.php";}
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
        $(function(){
           $(window).scroll(function(){
             $("#top").html($(this).scrollTop())
             if($(this).scrollTop()>0){
               $("#bag2").fadeIn(2000);
             }else{
               $("#bag2").fadeOut(2000);
             }
             if($(this).scrollTop()>=345){
               $("#bag3").fadeIn(2000);
             }else{
               $("#bag3").fadeOut(2000);
             }
             if($(this).scrollTop()>=690){
               $("#bag4").fadeIn(2000);
             }else{
               $("#bag4").fadeOut(2000);
             }

             if($(this).scrollTop()>=100 && ($(this).scrollTop()<=300)){
               var h01 = 0;
               h01 = $(this).scrollTop()/8;
               if(h01<0){
                 h01 = 0;
               }
               if(h01>100){
                 h01 = 100;
               }

               //var h02 = 700;
               //h02 = h02 - h01;
               //document.getElementById("a02").style = "top:"+h02+"px;";
               //$("#a02").html(h02);
             }
            });
         })
    </script>

   </head>
   <body id="body">
       <div id="back" style="">

         <div id="bag1"></div>
         <div id="bag2"></div>
         <div id="bag3"></div>
         <div id="bag4"></div>
       </div>
       <!--<div id="top"></div>-->
       <!--<div id="a01"></div>-->
       <!--<div id="a02"></div>-->
       <div id="scrollToTop" class="scrollToTop" title="TOP" style="display: block;" onclick="document.location.href='#body'">Top</div>
       <div id="t1">
         <nav>
           <ul>
             <li><a href="index.php" title="Home"><span id="mark"></span>首頁</a></li>
             <li><a href="index.php?product=1" title="Product">產品介紹</a>
                     <ul>
                         <li><a href="">002-1</a></li>
                         <li><a href="">002-2</a></li>
                         <li><a href="">002-3</a></li>
                     </ul>
             </li>
             <li><a href="index.php?contact=1" title="Contact">聯絡我們</a></li>
            <li><a href="index.php?shoppingcar=1" title="Shopping car">購物車</a></li>
            <li><a href="http://goo.gl/PgmJXy" title="Fb">粉絲團</a></li>
            <li><a href="index.php?buy=1" title="Buy">購買</a></li>
         </nav>
       </div>
       <div id="main">
    <?php include_once($go);?>
       </div>
   </body>
  </html>
