<?php
 
session_start();
if ($_SESSION["connecter"] != "yes") {
header("location:login.php");
exit();
}
if (date("H") < 18)
$bienvenue = "Bonjour et bienvenue "  .
$_SESSION["username"];
else
$bienvenue = "Bonsoir et bienvenue "  .
$_SESSION["username"];
?>
 
<!DOCTYPE  html>
<html>
<head>
<meta  charset="utf-8"  />
<link rel="stylesheet" type="text/css" href="style/idx.css">

<style>
* {
font-family: arial;
}
body {
margin: 20px;
}
h2 {
text-align: center;
color: pink;
}
a {
color: blue;
text-decoration: none;
float: right;
}
a:hover {
text-decoration: underline;
}
 
</style>
</head>
<body  onLoad="document.fo.login.focus()">
<h2><?php  echo  $bienvenue  ?></h2>
<a href="admin.php" style="float: left; color: white;">
<span></span>
<span></span>
<span></span>
<span></span>
administration
</a>
<a  href="logout.php" style="float: right; color:white;">
<span></span>
<span></span>
<span></span>
<span></span>

deconnexion
</a>
<div>
	
</div>
</body>
</html>