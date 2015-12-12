<?php require 'connections/connections.php' ?>
<?php
session_start();
if(isset($_SESSION["UserID"])){
	#we do nothing
}else{
	header('Location: index.php');
}
?>
