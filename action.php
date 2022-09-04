
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
<div class="container" >
<header id="header">GESTION DES CREDITS</header>
<div class="box">
	<div class="imgBox">
		<img src="images/accueil.png">
	</div>
	<div class="content">
		<h2>Welcome</h2>
		<a href="accueil.php">ACCUEIL</a>
		<p>Bienvenue</p>
	</div>
</div>
<div class="box">
	<div class="imgBox">
		<img src="images/membre.png">
	</div>
	<div class="content">
		<h2>Adhesion</h2>
<a href="membre.php">ADHESION</a>
		<p>Cliquez ici pour confirmer l'adheson du membre</p>
	</div>
</div>
<div class="box">
	<div class="imgBox">
		<img src="images/operation.png">
	</div>
	<div class="content">
		<h2>Les opérations</h2>
		<a href="SaisieMouvement.php">MOUVEMENT</a>

		<p>Cliquez afin de faire les mouvements de dépots et retraits</p>
	</div>
</div>
<div class="box">
	<div class="imgBox">
		<img src="images/cred.png">
	</div>
	<div class="content">
		<h2>Crédit</h2>
		<a href="solicit.php">SOLICITATIONS CREDITS</a>

		<p>Cliquez ici pour accorder les crédits</p>
	</div>
</div>
<div class="box">
	<div class="imgBox">
		<img src="images/rembou.png">
	</div>
	<div class="content">
		<h2>Remboursser</h2>
		<a href="echeancier.php">REMBOURSSEMENT</a>

		<p>Cliquez ici pour effectuer les rembourssements</p>
	</div>
</div>
<div class="box">
	<div class="imgBox">
		<img src="images/credit.png">
	</div>
	<div class="content">
		<h2>Rapports</h2>
		<a href="etats.php" >ETATS</a>
		<p>les resultats</p>
	</div>
</div>
	<div class="clearfix"></div>
</div>
<footer>
<?php
require("footer.php");
?>
</footer>
</body>
</html>