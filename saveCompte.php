
<?php
require("cnx.php");
$idM=$_POST['idmembre'];
$email=$_POST['mail'];
$cat=$_POST['categorie'];
$dev=$_POST['devise'];
$frais=$_POST['fraisOuvert'];
$date=$_POST['dateOuvert'];
//GENERE UN NUMERO DE COMPTE
$ps=$pdo->prepare("INSERT INTO compteur_NumCompte(fakeId) VALUES(?)");
$params=array("0000");
$ps->execute($params);

$LastIdCredit=$pdo->prepare("SELECT * FROM compteur_NumCompte ORDER BY id DESC LIMIT 1");
$LastIdCredit->execute();
$result=$LastIdCredit->fetch(PDO::FETCH_OBJ);
$NumCompte="NUMC000".$result->id;

$ps=$pdo->prepare("INSERT INTO compte(idcompte,idmembre,mail,categorieC,devise,frais,dateOuvert) VALUES(?,?,?,?,?,?,?)");
$params=array($NumCompte,$idM,$email,$cat,$dev,$frais,$date);
if ($cat=="A") 
{
	if ($frais=="5")
	 {
	 	if ($dev=="USD")
	 	{
		if ($ps->execute($params))
		{
$headers="Content-Type: text/plain; charset=utf-8\r\n";
$headers.="from:christellebambaolivia@gmail.com\r\n";
$message='compte creer ';
mail("$email","Bienvenue",$message,$headers);			
header("location:compte.php");
	die();
		
		}
	}
}
}
if ($cat=="B") 
{
	if ($frais=="10")
	 {
	 	if ($dev=="USD")
	 	{
		if ($ps->execute($params))
		{
$headers="Content-Type: text/plain; charset=utf-8\r\n";
$headers.="from:christellebambaolivia@gmail.com\r\n";
$message='compte creer ';
mail("$email","Bienvenue",$message,$headers);			
	header("location:compte.php");
	die();
		
		}
	}
}
}
if ($cat=="C") 
{
	if ($frais=="20")
	 {
	 	if ($dev=="USD")
	 	{
		if ($ps->execute($params))
		{
$headers="Content-Type: text/plain; charset=utf-8\r\n";
$headers.="from:christellebambaolivia@gmail.com\r\n";
$message='compte creer ';
mail("$email","Bienvenue",$message,$headers,$NumCompte);		
	header("location:compte.php");
	die();
		
		}
	}
}
}
if ($cat=="D") 
{
	if ($frais=="50")
	 {
	 	if ($dev=="USD")
	 	{
		if ($ps->execute($params))
		{
$headers="Content-Type: text/plain; charset=utf-8\r\n";
$headers.="from:christellebambaolivia@gmail.com\r\n";
$message='compte creer ';
mail("$email","Bienvenue",$message,$headers,$NumCompte);		
	header("location:compte.php");
	exit();
		
		}
	}
}
}
if ($cat=="A") 
{
	if ($frais=="10000")
	 {
	 	if ($dev=="CDF")
	 	{
		if ($ps->execute($params))
		{
$headers="Content-Type: text/plain; charset=utf-8\r\n";
$headers.="from:christellebambaolivia@gmail.com\r\n";
$message='compte creer ';
mail("$email","Bienvenue",$message,$headers,$NumCompte);
	header("location:compte.php");
	exit();
		
		}
	}
}
}
if ($cat=="B") 
{
	if ($frais=="20000")
	 {
	 	if ($dev=="CDF")
	 	{
		if ($ps->execute($params))
		{
$headers="Content-Type: text/plain; charset=utf-8\r\n";
$headers.="from:christellebambaolivia@gmail.com\r\n";
$message='compte creer ';
mail("$email","Bienvenue",$message,$headers,$NumCompte);
	header("location:compte.php");
	exit();
		
		}
	}
}
}
if ($cat=="C") 
{
	if ($frais=="40000")
	 {
	 	if ($dev=="CDF")
	 	{
		if ($ps->execute($params))
		{
$headers="Content-Type: text/plain; charset=utf-8\r\n";
$headers.="from:christellebambaolivia@gmail.com\r\n";
$message='compte creer ';
mail("$email","Bienvenue",$message,$headers,$NumCompte);			
	header("location:compte.php");
	exit();
		
		}
	}
}
}
if ($cat=="D") 
{
	if ($frais=="100000")
	 {
	 	if ($dev=="CDF")
	 	{
		if ($ps->execute($params))
		{
$headers="Content-Type: text/plain; charset=utf-8\r\n";
$headers.="from:christellebambaolivia@gmail.com\r\n";
$message='compte creer ';
mail("$email","Bienvenue",$message,$headers,$NumCompte);		
	header("location:compte.php");
	exit();
		
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
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<div class="container">
<div class="alert-danger text-center fw-bold" role = "alert" style=" font-size:50px;">Le frais d'ouverture du compte ne correspond pas à la categorie du compte choisie ou la devise monaitaire chosie ne correspond pas avec le montant</div>
</div>
</body>
</html>