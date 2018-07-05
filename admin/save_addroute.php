<?php
include('../db.php');
$route=$_POST['route'];
$price=$_POST['price'];
$type=$_POST['type'];
$update=mysql_query("INSERT INTO route (price, route, type)
VALUES
('$price','$route','$type')");
header("location: route.php");
?>
