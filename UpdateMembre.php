<?php
$idmembre=$_POST['idmembre'];
$nom=$_POST['nom'];
$post=$_POST['postnom'];
$pre=$_POST['prenom'];
$genre=$_POST['genre'];
$etat=$_POST['etatcivil'];
$prof=$_POST['profession'];
$date=$_POST['dateAdhesion'];
$tel=$_POST['telephone'];
$ad=$_POST['adresse'];
$natio=$_POST['nationalite'];
$nomphoto=$_FILES['photo']['name'];
$fichiertmp=$_FILES['photo']['tmp_name'];
require("cnx.php");

if ($nomphoto=="") {
$ps=$pdo->prepare("UPDATE membre SET nom=?,postnom=?,prenom=?,genre=?,etatcivil=?,profession=?,dateAdhesion=?,telephone=?,adresse=?,nationalite=? WHERE idmembre=?");
$params=array($nom,$post,$pre,$genre,$etat,$prof,$date,$tel,$ad,$natio,$idmembre);
$ps->execute($params);
}

else{
	$fichiertmp=$_FILES['photo']['tmp_name'];
move_uploaded_file($fichiertmp,'./images/'.$nomphoto);
$ps=$pdo->prepare("UPDATE membre SET nom=?,postnom=?,prenom=?,genre=?,etatcivil=?,profession=?,dateAdhesion=?,telephone=?,adresse=?,nationalite=?,photo=? WHERE idmembre=?");
$params=array($nom,$post,$pre,$genre,$etat,$prof,$date,$tel,$ad,$natio,$nomphoto,$idmembre);
$ps->execute($params);
}
header("location:membre.php");

?>