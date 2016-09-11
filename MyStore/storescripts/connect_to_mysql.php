<?php
$servername = "localhost";
$username = "root";
$password = "";

try
{
$conn2 = new PDO("mysql:host=$servername;dbname=login",$username,$password);
$conn2->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//echo "Connected Successfully <br>";
}
catch(PDOException $e)
{
echo "Connection Failed: ".$e->getMessage();
}
?>