<?php
	session_start();

	$cookie_name = "Thrytbox_profile";
	$cookie_value = "profile_";

	setcookie($cookie_name, $cookie_value, time() + 86400 * 30, "/profile/index.php")
?>
<!DOCTYPE html>
<html>
<head>
	<title>Get to know us - Thrytbox, behind the scenes</title>
	<link rel="stylesheet" type="text/css" href="profile.css">
	<link href="twitter-bootstrap-v2/docs/assets/css/bootstrap.css" rel="stylesheet">  s
</head>

<body>
	<ul>
		<li>
			<a href="./abdumuhaimin.html"><img class="hoverImages" src="./images/muhaimin_.jpg" style="width: 70px; opacity: .8;" /></a>
			<a href="./vidyasagar.html"><img class="hoverImages" src="./images/vidya_.jpg" style="width: 70px; opacity: .8;" /></a>
	</ul>
</body>
</html>