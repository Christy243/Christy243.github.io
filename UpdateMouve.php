<?php
$idmv=$_POST['idmouve'];
$compte=$_POST['idcompte'];
$nature=$_POST['nature'];
$montant=$_POST['montant'];
$dev=$_POST['devise'];
$date=$_POST['dateMouve'];
require("cnx.php");
$ps=$pdo->prepare("UPDATE mouvement SET idcompte=?,nature=?,montantDepotUsd=?,montantDepotCdf=?,montantRetraitUsd=?,montantRetraitCdf=?,devise=?,dateMouve=? WHERE idmouve=?");
$params=array($compte,$nature,$montant,$montant,$montant,$montant,$dev,$date,$idmv);
$ps->execute($params);
print(var_dump($_POST));
header("location:Mouvement.php");
die();

?>