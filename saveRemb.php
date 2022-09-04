<?php
require("cnx.php");

$idC=$_POST['idcompte'];
$idcredit=$_POST['idcredit'];
$capital=$_POST['capital'];
$interet=$_POST['interet'];
$capitalAmorti=$_POST['capitalAmorti'];
$date=$_POST['dateRemb'];
$ps=$pdo->prepare("INSERT INTO rembourssement(idcompte,NumDossier,Capital,interet,CapitalAmorti,dateRemb) VALUES(?,?,?,?,?,?)");
$params=array($idC,$idcredit,$capital,$interet,$capitalAmorti,$date);
$ps->execute($params);
if($pdo->query("UPDATE echeanciers SET statutPayement=1 WHERE idcompte='$idC' and NumDossier='$idcredit' and DateTranch='$date'"))
                  	{
if($pdo->query("DELETE FROM echeanciers WHERE statutPayement=1 and idcompte='$idC' and NumDossier='$idcredit' and DateTranch='$date'"))
					{
						header("location:rembourssement.php");
						die();
					}
                  	}



?>