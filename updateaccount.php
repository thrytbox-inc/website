<?php require 'connections/connections.php'; ?>
<?php
	session_start();
	if(isset($_SESSION["UserID"])){
		#we do nothing
	}else{
		header('Location: index.php');
	}
?>
<?php
	$User = $_SESSION["UserID"];
	$result = $con->query("select * from user where UserID='$User'");
	$row = $result->fetch_array(MYSQLI_BOTH);

	session_start();

	$_SESSION["FirstName"] = $row['Fname'];
	$_SESSION["LastName"] = $row['Lname'];
	$_SESSION["Email"] = $row['Email'];
	$_SESSION["PW"] = $row['Password']; 
?>
<?php
	if(isset($_POST['update'])) {
		$UpdateFName = $_POST['FirstName'];
		$UpdateLName = $_POST['LastName'];
		$UpdateEmail = $_POST['Email'];
		$UpdatePassword = $_POST['Password'];

		$sql = $con->query("UPDATE user SET Fname = '{$UpdateFName}', Lname = '{$UpdateLName}', Email = '{$UpdateEmail}', Password = '{$UpdatePassword}' WHERE UserID= $User");
	}
?>
<!doctype html>
<html>
<head>
	<!-- Link your css files here, rus -->
	<title>Update Account: thrytbox</title>
</head>
<body>
	<div class="formelem" align="center">
		<form action="" method="post">
			<input type="text" name="First_Name" placeholder="First Name" required="required" class="TField" id="First_Name" value="<?php echo $_SESSION["FirstName"]; ?>" /><br />
			<input type="text" name="Last_Name" placeholder="Last Name" required="required" class="TField" id="Last_Name" value="<?php echo $_SESSION["LastName"]; ?>"   /><br />
			<input type="text" name="Email" placeholder="Email" required="required" class="TField" id="Email" value="<?php echo $_SESSION["Email"]; ?>" /><br />
			<input type="password" name="Password" placeholder="Password" required="required" class="TField" id="Password" value="<?php echo $_SESSION["PW"]; ?>" /><br />
			<input type="submit" name="update" value="Update Info" />
		</form>
	</div>
</body>
</html>