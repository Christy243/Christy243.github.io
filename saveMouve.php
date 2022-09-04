
<?php
$compte=$_POST['idcompte'];
$nature=$_POST['nature'];
$montant=$_POST['montant'];
$dev=$_POST['devise'];
$date=$_POST['dateMouve'];

require("cnx.php");
$req = $pdo->prepare("INSERT into mouvement values (?,?,?,?,?,?)");
//insertion
if ($nature == "Depot"){
	
	if($dev == "USD")
	{
		if($req->execute(array(0,$compte,$dev,$nature,+$montant,$date)))
		{
			header("location:mouvement.php");
			die();
		}
	}

	if($dev == "CDF")
	{
		if($req->execute(array(0,$compte, $dev,$nature,+$montant,$date)))
		{
			header("location:mouvement.php");
			die();
		}
	}
}

$res=$pdo->query("SELECT sum(montant) as SoldeUSD FROM mouvement WHERE devise='USD' and idcompte='$compte'");
while($solde=$res->fetch())
{
if ($nature == "Retrait")
{
	if($dev == "USD")
	{
if($solde['SoldeUSD']>=$montant)
	{
if($req->execute(array(0,$compte,$dev,$nature,-$montant,$date)))
	{
	header("location:mouvement.php");
	die();
	}
}
}
}
}
$res=$pdo->query("SELECT sum(montant) as SoldeCDF FROM mouvement WHERE devise='CDF' and idcompte='$compte'");

while($solde=$res->fetch())
{
if ($nature == "Retrait")
{
if($dev=="CDF")
{
if($solde['SoldeCDF']>=$montant)
{
if($req->execute(array(0,$compte,$dev,$nature,-$montant,$date)))
{
	header("location:mouvement.php");
	die();

}

}
}
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
	<title></title>
</head>
<body style="background-color:lightblue;">
	<br><br><br><br>
	<p style="text-align:center; font-size:50px;color:red;">Erreur</p>
	<div class="container">
<div class="alert-danger text-center fw-bold" role = "alert" style=" font-size:50px;">Solde insuffisant</div>
</div>
</body>
</html>