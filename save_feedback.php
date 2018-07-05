<?php
include('db.php');
function createRandomPassword() {
	$chars = "0123456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 4) {
		$num = rand() % 33;
		$tmp = substr($chars, $num, 1);
		$pass = $pass . $tmp;
		$i++;
	}
	return $pass;
}
$confirmation = createRandomPassword();
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
mysql_query("INSERT INTO feedback (name, email, subject, message, number)
VALUES ('$name', '$email', '$subject', '$message', '$confirmation')");
header("location: feedback.php?key=$confirmation");
?>