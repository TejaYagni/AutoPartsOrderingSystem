<?php
require("../storescripts/connect_legacy_database.php");
require("../storescripts/connect_to_mysql.php");
if(isset($_POST['hid']))
{  
	$order=$_POST['hid'];
		$out="----------------------------------------------------------------\n                          INVOICE                                         \n----------------------------------------------------------------\n|".str_pad(" Product",40)."|".str_pad("Quantity",10)."|".str_pad("Price",6)."|\n";
   $ship_out="----------------------------------------------------------------\n                      SHIPPING ADDRESS                                    \n----------------------------------------------------------------\n";
	  $orderNumber = $order;
	$querya = "SELECT prod_id,quantity,price FROM orders WHERE orderId = ".$orderNumber.";";
	$res=$conn2->query($querya);
	foreach($res as $row)
	{
		$sql1="select description from parts where number=". $row[0]."; ";
		$res1=$conn1->query($sql1);
		foreach($res1 as $row1)
		$out.="|".str_pad("$row1[0]",40)."|".str_pad("$row[1]",10)."|".str_pad("$row[2]",6)."| \n";		
	}
	$fp = fopen($_SERVER["DOCUMENT_ROOT"] . "/invoice_$orderNumber.txt","wb");
	fwrite($fp,$out);
	fclose($fp);
	
	
	$query1="select distinct cust_name, ship_address from orders where orderId=$orderNumber;";
	$res2=$conn2->query($query1);
	foreach($res2 as $row2)
	{
		$ship_out.="$row2[0] \n $row2[1]";
	}
	$fp1=fopen($_SERVER["DOCUMENT_ROOT"]."/ship_address_$orderNumber.txt","wb");
	fwrite($fp1,$ship_out);
	fclose($fp1);
	echo "Generated";
	$sql="update orders set status_of_order=0 where orderId=".$order.";";
	$res=$conn2->query($sql);
	header("location:index.php");
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Invoice and Shipping labels generated</title>
</head>

<body>
</body>
</html>