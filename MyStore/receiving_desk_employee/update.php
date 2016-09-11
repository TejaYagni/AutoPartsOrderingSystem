<?php 
	require("../storescripts/connect_to_mysql.php");
	$out="";
	try
	{
	if(isset($_GET['id']))
	{
		$part=$_GET['id'];
	}		
	
	}
	catch(PDOException $e)
	{
		echo "Some thing wrong:".$e->getMessage();
	}
 ?>
 <?php 
	if(isset($_POST['quant']))
	{
		$sql="select quantity from partsquantity where number='$part' limit 1";
		$res=$conn2->query($sql);
		foreach($res as $row)
		$quantity=$row[0];
		
				$quantity=$_POST['quant']+$quantity;
				$sql="UPDATE partsquantity SET quantity='$quantity' WHERE number='$part'";
				$res2=$conn2->query($sql);		
				if($res2)
	$out= "Charges have been updated"; 
	}
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Receiving Desk Employee Area</title>
<link rel="stylesheet" href="../style/style.css" type="text/css" media="screen" />
</head>
<body>
<div align="center" id="mainWrapper">
  <?php include_once("../header_employee.php");?>
  <div id="pageContent"><br />
  <h1>Receiving Desk Employee Interface</h1>
 
		<table>
			<tr><td>Part Number</td><td><?php echo $part ?>
			<form action="#" method="post" name="form_quant" id="form_quant">
			<tr><td>Enter the quantity</td><td><input type="text" id="quant" name="quant"></input></td></tr>
			<tr><td><input type="submit" value="Update"></input></td></tr></form>
		</table>
<?php echo $out; ?>
</div>
  <?php include_once("../template_footer.php");?>
</div>
</div>
</div>
</body>
</html>
