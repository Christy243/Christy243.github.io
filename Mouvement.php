
<?php
require("cnx.php");
$req='SELECT * FROM mouvement';
$res=$pdo->prepare($req);
$res->execute();
?>

<body>

<?php require("entete.php"); ?>	
<br><br>
<div class="container">
<form method="POST" action="Mouvement.php">
<div class="input-group">	
<input type="Search"  placeholder="Search for NumCompte" name="idcompte" class="form-control me-2">
<span class="input-group-btn">
<button type="submit" name="recherche" class="btn btn-primary"><i>Vérifier les mouvements effectués</i></button>
</span>
</div>
<br><br>
<?php require("sitMouv.php"); ?>

</span>
</div>
</form>

<?php 
require("cnx.php");
$req='SELECT * FROM mouvement';
$res=$pdo->prepare($req);
$res->execute();


?>
</span>
</div>
</form>
</div>
<br>
<form style="text-align:center; font-weight:bold; font-size:50px;color: blue; width: 90%; margin:auto;">
<div style=" font-size:20px; text-align: right; font-weight:bold;"><?php date_default_timezone_set('America/Winnipeg');
	echo date("y-m-d h:i A");
	 ?></div>	
<div class="col-md-12 col-xs-12">
<div class="panel panel-info spacer">
<div class="panel-heading" style="font-size: 50px;  text-align: center;">Les opérations éffectuées</div>
<div class="panel-body">
<table class="table table-striped">
<thead class="bg-dark text-light">
	<tr>
		<th>Id</th>
		<th>NumCompte</th>
		<th>Devise</th>
		<th>Nature</th>
		<th>Montant</th>
		<th>Date</th>
		
	</tr>
</thead>
<tbody>
	<?php while ($mb=$res->fetch()) {?>
		<tr>
			<td><?php echo($mb['idmouve']) ?> </td>
			<td><?php echo($mb['idcompte']) ?> </td>
			<td><?php echo($mb['devise']) ?> </td>
			<td><?php echo($mb['nature']) ?> </td>
			<td><?php echo($mb['montant']) ?> </td>
			<td><?php echo($mb['dateMouve']) ?> </td>
			<td><a onclick="return confirm('Etes vous sur de vouloir Annules cette opération?'); "href="deleteMouve.php?idmouve=<?php echo($mb['idmouve']) ?>" class="btn btn-danger">Annuler</a></td>
		</tr>
		
<?php	} ?>
</tbody>	
</table>	
</div>	
</div>	
</div>		
</form>
<?php

//faire le total general
require("cnx.php");
foreach($pdo->query("SELECT SUM(montant)FROM mouvement WHERE devise='USD' and nature='Depot'") as $dpUsd)
foreach($pdo->query("SELECT SUM(montant)FROM mouvement WHERE devise='USD' and nature='Retrait'") as $rtUsd)
foreach($pdo->query("SELECT SUM(montant)FROM mouvement WHERE devise='CDF' and nature='Depot'") as $dpCdf)
foreach($pdo->query("SELECT SUM(montant)FROM mouvement WHERE devise='CDF' and nature='Retrait'") as $rtCdf ) 
echo "<div style=\"color: white; text-align:center; font-weight:bold;\">";
echo "<p> Total DepotUSD: " . $dpUsd['SUM(montant)'] . "</p>";
echo "<p> Total RetraitUSD: " . $rtUsd['SUM(montant)'] . "</p>";
echo "<p> Total DepotCDF: " . $dpCdf['SUM(montant)'] . "</p>";
echo "<p> Total RetraitCDF: " . $rtCdf['SUM(montant)'] . "</p>";
echo "</div>"; 

?>	
<?php
 require("cnx.php");
foreach($pdo->query("SELECT sum(montant) as SoldeUSD FROM mouvement WHERE devise='USD'") as $row)
foreach($pdo->query("SELECT sum(montant) as SoldeCDF FROM mouvement WHERE devise='CDF'") as $solde)
    echo "<div style=\"color: white; text-align:center; font-weight:bold;\">";
    echo "<p> SoldeUSD: " . $row['SoldeUSD'] . "</p>";
    echo "<p> SoldeCDF: " . $solde['SoldeCDF'] . "</p>";
    echo "</div>";
    
?>

</body>