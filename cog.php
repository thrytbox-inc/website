<?php session_start(); 
include 'connect.php';;
?>
<html>
<head>
<title>Thrytbox &gt; <?php $username= $_POST['username']; echo $username ?></title>
		<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<p class="welcome" id="greeting">
<?php
	$usercheck = $_POST["username"];
	$passcheck = $_POST["password"];
	$db_query = mysqli_query($con, "SELECT * FROM users WHERE username = '" . $usercheck  . "'");
	if (mysqli_num_rows($db_query) == 1){
		$record = mysqli_fetch_array($db_query);
		if (md5($passcheck) == $record['password']){
			include 'account.php';
			$_SESSION['user']= $usercheck;
			$_SESSION['pass']= $passcheck;
			}
		else
			echo "Sorry, you have typed wrong <b>password<b>.(Please try again) <br/>";
	}
	else
		echo "Sorry, you have typed wrong <b>username<b>.(Please try again) <br/>";

?>

	</body>
</html>