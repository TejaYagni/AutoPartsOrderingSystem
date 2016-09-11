<?php
    if(isset($_POST['fullNameBox']) &&isset($_POST['userNameBox']) &&isset($_POST['passwordBox'])&&isset($_POST['emailIdBox'])&&isset($_POST['billingAddressBox'])&&isset($_POST['billingCityBox'])&&isset($_POST['billingStateBox'])&&isset($_POST['billingZipcodeBox'])&&isset($_POST['shippingAddressBox'])&&isset($_POST['shippingCityBox'])&&isset($_POST['shippingStateBox'])&&isset($_POST['shippingZipcodeBox'])&& $_POST['fullNameBox'] != ""&& $_POST['userNameBox']!=""&&$_POST['passwordBox']!=""&&$_POST['emailIdBox']!=""&&$_POST['billingAddressBox']!=""&&$_POST['billingCityBox']!=""&&$_POST['billingStateBox']!=""&&$_POST['billingZipcodeBox']!=""&&$_POST['shippingAddressBox']!=""&&$_POST['shippingCityBox']!=""&&$_POST['shippingStateBox']!=""&&$_POST['shippingZipcodeBox']!="")
	{
	$fullName=$_POST['fullNameBox'];
    $userName=$_POST['userNameBox'];
    $password=$_POST['passwordBox'];
    $emailId=$_POST['emailIdBox'];
    $phoneNumber=$_POST['phoneNumberBox'];
    $billingAddress=$_POST['billingAddressBox'];
    $billingCity=$_POST['billingCityBox'];
    $billingState=$_POST['billingStateBox'];
    $billingZipcode=$_POST['billingZipcodeBox'];
    $shippingAddress=$_POST['shippingAddressBox'];
    $shippingCity=$_POST['shippingCityBox'];
    $shippingState=$_POST['shippingStateBox'];
    $shippingZipcode=$_POST['shippingZipcodeBox'];
    include("storescripts/connect_to_mysql.php");
	$sql="insert into  custInfo(fullname,username,pass,emailId,phoneNumber,billingAddress,billingCity,billingState,billingZipCode,shippingAddress,shippingCity,shippingState,shippingZipCode) values('$fullName','$userName','$password','$emailId','$phoneNumber','$billingAddress','$billingCity','$billingState','$billingZipcode','$shippingAddress','$shippingCity','$shippingState','$shippingZipcode')";
	$res=$conn2->query($sql);
	if($res)
		echo "Updated";
	header("location: http://localhost/php_practise/Mystore/card.php");
	}
	else
	{	
	echo "Fill all the details";
    header("location: signup.php");
	}
?>
<html>
   <head>
       <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link href="stylesheet.css" type="text/css" rel="stylesheet">
        <style>
         table tr td:nth-child(2)
            {
                width : 300px;
            }
       </style>
   </head>
    <body>
        <div id="signup">
         <div class="personalDetails" >
          <form action="#" >
           <div class="signupHeader"><b>Register </b></div>
            <table>
                <tr>
                    <td><p>Full Name</p></td>
                    <td><input type="text" id="fullNameBox"class="form-control"/></td>
                </tr>
                <tr>
                    <td><p>username</p></td>
                    <td><input type="text" id="usernameBox" class="form-control"/></td>
                </tr>
                <tr>
                    <td><p>password</p></td>
                    <td><input type="password" id="passwordBox" class="form-control"/></td>
                </tr>
                <tr>
                    <td><p>email Id</p></td>
                    <td><input type="text" id="emailIdBox" class="form-control"/></td>
                </tr>
                <tr>
                    <td><p>Phone Number</p></td>
                    <td><input type="text" id="phoneNumberBox" class="form-control"/></td>
                </tr>
             </table>
        </div>
        <div class="billingDetails">
            <p>Billing Details</p>
             <table>
                <tr>
                    <td><p style="padding-right:45px">Address &nbsp;&nbsp; </p></td>
                    <td><input type="text" id="billingAddressBox"class="form-control"/></td>
                </tr>
               
                <tr>
                    <td><p>City</p></td>
                    <td><input type="text" id="billingCityBox" class="form-control"/></td>
                </tr>
                <tr>
                    <td><p>State</p></td>
                    <td><input type="text" id="billingStateBox" class="form-control"/></td>
                </tr>
                <tr>
                    <td><p>Zipcode</p></td>
                    <td><input type="text" id="billingZipcodeBox" class="form-control"/></td>
                </tr>
             </table> 
        </div>
        <div class="shippingDetails">
            <p>Shipping Details</p>
             <table>
                <tr>
                    <td><p style="padding-right:55px">Address </p></td>
                    <td><input type="text" id="shippingAddressBox"class="form-control"/></td>
                </tr>
                
                <tr>
                    <td><p>City</p></td>
                    <td><input type="text" id="shippingCityBox" class="form-control"/></td>
                </tr>
                <tr>
                    <td><p>State</p></td>
                    <td><input type="text" id="shippingStateBox" class="form-control"/></td>
                </tr>
                <tr>
                    <td><p>Zipcode</p></td>
                    <td><input type="text" id="shippingZipcodeBox" class="form-control"/></td>
                </tr>
             </table> 
        </div>
             <table>
                <tr>
                    <td >
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                    <td>
                        <table class="cardButtons">
                            <tr>
                                <td><input type="button" id="proceed"class="btn-default" onclick="this.form.submit()" value="Proceed"></td>
                                <td><input type="reset" id="cancel" class="btn-default" value="Cancel"></td>
                            </tr>
                        </table>
                    </td>
                    
                </tr>
            </table>
        </div>
        </form>
        </div>
        <script src="register.js" type="application/javascript"></script>
    </body>
</html>

