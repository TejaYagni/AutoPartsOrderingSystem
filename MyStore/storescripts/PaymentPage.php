
<html>
<head>


	<link rel="stylesheet" href="style.css" type="text/css" /><?php include_once("../template_header.php"); ?>
<title>Ordering System</title>
</head>
<body>
<div id="page">
		
	<div id="banner">

<?php 
//error_reporting(0);
include ("connect_legacy_database.php");
include("connect_to_mysql.php");
session_start();

/*if($_GET['OrderID'])
{
	$orderID = $_GET['OrderID'];
	$_SESSION['orderID'] = $orderID;	
}*/
/*if($_GET['grandTotal'])
{
	$grandTotal = $_POST['grandTotal'];
	$_SESSION['grandTotal'] = $grandTotal;
}
*/

if(isset($_POST['custom3']))
{
	$prod_id_array=unserialize($_POST['custom3']);
}
if(isset($_POST['cust_name'])&&isset($_POST['address'])&&isset($_POST['cust_email'])&&$_POST['cust_email']!=""&&$_POST['address']!=""&&$_POST['cust_name']!="")
{
	$var=0;
	$name=$_POST['cust_name'];
	$email=$_POST['cust_email'];
	$address=$_POST['address'];

	//echo "contents in array".$prod_id_array;
	$sql_temp="select max(orderId) from orders";
	$res=$conn2->query($sql_temp);
	foreach($res as $row)
	$var=$row[0]+1;
	$sql_temp2="select productId,quantity,pricetotal from temp_order";
	$res_temp2=$conn2->query($sql_temp2);
	foreach($res_temp2 as $row_temp2)
	{
		$sql="INSERT INTO orders(ship_address,status_of_order,cust_id,prod_id,quantity,price,orderId,cust_name) VALUES('$address',1,'$email','$row_temp2[0]','$row_temp2[1]','$row_temp2[2]','$var','$name')";
		$res=$conn2->query($sql);	
	
	}
	$sql="TRUNCATE TABLE temp_order";
	$res=$conn2->query($sql);

}
?>

<?php



//echo 'Order Number is :'.$orderID;
//echo 'Price:'.$price;
//***********************PAYMENT FORM********************************************
	echo '<h2> <center><b> Card Details </b></center></h2>';
	echo '<form id = "cardDetails" method = "post">';
	echo '<table cellpadding = "10" align = "center" width = "40%">';
	echo '<tr>';
	echo '<td> Name on Card: </td>';
	echo '<td> <input type = "text" name = "Name" placeholder = "Name on Card" size = "30" required/> </td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td>Card Number:</td>';
	echo '<td><input type = "text" name = "cardNumber" placeholder = "Card Number" size = "30" required/></td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td>Expiry Date: </td>';
	echo '<td> <input type = "text" name = "expiry" placeholder = "Ex. 12/2016" size = "15" required/></td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td> Total Amount <br> (Inclusive of taxes and shipping charges): </td>';
	echo '<td> <input type = "text" name = "amount" value = "$'.$_SESSION['grandTotal'].'" size = "15" disabled/> </td>';
	echo '</tr>';
	echo '<tr/>';
	echo '<tr/>';
	echo '<tr/>';
	echo '<tr/>';
	echo '<tr/>';	
	echo '<tr>';
	echo '<td colspan = "2" align = "center"><button type = "submit" name = "submitCardDetails" align = "center">Validate Payment</button></td>';
	echo '</tr>';
	echo '</table>';
	echo '</form>';
//******************************************************************************************************************
if(isset($_POST['submitCardDetails']))
{
	//*********************************Card Authorization***********************************************************
	$fp = fsockopen( "udp://blitz.cs.niu.edu", 4445, $errno, $errstr );
	if (!$fp) die("$errstr ($errno)<br>");
	$message = ''.$_POST['cardNumber'].':'.$_POST['expiry'].':'.$_SESSION['grandTotal'].':'.$_POST['Name'].'';
	echo "Sending: $message<br>";
	fwrite( $fp, $message ) or die("write failed<br>");
	$response = fread($fp, 1024);


	//*********************************verification***********************************************************
	//if($repsonse != "")
	//{	
		echo "".$response."<br>";
		echo '<br>';
		echo "Your Order is placed.";
		echo '<br>';
		echo 'Thank you!    Shop with us Again!!';
	//}
	
	fclose($fp);	
}
?>
</div>
<?php include_once("../template_footer.php");?>
</body>
</html>