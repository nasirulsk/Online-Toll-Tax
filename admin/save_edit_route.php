<?php
	include('../db.php');
	$roomid = $_POST['roomid'];
	$route=$_POST['route'];
	$price=$_POST['price'];
	$type=$_POST['type'];
	mysql_query("UPDATE route SET price='$price', route='$route', type='$type' WHERE id='$roomid'");
	header("location: route.php");
?>