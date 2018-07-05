<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
?>


<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
function validateForm()
{
var x=document.forms["pay"]["num"].value;
if (x==null || x=="")
  {
  alert("Card Number must be filled out");
  return false;
  }
var y=document.forms["pay"]["hold"].value;
if (y==null || y=="")
  {
  alert("Name on Card must be filled out");
  return false;
  }
var a=document.forms["pay"]["val"].value;
if (a==null || a=="")
  {
  alert("Validity must be filled out");
  return false;
  }
var b=document.forms["pay"]["sec"].value;
if (b==null || b=="")
  {
  alert("Security Code must be filled out");
  return false;
  }
}
</script>

</head>
<body>

<div ng-app="app" class="container">
  <form name="pay" method="post" action="print.php" ng-controller="PaymentFormCtrl" class="payment-form" onsubmit="return validateForm()">
    <div class="notification">
      <img src="images/a.png"  class="notification__icon"/>
      <span class="notification__text">
        We do not store your payment information, but we immediately transfer it via the encrypted channel to the payment system
      </span>
    </div>
    <div class="card-type clearfix">
      <div class="card-type__label">
	  Enter card details
      </div>
      <div class="card-type__icons">
        <img src="images/b.png"  ng-class="{'card-type__icon--disabled': !isVisa()}" />
        <img src="images/c.png"  ng-class="{'card-type__icon--disabled': !isMasterCard()}"/>
		<img src="images/d.png" />
      </div>
    </div>
    <input type="text" class="card-input card-input--full" placeholder="Card number" name="num" pattern="^(?:(?:4|4[0-9]{3}|5[1-5][0-9][0-9]|6[0-9]{3})[0-9]{12})$" maxlength="16"/>
    <input type="text" class="card-input card-input--full" placeholder="Name of the holder" name="hold" pattern="^[a-zA-Z ]+$" />
    <div class="card-info clearfix">
      <div class="card-info__date">
        <div class="card-info__text">
          Validity
        </div>
        <input type="text" class="card-input card-input--date" placeholder="MM/YY" name="val" pattern="^(?:0[1-9]|1[0-2])[/][0-9]{2}" maxlength="5"/>
      </div>
      <div class="card-info__cvv">
        <div class="card-info__text">
          Security Code
        </div>
        <input type="text" class="card-input card-input--cvv" placeholder="CVV" pattern="^[0-9]{3}" name="sec" maxlength="3"/>
      </div>
    </div>
	</br></br>
	<div class="card-type__label">
	  I agree to the Terms & Conditions & Privacy Policy.
    </div>
	<?php
    include('db.php');
	$id=$_GET['id'];
	$price=$_GET['price'];
	?>
	<input type="hidden" value="<?php echo $id ?>" name="id" />
    <input type="submit" name="submit" value="Pay Now" class="payment-form__button" ng-disabled="paymentForm.$invalid" /></br></br>
    <div class="payment-form__agreement">
       <center><h3>You are going to pay : &#8377 <?php echo $price ?></h3></center>
    </div>
  </form>

  
</div>
</body>
</html>