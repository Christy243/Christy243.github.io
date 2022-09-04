<?php
if(isset($_POST['recherche'])){
	$idcompte=$_POST['idcompte'];
require("cnx.php");
$req=("SELECT * FROM mouvement WHERE idcompte='$idcompte'");
$res=$pdo->prepare($req);
$res->execute();
echo"<div class=\"col-md-12 col-xs-12\">";
echo"<table class=\"table table-sm table-dark\">";
	echo'<tr>';
		echo'
		<th>Date</th>
		<th>Devise</th>
		<th>Nature</th>
		<th>montant</th>
		
		
		';
		
	echo'</tr>';

	while ($mb=$res->fetch()) {
		echo'<tr>
			<td>'.$mb['dateMouve'].'</td>
			<td>'.$mb['devise'].'</td>
			<td>'.$mb['nature'].'</td>
			<td>'.$mb['montant'].'</td>
			
			';
			echo'</tr>';
		}	
echo'</table>';
echo'</div>';
}

if(isset($_POST['recherche'])){
    $idcompte=$_POST['idcompte'];
require("cnx.php"); 
foreach($pdo->query("SELECT sum(montant) as SoldeUSD FROM mouvement WHERE devise='USD' and idcompte='$idcompte'") as $row) 
foreach($pdo->query("SELECT sum(montant) as SoldeCDF FROM mouvement WHERE devise='CDF' and idcompte='$idcompte'") as $ro)	
echo "<div style=\"color: black; text-align:center; font-weight:bold;\">";
echo "<p> Total SoldeUSD: " . $row['SoldeUSD'] . "</p>";
echo "<p> Total SoldeCDF: " . $ro['SoldeCDF'] . "</p>";
echo "</div>"; 

}

?>