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
<table style="width:70%">
<?php
include('db.php');
$id=$_POST['id'];
$result = mysql_query("SELECT * FROM customer WHERE transactionnum='$id'");
while($row = mysql_fetch_array($result))
	{
		echo '<tr>';
		echo "<td>Transaction Number</td>";
		echo '<td>'.$row['transactionnum'].'</td>';
		echo '<tr/>';
		echo '<tr>';
		echo "<td>Toll fees(&#x20b9)</td>";
		echo '<td>'.$row['payable']. '</td>';
		echo '<tr/>';
		echo '<tr>';
		echo "<td>Vehicle Number</td>";
		echo '<td>'.$row['vehicle'].'</td>';
		echo '<tr/>';
		echo '<tr>';
		echo "<td>Vehicle Type</td>";
		echo '<td>'.$row['type'].'</td>';
		echo '<tr/>';
		echo '<tr>';
		echo "<td>Name</td>";
		echo '<td>'.$row['fname'].' '.$row['lname'].'</td>';
		echo '<tr/>';
		echo '<tr>';
		echo "<td>Address</td>";
		echo '<td>'.$row['address'].'</td>';
		echo '<tr/>';
		echo '<tr>';
		echo "<td>Contact</td>";
		echo '<td>'.$row['contact'].'</td>';
		echo '<tr/>';
	}
$results = mysql_query("SELECT * FROM transaction WHERE transactionnum='$id'");
while($rows = mysql_fetch_array($results))
	{
		$ggagaga=$rows['route_list'];
		echo "<td>Route</td>";
		$resulta = mysql_query("SELECT * FROM route WHERE id='$ggagaga'");
		while($rowa = mysql_fetch_array($resulta))
			{
			echo '<td>'.$rowa['route'].'</td>';
			}
		echo '<tr>';
		echo "<td>Date</td>";
		echo '<td>'.$rows['date'].'</td>';
		echo '<tr/>';
		
	}
?>
</table><br>
Thank You<br>
Have a good day :-)
</div>
</br>
<a href="index.php">Home</a>