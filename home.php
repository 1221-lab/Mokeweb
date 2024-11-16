<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<div class="header">
		<img src="log.PNG" height="40" width="100" 	align="100">
	</div>
</head>
<?php 
$host="localhost";
$user="root";
$pass="";
$db="bis";
$con=mysqli_connect($host,$user,$pass,$db);
if(isset($con)){
echo "db connected";	
}
else{
	echo "db cannot connected";
}
 ?>

<body bgcolor="#879768">
<div class="menu">
	<ul>
		<li><a href="idex.php">home</a></li>
		<li><a href="#">about us</a></li>
		<li><a href="#">login</a></li>
		<li><a href="#">help</a></li>
	</ul>
</div>
<div class="main">
	<div class="cont">
		<img src="images/key1.jpg">
		 <h2>user name</h2><input type="text" name="fname"><br>
         <h2> Password</h2> <input type="Password" name="Password"><br>
          <input type="submit" name="submit" value="Login"><br><br>

	</div>
	<div class="side">
	<ul>
		<li><a href="form.php">Register</a></li>
		<li><a href="#">Sign up</a></li>
		<li><a href="#">Sign in</a></li>
		<li><a href="#">help</a></li>
	</ul>
	</div>
	
</div>
</body>
<div class="footer"></div>
</html>