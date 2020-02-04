
<style>
#form{
	border:1px solid #FFF;
	text-align:center;
	width:50%;
	margin-left:20%;
	background-color:#9CC;
	border-radius:10%;}
input{
	padding:10px;
	margin:5px;
	border-radius:12px;
	border:none;}
input[type=text], input[type=email], input[type=password]{
	width:50%;}
input[type=submit]{
	width:20%;
	cursor:pointer;
	background-color:#30C;
	color:#FFF;
	font-weight:bold;
	font-size:18px;}
input[type=submit]:hover{
	background-color:#60F;}


</style>
<div id="form">
<h2>Registration</h2>

<form method="post" id="form1">
<label>Username</label>
  <input type="text" name="name" placeholder="enter your username"><br>
 <label>Email Id</label>
    <input type="email" name="email" placeholder="Enter your Email id"><br>
  <label>Password</label>
      <input type="password" name="password" placeholder="Enter your password"><br>
   
      <input type="checkbox">I Agree the Terms and Condition<br>
	  <P>Already Register <a href="#">Login</a></P>
      <input type="submit" type="button">

</form></div>
</body>
</html>







