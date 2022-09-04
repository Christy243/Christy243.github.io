<?php
require("cnx.php");
$idC=$_POST['Idcompte'];
$categorieC=$_POST['categorieC'];
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
$dates = array($dateTombee);
//GENERE UN NUMERO DE CREDIT
$ps=$pdo->prepare("INSERT INTO compteur_credit(fakeId) VALUES(?)");
$params=array("0000");
$ps->execute($params);

$LastIdCredit=$pdo->prepare("SELECT * FROM compteur_credit ORDER BY id DESC LIMIT 1");
$LastIdCredit->execute();
$result=$LastIdCredit->fetch(PDO::FETCH_OBJ);
$NumCredit="CR000".$result->id;

$ps=$pdo->prepare("INSERT INTO credit(idcompte,NumDossier,categorieC,typecred,frequenceRemb,montantAcorde,interet,motif,devise,echeance,dureeJour,dateCred,dateTombee) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");
$params=array($idC,$NumCredit,$categorieC,$typeCred,$freq,$motAc,$taux,$mot,$dev,$echea,$duree,$date,$dateTombee);
$ps->execute($params);

	//GENERE L'ECHEANCIER
$ps=$pdo->prepare("INSERT INTO echeanciers(idcompte,NumDossier,NbreJour,Capital,Interet,CapAmmorti,TotalAp,Cumul,DateTranch,statutPayement) VALUES(?,?,?,?,?,?,?,?,?,?)");
$params=array($idC,$NumCredit,$echea,$motAc,0,0,0,$motAc,$date,0);
$ps->execute($params);

for ($i = 2; $i < $echea+1; $i++) {
$NewDate = date('Y-m-d', strtotime("+" . $i . "month", strtotime("$date")));
$dates[] = $NewDate;

}

foreach($dates as $dt){
$capital = $motAc;
$capitalAmorti = $capital /$echea;
$getLastRow=$pdo->query("SELECT * FROM echeanciers ORDER BY ReferenceEch DESC LIMIT 1");
$lastRowData=$getLastRow->fetch(PDO::FETCH_OBJ);
$interetApayer = $lastRowData->Capital * $taux / 100;
$totalAp = $interetApayer + $capitalAmorti;

$ps=$pdo->prepare("INSERT INTO echeanciers(idcompte,NumDossier,NbreJour,Capital,Interet,CapAmmorti,TotalAp,Cumul,DateTranch,statutPayement) VALUES(?,?,?,?,?,?,?,?,?,?)");
$params=array($idC,$NumCredit,$lastRowData->NbreJour-1,$lastRowData->Capital-$capitalAmorti,$interetApayer,$capitalAmorti,$capitalAmorti+$interetApayer,$lastRowData->Capital-$capitalAmorti,$dt,0);
$ps->execute($params);

$getLastRow=$pdo->query("SELECT * FROM echeanciers ORDER BY ReferenceEch DESC LIMIT 1");
$lastRowData=$getLastRow->fetch(PDO::FETCH_OBJ);

$req=$pdo->query("DELETE FROM echeanciers WHERE statutPayement=0 AND CapAmmorti=0 AND Interet=0 AND DateTranch='$date'");
$req=$pdo->query("DELETE FROM solicitation WHERE idcompte='$idC' and dateCred='$date'");
header("location:credit.php");
}
?>