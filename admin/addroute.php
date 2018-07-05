
<script type="text/javascript">
function validateForm()
{
var b=document.forms["addroom"]["route"].value;
if (b==null || b=="")
  {
  alert("Pls. Enter the Route");
  return false;
  }

var d=document.forms["addroom"]["price"].value;
if (d==null || d=="")
  {
  alert("Pls Enter the Price");
  return false;
  }
var c=document.forms["addroom"]["type"].value;
if (c==null || c=="")
  {
  alert("Pls Enter the Vehicle Type");
  return false;
  }
}
</script>

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

<form name="addroom" action="save_addroute.php" method="post" onsubmit="return validateForm()">
	Route:<br><input type="text" name="route" class="ed"><br>
	Price:<br><input type="text" name="price" class="ed"><br>
	Vehicle Type:<br><input type="text" name="type" class="ed"><br>
	<input type="submit" value="Save" id="button1">
</form>
