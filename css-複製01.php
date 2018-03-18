<?php

?>
body{
  margin:0px;
}
#back {
   /*background-color: 	#444444;*/
   /*background: linear-gradient(#DDDDDD,#888888,#444444);*/
   width: 100%;
   height: 2000px;
   margin: auto;
   z-index: 1;
}
#mark{
  background-image: url(images/o01.jpg);
  margin: 0 0 0 0;
  position: fixed;
}
#top{
   top: 50%;
   right: 0;
   position: fixed;
   width: 50px;
   height: 50px;
}
#bag1{
   width: 100vw;
   height: 100vh;
   position: fixed;
   margin: -8px;
   background-image: url(images/DSC_0041.jpg);
   background-size: 100vw 100vh;
   background-repeat: no-repeat;
}
#bag2{
  width: 100vw;
  height: 100vh;
  position: fixed;
  margin: -8px;
   background-image: url(images/DSC_0776.jpg);
   background-size: 100vw 100vh;

   display: none;
   background-repeat: no-repeat;
}
#bag3{
  width: 100vw;
  height: 100vh;
  position: fixed;
  margin: -8px;
   background-image: url(images/DSC_0042.jpg);
   background-size: 100vw 100vh;

   display: none;
   background-repeat: no-repeat;
}
#bag4{
  width: 100vw;
  height: 100vh;
  position: fixed;
  margin: -8px;
   background-image: url(images/DSC_0827.jpg);
   background-size: 100vw 100vh;

   display: none;
   background-repeat: no-repeat;

}
#a01{
   width:200px;
   height:200px;
   background-color:#3F0;
   position:absolute;
   top:700px;
   left:55%
}
#a02{
   width:200px;
   height:200px;
   background-color:#F00;
   position:absolute;
   top:700px;
   left:45%
}
#scrollToTop {
	cursor: pointer;
	font-size: 0.9em;
	position: fixed;
	text-align: center;
	z-index: 9999;
	/*-webkit-transition: background-color 0.2s ease-in-out;
	-moz-transition: background-color 0.2s ease-in-out;
	-ms-transition: background-color 0.2s ease-in-out;
	-o-transition: background-color 0.2s ease-in-out;
	transition: background-color 0.2s ease-in-out;*/
	background: #121212;
	color: #fff;
	border-radius: 3px;
	padding-left: 12px;
	padding-right: 12px;
	padding-top: 12px;
	padding-bottom: 12px;
	right: 20px;
	bottom: 20px;
}
#t1 {
	position: fixed;
	z-index: 2;
  top: 50px;
  width:100%;
}
nav{
 margin: auto;
 width:900px;
 height: 50px;
}
nav ul{
 padding: 0;/*內距*/
}
nav ul li{
 list-style-type:none;/*拿掉列表的符號*/
 float:left;/*靠左排列*/
 width: 150px;
 height :50px;
 background-color:#333;
 text-align: center;
 line-height: 50px;
 overflow: hidden;
}
nav ul li a{
  display: block;
  transition: margin-top .4s,background-color .4s;
  color: #aaa;
  text-decoration:none;/*無底線*/
}
nav ul li a:after {
  content: attr(title);/*後面顯示(title的內容)*/
  display: block;
}
nav ul li a:hover {
  margin-top: -50px;
  background-color: #D91E43;
  color:#fff;
}
nav ul li ul{
 width:800px;
 top:50px;
 position:absolute;
 display:none;/*設定不存在*/
}
nav ul li:hover ul{
 display:block;/*設定為方塊*/
}
nav ul li ul li{
  width
  background-color: #7dffff;
  float:left;
}
nav ul li ul li a:hover{
  margin-top:0;
  background-color: #7dabff;
  color:#bbb;
}
#main{
  width:800px;
/*  height:718px;*/
  height:72%;
  position:fixed;
  background-color:#DDDDDD;
  top:125px;
  left:50%;
  margin:0 0 0 -420px;
  z-index:1;
  border-radius:15px;
  opacity:.5;
  padding:20px;
}
