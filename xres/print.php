<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
?>


<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>

<script language="javascript">
function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;  
        }
</script>
Print the Invioce by clicking below<br><br>
<a href="javascript:printDiv('print_content')" >Print</a>
</br>
<div id="print_content" style="width: 400px;">
<strong>Invoice Details</strong><br><br>
<table style="width:40%">
<?php
include('db.php');
$id=$_POST['id'];
$result = mysql_query("SELECT * FROM customer WHERE transactionum='$id'");
while($row = mysql_fetch_array($result))
	{
		echo 'Transaction Number: '.$row['transactionum'].'<br>';
		echo 'Toll fees: '.$row['payable'].'<br>';
		echo 'Vehicle Number: '.$row['vehicle'].'<br>';
		echo 'Vehicle Type: '.$row['type'].'<br>';
		echo 'Name: '.$row['fname'].' '.$row['lname'].'<br>';
		echo 'Address: '.$row['address'].'<br>';
		echo 'Contact: '.$row['contact'].'<br>';
	}
$results = mysql_query("SELECT * FROM transaction WHERE transactionnum='$id'");
while($rows = mysql_fetch_array($results))
	{
		$ggagaga=$rows['route_list'];
		echo 'Route : ';
		$resulta = mysql_query("SELECT * FROM route WHERE id='$ggagaga'");
		while($rowa = mysql_fetch_array($resulta))
			{
			echo $rowa['route'];
			}
		echo '<br>';
		echo 'Date: '.$rows['date'].'<br>';
		echo '</br>';
		echo 'Thank You';
		echo '<br>';
        echo 'Have A Nice Day :D';
		
	}
?>
</div>
</br>
<a href="index.php">Home</a>