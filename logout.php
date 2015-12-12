<?php require 'connections/connections.php'; ?>
<?php
	session_start();
	unset($_SESSION["UserID"]);
	session_destroy();
?>
<!doctype html>
<html>
<head>
	<!-- Link your css files here, rus -->
	<title>You have logged out from thrytbox</title>
</head>
<body>
	<h1 style="float:left;color:#fff;">You have logged out</h1>
	<h3>&larr; Back to the <a href="index.php">home page</a></h3>
</body>
</html>