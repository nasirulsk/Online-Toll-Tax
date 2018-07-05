<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
?>


<?php
include('db.php');
function createRandomTransactionNumber() {
	$chars = "QWERTYUIOPLKJHGFDSAZXCVBNM0123456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {
		$num = rand() % 33;
		$tmp = substr($chars, $num, 1);
		$pass = $pass . $tmp;
		$i++;
	}
	return $pass;
}
$confirmation = createRandomTransactionNumber();
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$route_list=$_POST['route_list'];
$date=$_POST['date'];
$contact=$_POST['contact'];
$vehicle=$_POST['vehicle'];
$category=$_POST['category'];
$address=$_POST['address'];
$result = mysql_query("SELECT * FROM route WHERE id='$route_list'");
while($row = mysql_fetch_array($result))
	{
	$price=$row['price'];
	}
	$payable=$price;
mysql_query("INSERT INTO customer (fname, lname, address, contact, vehicle, type, route_list, transactionnum, payable)
VALUES ('$fname', '$lname', '$address', '$contact', '$vehicle', '$category', '$route_list', '$confirmation','$payable')");
mysql_query("INSERT INTO transaction (date, route_list, type, transactionnum)
VALUES ('$date', '$route_list', '$category', '$confirmation')");
header("location: payment.php?id=$confirmation&price=$payable");
?>
