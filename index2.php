<?php
	session_start();

	$cookie_name = "ThrytBox";
	$cookie_value = "name";
	
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/index.php");
	//"84600" refers to a day.//
	include 'msite.php';
?>
<!doctype html>
<html>

<head>
	<title>Thrytbox - A future advancement</title>

	<link rel="stylesheet" href="main.css">
</head>

<body>
<div id="wrapper">
		
		<div id="header">
		<ul id="thrtbx">
			<span class="rainbow">thrytbox</span>
		</ul>
		<ul id="misc">
			<li><a href="./login.php" target="_blank">Login</a></li>
			<li><a href="./register.php" target="_blank">Register</a></li>
			<li><a href="profile" target="_blank">Get to know us</a></li>
		</ul>
		</div><!-- #header -->
		
		<div id="content">
		<h1>Get to know yourself</h1>
		<h2>With friends, teachers and families</h2>
		<h3>With the all-new thrytbox</h3>
		<br/>
		<h3 style="margin:0;padding:0;">Join Us! :D</h3>
		<h5 style="text-align:right;font-size:13px;bottom:0em;right:0em;position:relative;"> Image source: <i>google.com.my</i></h5>
		</div><!-- #content -->
		
		<div id="footer" align="center">
		<ul>
			<li><a href="wedeveloop">Developing Team  </a></li>

			<li><a href="internship">Internship </a></li>

			<li><a href="contactus">Contact Us</a></li><br>
			<li>&copy; Thrytbox team <?php $date = date('Y'); echo $date ?></li>
		</ul>
		</div><!-- #footer -->
		
	</div><!-- #wrapper -->
</body>
</html>