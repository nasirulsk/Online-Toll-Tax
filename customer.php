<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
?>

<html>
<head>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
<style>
body{
	margin:0px;
	padding:0px;
	color:#555;
	font-family: Arial, Helvetica, sans-serif;
	font-size:13px;
	line-height:1.5em; 
	background-color:#038e86;
	background-image: url(xres/images/body.jpg);
	background-position:top;
	background-repeat:repeat-x;
font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
font-size:12px;
}
p, h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
/* ----------- My Form ----------- */
.myform{
margin:0 auto;
width:400px;
padding:14px;
}

/* ----------- stylized ----------- */
#stylized{
border:solid 2px #b7ddf2;
background:#ffffff;
}
#stylized h1 {
font-size:14px;
font-weight:bold;
margin-bottom:8px;
}
#stylized p{
font-size:11px;
color:#018aa5;
margin-bottom:20px;
border-bottom:solid 1px #b7ddf2;
padding-bottom:10px;
}
#stylized label{
color:#1e06d6;
display:block;
font-weight:bold;
text-align:right;
width:140px;
float:left;
}
#stylized .small{
color:#b50075;
display:block;
font-size:11px;
font-weight:normal;
text-align:right;
width:140px;
}
#stylized input{
float:left;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:200px;
margin:2px 0 20px 10px;
}
#stylized button{
clear:both;
margin-left:150px;
width:125px;
height:31px;
background:#a00163;
text-align:center;
line-height:31px;
color:#FFFFFF;
font-size:11px;
font-weight:bold;
}
</style>
<?php
include('db.php');
$route_list=$_POST['route'];
$date=$_POST['date'];
$category=$_POST['category'];
?>

<script type="text/javascript">
function validateForm()
{
var x=document.forms["form"]["fname"].value;
if (x==null || x=="")
  {
  alert("First Name must be filled out");
  return false;
  }
var y=document.forms["form"]["lname"].value;
if (y==null || y=="")
  {
  alert("Last Name must be filled out");
  return false;
  }
var a=document.forms["form"]["address"].value;
if (a==null || a=="")
  {
  alert("Address must be filled out");
  return false;
  }
var b=document.forms["form"]["contact"].value;
if (b==null || b=="")
  {
  alert("Contact Number must be filled out");
  return false;
  }
var c=document.forms["form"]["vehicle"].value;
if (c==null || c=="")
  {
  alert("Vehicle Number must be filled out");
  return false;
  }
}
</script>
</head>
<body>
</br></br>
<h1><center><FONT color=#47d861><u>User Information</u></FONT></center></h1>
</br></br>
<div id="stylized" class="myform">

<form id="form" name="form" action="save.php" method="post"  onsubmit="return validateForm()">
<input type="hidden" value="<?php echo $route_list ?>" name="route_list" />
<input type="hidden" value="<?php echo $date ?>" name="date" />
<input type="hidden" value="<?php echo $category ?>" name="category" />

<label>First Name
<span class="small">Enter first name</span>
</label>
<input type="text" name="fname" pattern="^[a-zA-Z ]+$" placeholder="e.g.-Nasirul" id="name"/><br>
<label>Last Name
<span class="small">Enter last name</span>
</label>
<input type="text" name="lname" pattern="^[a-zA-Z ]+$" placeholder="e.g.-Sk"  id="name"/><br>
<label>Address
<span class="small">Enter Address</span>
</label>
<input type="text" name="address" placeholder="e.g.-Golapbag,Rajbati,burdan"  id="name"/><br>
<label>Contact
<span class="small">Enter Contact Number</span>
</label>
<input type="text" name="contact" pattern="[1-9]{1}[0-9]{9}" maxlength="10" placeholder="e.g.-7679668020"  id="name"/><br>
<label>Vehicle Number
<span class="small">Enter Vehicle Number</span>
</label>
<input type="text" name="vehicle" pattern="^[A-Z]{2}[0-9]{2}[A-Z]{1|2}[0-9]{4}$" maxlength="10" placeholder="e.g.-AA11BB2222" id="name"/><br>
<button type="submit">Save & Go</button>
</form>
</div>
</body>
</html>