<?php
session_start();
echo "<!DOCTYPE html><html><head>";
require_once 'functions.php';
$userstr = ' (Guest)';
if (isset($_SESSION['user']))
{
$user = $_SESSION['user'];
$loggedin = TRUE;
$userstr = " ($user)";

}
else $loggedin = FALSE;


echo<<<_END
<title>$appname$userstr</title>
<link  href="cssstyle.css" type="text/css" rel="stylesheet">

</head>
<body>
<div class='appname'>$appname$userstr</div>
<script src="javascript.js"></script>

<br>
 
 <hr>
 <div class="top" align="center">

  
  
  
  
    <img src="vegbuffet.jpg" alt="BBQ House" class="avatar" style="border-radius:50%; align:left">
	
	  <img src="bbq.png" alt="BBQ House" class="avatar" style="border-radius:50%;">
    <img src="nonvegbuffet.jpg" alt="BBQ House" class="avatar" style="border-radius:50%;">
  
  </div>
_END;
if ($loggedin){
echo<<<_END
<br><ul class='menu'>
<li><a href='index.php'>Home</a></li>
<li><a href='menu.php'>Menu Card</a></li>

<li><a href='order.php'>Order</a></li>
<li><a href='book.php'>Book Table</a></li>
<li><a href='about.php'>About Us</a></li>
<li><a href='checkout.php'>Checkout</a></li></ul><br>
_END;
}
else{
echo<<<_END
<br><ul class='menu'><li><a href='index.php'>Home</a></li>
<li><a href='signup.php'>Sign up</a></li>
<li><a href='login.php'>Log in</a></li></ul><br>
<span class='info'>&#8658; You must be logged in to view this page.</span><br><br>
_END;
}

?>
