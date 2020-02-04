<title>Feedback</title>
<style>
h2{
	font-size:36px;
	font-weight:bold;
	color:#FF0;}
form{
	border:1px solid #FFF;
	width:50%;
	margin-left:20%;
	text-align:center;
	background-color:#9C9;
	border-radius:10%;
	height:100%;

	}
input{
	padding:10px;
	margin:5px;
	border-radius:12px;
	border:none;}
input[type=name], input[type=tel], input[type=email]{
	width:90%;}
.msg{
	width:90%;
	height:30%;}
input[type=submit]{
	width:90%;
	background-color:#00F;
	font-weight:bold;
	font-size:18px;
	color:#FFF;}
input[type=submit]:hover{
	background-color:#6C0;
	cursor:pointer;}

</style>


<form method="post">
<h2>Feedback Form</h2>
<input type="name" name="name" placeholder="Enter your name">
<input type="tel" name="tel" placeholder="Mobile Number">
<input type="email" name="email" placeholder="Enter your email">
<textarea class="msg" placeholder="Enter your Message"></textarea><br>
<input type="submit" name="sumit">







</form>