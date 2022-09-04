<?php
$idremb=$_POST['idremb'];
$idC=$_POST['idcompte'];
$idcredit=$_POST['idcredit'];
$capital=$_POST['capital'];
$interet=$_POST['interet'];
$capitalAmorti=$_POST['capitalAmorti'];
$date=$_POST['dateRemb'];
require("cnx.php");
$ps=$pdo->prepare("UPDATE rembourssement SET idcompte=?,NumDossier=?,capital=?,interet=?,capitalAmorti=?,dateRemb=? WHERE idremb=?");
$params=array($idC,$idcredit,$capital,$interet,$capitalAmorti,$date,$idremb);
$ps->execute($params);

header("location:rembourssement.php");

?>