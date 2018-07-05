<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<?php
	include('../db.php');
	$id=$_GET['id'];
	$result = mysql_query("SELECT * FROM route where id='$id'");
		while($row = mysql_fetch_array($result))
			{
				$route=$row['route'];
				$price=$row['price'];
				$type=$row['type'];
			}
?>
<form action="save_edit_route.php" method="post">
	<input type="hidden" name="roomid" value="<?php echo $id=$_GET['id'] ?>">
	Route:<br><input type="text" name="route" value="<?php echo $route ?>" class="ed"></br>
	Price:<br><input type="text" name="price" value="<?php echo $price ?>" class="ed"></br>
	Vehicle Type:<br><input type="text" name="type" value="<?php echo $type ?>" class="ed"></br>
	<input type="submit" value="Edit" id="button1">
</form>