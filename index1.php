<?php
	session_start();

	$cookie_name = "ThrytBox";
	$cookie_value = "name";
	
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/index.php");
	//"84600" refers to a day.//
?>
<!doctype html>
<html>

<head>
	<title>Thrytbox - A future advancement</title>

	<link rel="stylesheet" href="main.css">
</head>

<body>
<div id="menu">
	<ul>
		<li>thrytbox</li>
		<li><a href="./login.php">Login</a></li>
		<li><a href="./register.php">Register</a>
		<li><a href="./profile">Get to know us</a>
		
	</ul>
</div>
<div id="wrapper">
		
		<div id="header">
		</div><!-- #header -->
		
		<div id="content">
		</div><!-- #content -->
		
		<div id="footer">
		<a href="wedeveloop">Developing</a>
		<a href="internship">Internship</a>
		<a href="contactus">Contact Us</a>
		</div><!-- #footer -->
		
	</div><!-- #wrapper -->
</body>
</html>