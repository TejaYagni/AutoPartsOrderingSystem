<title>Header</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<body class="w3-container">

<style type="text/css" mm_ta_border="w3-padding-hor-12">
</style>
<div id="pageContent"><span class="w3-padding-hor-12"><br />	
</span>
  <div class="w3-display-container w3-animate-opacity"><span class="w3-padding-hor-12"><img class="banner" src="http://localhost/php_practise/Mystore/logo.jpg" alt="banner" style="width:100%;min-height:200px;max-height:2px;"></span></div>
     <ul class="w3-navbar w3-black w3-border">
  <li><span class="w3-padding-hor-12"><a href="http://localhost/php_practise/Mystore/index.php"><font color="FFFFFF"><i class="fa fa-home"></i> &nbsp; Home</font></a></span></li>
  <li><span class="w3-padding-hor-12"><a href="http://localhost/php_practise/Mystore/index.php"><font color="FFFFFF">Products</font></a></span></li>
   <li><span class="w3-padding-hor-12"><a href="http://localhost/php_practise/Mystore/aboutpage.php"><font color="FFFFFF">About Us</font></a></span></li>
  <li class="w3-right"><span class="w3-padding-hor-12" class="w3-dropdown-click">
    <a onclick="myFunction()" href="#"><font color="FFFFFF"><i class="fa fa-user"></i> &nbsp; Account <i class="fa fa-caret-down"></i></font></a>
    <div id="demo" class="w3-dropdown-content w3-white w3-card-4">
      <a href="http://localhost/php_practise/Mystore/login.php"><font color="000000">Login</font></a>
      <a href="http://localhost/php_practise/Mystore/signup.php"><font color="000000">Sign Up</font></a>
    </div>
  <li class="w3-right"><span class="w3-padding-hor-12"><a href="http://localhost/php_practise/Mystore/cart.php"><font color="FFFFFF"><i class="fa fa-shopping-cart"></i> &nbsp; Your Cart</font></a></span></li>
</ul>
<script>
function myFunction() {
    var x = document.getElementById("demo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>