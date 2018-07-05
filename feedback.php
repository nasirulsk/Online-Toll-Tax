<div id="print_content" style="width: 400px;">
<strong>Feedback/Complain details</strong><br><br>
<?php
include('db.php');
$key=$_GET['key'];
$result = mysql_query("SELECT * FROM feedback WHERE number='$key'");
while($row = mysql_fetch_array($result))
	{
		echo 'Feedback/Complain Number: '.$row['number'].'<br>';
		echo 'Thank You for your feedback/Complain';
		echo '<br>';
        echo 'Have A Nice Day :D';
		
	}
?>
</div>
</br>
<a href="index.php">Home</a>