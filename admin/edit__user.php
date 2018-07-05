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
	$result = mysql_query("SELECT * FROM customer where id='$id'");
		while($row = mysql_fetch_array($result))
			{
		    $fname=$row['fname'];
            $lname=$row['lname'];
			$address=$row['address'];
			$contact=$row['contact'];
            $vehicle=$row['vehicle'];
            
			}
?>

<form action="save_edit_user.php" method="post">
	<input type="hidden" name="roomid" value="<?php echo $id=$_GET['id'] ?>">
	Firstname:<br><input type="text" name="fname" value="<?php echo $fname ?>" class="ed"></br>
	Lastname:<br><input type="text" name="lname" value="<?php echo $lname ?>" class="ed"></br>
	Address:<br><textarea name="address" class="ed"><?php echo $address ?></textarea></br>
	Contact:<br><input type="text" name="contact" value="<?php echo $contact ?>" class="ed"></br>
	Vehicle Number:<br><input type="text" name="vehicle" value="<?php echo $vehicle ?>" class="ed"></br>
	<input type="submit" value="Edit" id="button1">
</form>