<?php
$idCred=$_POST['idcredit'];
$idC=$_POST['Idcompte'];
$typeCred=$_POST['typecredit'];
$freq=$_POST['frequence'];
$motAc=$_POST['MontantAccorde'];
$taux=$_POST['TauxInteret'];
$mot=$_POST['Motif'];
$dev=$_POST['Devise'];
$echea=$_POST['Echeance'];
$duree=$_POST['dureeJ'];
$date=$_POST['DateCred'];
$dateTombee=$_POST['dateTombee'];
require("cnx.php");
$ps=$pdo->prepare("UPDATE credit SET idcompte=?,typecred=?,frequenceRemb=?,montantAcorde=?,interet=?,motif=?,devise=?,echeance=?,dureeJour=?,dateCred=?,dateTombee=? WHERE NumDossier=?");
$params=array($idC,$typeCred,$freq,$motAc,$taux,$mot,$dev,$echea,$duree,$date,$dateTombee,$idCred);
$ps->execute($params);

header("location:credit.php");

?>