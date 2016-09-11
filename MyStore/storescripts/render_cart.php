<?php
session_start();
if(isset($_POST['custom']))
{
	$prod_id_array=unserialize($_POST['custom']);
	//$prod_id_array.="yey";
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>render cart</title><?php include("../template_header.php"); ?>
</head>

<body>
 <form action="../register.php" name="form_1" id="form_1" method="post"> 
	<input type="hidden" name="custom1" id="custom1" value="<?php echo htmlentities($_POST['custom']) ?>" >
    <input type="submit" value="Check out as Member" />
    </form>
  <form action="ship_details.php" name="form_2" id="form_2" method="post"> 
	<input type="hidden" name="custom2" id="custom2" value="<?php echo htmlentities($_POST['custom']) ?>" >
    <input type="submit" value="Check out as Guest" />
    </form>  

</body>
<?php include("../template_footer.php"); ?>
</html>
