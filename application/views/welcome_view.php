<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html><head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<title>Login with CI</title>
<center>
<?php if(isset($welcome)) echo "<h2><span style='color:red;'>$welcome</span></h2>";
echo "<br/>";
echo anchor("login/logout", 'Logout') ?>
</center>
</body></html>