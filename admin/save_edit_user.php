<?php
	include('../db.php');
	$roomid = $_POST['roomid'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$vehicle=$_POST['vehicle'];
	mysql_query("UPDATE customer SET fname='$fname', lname='$lname', address='$address', contact='$contact', vehicle='$vehicle' WHERE id='$roomid'");
	header("location: dashboard.php");
?>