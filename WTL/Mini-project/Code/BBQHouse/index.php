<?php
require_once 'header.php';

//readfile("login.html");

echo "<br><span class='main'>Welcome to $appname,";
if ($loggedin) echo " $user, you are logged in.";
else echo ' please sign up and/or log in to join in.';
/**
echo "<!DOCTYPE html><html><head>";

echo<<<_END
<title>$appname$userstr</title>
<link  href="cssstyle.css" type="text/css" rel="stylesheet">

</head>
<body>
<div class='appname'>$appname$userstr</div>
<script src="javascript.js"></script>

_END;
if ($loggedin){
echo<<<_END
<br><ul class='menu'>
<li><a href='index.php>Home</a></li>
<li><a href='menu.php'>View Menu</a></li>
<li><a href='order.php'>Order</a></li>
<li><a href='book.php'>Book Table</a></li>
<li><a href='about.php'>About Us</a></li>
<li><a href='checkout.php'>Checkout</a></li></ul><br>
</body>
</html>

_END;
}
else{
echo<<<_END
<br><ul class='menu'><li><a href='index.php'>Home</a></li>
<li><a href='signup.php'>Sign up</a></li>
<li><a href='login.php'>Log in</a></li></ul><br>
<span class='info'>&#8658; You must be logged in to view this page.</span><br><br>
</body>
</html>
_END;
}
*/

?>


</span><br><br>
</body>
</html>
