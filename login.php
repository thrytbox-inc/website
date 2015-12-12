<?php
	session_start();
	include 'connections/connections.php';
	$cookie_name= "Login@tb";
	$cookie_val= "username , password";

	setcookie($cookie_name, $cookie_val, time() + (84600 * 30), "/");
	//84600 = 1 day;
?>

<!DOCTYPE html>

<html>
<head><link rel="stylesheet" type="text/css" href="main.css" /><link rel="alternate" href="?" hreflang="x-default"></head>
<body><div id="form_login"><form action="cog.php" method="post" align="center"><input type="text" name="username" placeholder="Username" /><input type="password" name="password" placeholder="Password" /><input type="submit" name="submit" value="Login" /></form></div></body>
<!--to speed up the connection, we use bigPipe in javaScript(facebook's main idea)-->
<script>
	var bigPipe = new (require("BigPipe"))({"lid":0,"forceFinish":true});
</script>
<script>
	bigPipe.onPageletArrive({"id":"first_response","phase":0,"jsmods":{},"is_last":true,"css":["v9Z6h","Yke0t","zBBpp","YTa8c"],"js":["Nm4nS","elvBr","glI7j","F88ct","+aouT","U+ouI","CZMWf","AWb\/8","26Qhz","EOwYi","0o6cu","4vv8\/"],"displayJS":["glI7j"]})
</script>
<script>
	bigPipe.onPageletArrive({"id":"","phase":1,"jsmods":{},"is_last":true,"css":["v9Z6h","Yke0t","zBBpp","YTa8c"],"js":["Nm4nS","elvBr","glI7j","F88ct","+aouT","U+ouI","CZMWf","AWb\/8","26Qhz","EOwYi","0o6cu","4vv8\/"],"displayJS":["glI7j"],"the_end":true})
</script>
</html>