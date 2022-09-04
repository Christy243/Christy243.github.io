<?php
$idC=$_POST['idcompte'];
$idM=$_POST['idmembre'];
$cat=$_POST['categorie'];
$dev=$_POST['devise'];
$frais=$_POST['fraisOuvert'];
$date=$_POST['dateOuvert'];
require("cnx.php");
$ps=$pdo->prepare("UPDATE compte SET idmembre=?,categorieC=?,devise=?,frais=?,dateOuvert=? WHERE idcompte=?");
$params=array($idM,$cat,$dev,$frais,$date,$idC);
$ps->execute($params);

header("location:Compte.php");

?>