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
	<title>Thrytbox - Learn with us</title>

	<link rel="stylesheet" href="ThrytBoxCSS.css">
</head>

<body>
<div id="wrapper">
		
		<div id="header">
		<ul id="thrtbx">
			<span class="normal">ThrytBox</span>
		</ul>
		<ul id="misc">
			<li><a href="login.php" target="_blank">Login</a></li>
			<li><a href="register.php" target="_blank">Register</a></li>
			<li><a href="profile" target="_blank">Our Introduction</a></li>
		</ul>
		</div><!-- #header -->
		
		<div id="content">
		<h1>Learn together</h1>
		<h2>with your friends, teachers and family</h2>
		<h3>With ThrytBox!</h3>
		<br/>
		<h4>Join Us! :D</h3>
		<h5 style="text-align:right;font-size:13px;bottom:0em;right:0em;position:relative;"> <i></i></h5>
		</div><!-- #content -->
		<div id="footer" align="center">
		<ul>
			<li><a href="wedeveloop">Our Team</a></li>

			<li><a href="internship">Internship </a></li>

			<li><a href="contactus">Contact Us</a></li><br>
			<li> &copy; Thrytbox <?php $date= date('Y'); echo $date; ?></li>
		</ul>
		</div><!-- #footer -->
		
	</div><!-- #wrapper -->
</body>
</html>
