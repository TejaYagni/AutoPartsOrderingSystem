<?php include("../storescripts/connect_to_mysql.php");
	include("../storescripts/connect_legacy_database.php");
	?>
    <?php
	$res1=0;
if(isset($_POST['taxes'])&&isset($_POST['shipping_charges']))
{

	$tax=$_POST['taxes'];
	$ship=$_POST['shipping_charges'];
	$sql="UPDATE charges SET taxes='$tax',shipping='$ship' where index_num=1";
	$res1=$conn2->query($sql);
	
}
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Store Admin Area</title>
<link rel="stylesheet" href="../style/style.css" type="text/css" media="screen" />
</head>
<body>
<div align="center" id="mainWrapper">
  <?php include_once("../header_employee.php");?>
  <div id="pageContent"><br />
  <h1>Admin Interface</h1>
  <form>
 <fieldset>
  <legend>Current Charges:</legend>
  Tax: <?php $sql="select taxes from charges where index_num=1";$res=$conn2->query($sql);foreach($res as $row)echo $row[0];?><br>
  Shipping: <?php $sql="select shipping from charges where index_num=1";$res=$conn2->query($sql);foreach($res as $row)echo $row[0]; ?><br>
 </fieldset>
</form>
<table>
<form name="form_admin" id="form_admin" action="#" method="post">
<tr><td>Taxes</td><td><input type="text" name="taxes" id="taxes"></td></tr>
<tr><td>Shipping Charges</td><td><input type="text" name="shipping_charges" id="shipping_charges"></td></tr>
<tr><td><input type="submit" value="Update"></td></tr>
<tr></tr>
</form>
</table>
<?php if($res1)
	echo "Charges have been updated"; ?>
</div>
  <?php include_once("../template_footer.php");?>
</div>
</div>
</div>
</body>
</html>
