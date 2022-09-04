
<?php
if(session_status()==PHP_SESSION_NONE){
session_start();

if($_SESSION['mail'] !== "")
{
$email= $_SESSION['mail'];
}
}
require("cnx.php");
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
move_uploaded_file($fichiertmp,'./images/'.$nomphoto);

//GENERE UN NUMERO UN MEMBRE
$ps=$pdo->prepare("INSERT INTO compteur_idmembre(fakeId) VALUES(?)");
$params=array("0000");
$ps->execute($params);

$LastIdCredit=$pdo->prepare("SELECT * FROM compteur_idmembre ORDER BY id DESC LIMIT 1");
$LastIdCredit->execute();
$result=$LastIdCredit->fetch(PDO::FETCH_OBJ);
$NumMembre="MB000".$result->id;

$ps=$pdo->prepare("INSERT INTO membre(idmembre,nom,postnom,prenom,genre,etatcivil,profession,dateAdhesion,telephone,adresse,nationalite,mail,photo) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");
$params=array($NumMembre,$nom,$post,$pre,$genre,$etat,$prof,$date,$tel,$ad,$natio,$email,$nomphoto);
$ps->execute($params);

$headers="Content-Type: text/plain; charset=utf-8\r\n";
$headers.="from:christellebambaolivia@gmail.com\r\n";
$message='Vous etes deja adheré dans notre COOPEC';
mail("$email","Bienvenue",$message,$headers);
header("location:saisieMembre.php");
?>
