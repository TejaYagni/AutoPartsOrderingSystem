<?php
require("../storescripts/connect_to_mysql.php");
for($i=0;$i<150;$i++)
{
$sql="INSERT INTO partsquantity(quantity) VALUES(50)";
$res=$conn2->query($sql);
}
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>