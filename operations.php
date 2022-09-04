
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style/box.css">
	<title></title>
	<style type="text/css">
a
{
	text-decoration: none;
	margin: 5px 5px 5px 5px;
	background-color:none;
	color: darkred;
	background-size: 50px;
	border-radius: 6px;
	size: 18px;
	font-weight:bold;
	font-size: 30px;
}

</style>
</head>
<body style="background-color:#031321">
	<br><br>
<div class="container">
<header id="header">GESTION DES CREDITS</header>
<div class="box">
	<div class="imgBox">
		<img src="images/compt.png">
	</div>
	<div class="content">
		<a href="action.php">ACTIONS</a>
		<p>Commencer avec les opérations
	</div>
</div>
<div class="box">
	<div class="imgBox">
		<img src="images/compt.png">
	</div>
	<div class="content">
<a href="etats.php">ETATS</a>
		<p>les rapports</p>
	</div>
</div>
<div class="box">
	<div class="imgBox">
		<img src="images/3.jpg">
	</div>
	<div class="content">
		<a href="logout.php">DECONNEXION</a>
		<p>Se déconnecter</p>
	</div>
</div>
		<div class="clearfix"></div>
</div>

<?php
require("footer.php");
?>
</body>
</html>