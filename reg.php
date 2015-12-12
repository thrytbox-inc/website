<?php
session_start();
$errmsg_arr = array();
$errflag = false;
// configuration
$dbhost 	= "localhost";
$dbname		= "thrtbx_db";
$dbuser		= "root";
$dbpass		= "abc123";

error_reporting(0);
// query
$sql = "INSERT INTO users (username,password) VALUES (:sas, md5(:asas))";
$q = $conn->prepare($sql);
$q->execute(array(':sas'=>$uname,':asas'=>$pass));
header("location: index.php");
 
// database connection
$conn = new PDO("mysqli:host={$dbhost};dbname={$dbname}",$dbuser,$dbpass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$result = $conn->query($sql);

print_r($result);
// new data
 
$uname = $_POST['addusername'];
$pass = $_POST['addpassword'];
 
if($uname == '') {
	$errmsg_arr[] = 'You must enter your Username';
	$errflag = true;
}
if($pass == '') {
	$errmsg_arr[] = 'You must enter your Password';
	$errflag = true;
}
if($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: index.php");
	exit();
}
 
?>