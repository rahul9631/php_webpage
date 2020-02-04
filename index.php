<title>Fast2way</title>

<style>
#uni{
	width:100%;
	height:500px;
	left:0;
	min-height:100%;
	position:absolute;
	}
#head{
	background-color:#F90;
	font-size:60px;
	height:80px;
	text-align:center;
	color:#FFF;}
#menubar{
	background-color:#000;
	width:100%;
	text-align:center;}
#menubar a{
	color:#FFF;
	text-decoration:none;
	padding:10px 20px 10px 20px;
	display:inline-block;
	font-size:24px;
}
#menubar a:hover{
	color:#CCC;
	background-color:#FFF;}
#footer{
		width:94%;
		padding:3%;
		color:#FFF;
		background-color:#000;
		font-size:20px;
		text-align:center;}
#content{
		 width:96%;
		 padding:2%;
		 font-size:20px;
		 background-color:#0CC;
		 height:500px;}
</style>
<div id="uni">
<?php
include('header.php');

?>
<div id="content">
<?php

   if($_GET['page'])
   {
	   $page= $_GET['page'];
	   $display= $page.'.php';
	   include($display);
   }
   else
   {
	   echo 'hello welcome ';
   };
   
   
?>

</div>

<?php
include('footer.php');
?>
</div>