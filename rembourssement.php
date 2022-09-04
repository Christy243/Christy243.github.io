
<?php
require("cnx.php");
$req='SELECT * FROM rembourssement';
$res=$pdo->prepare($req);
$res->execute();
?>

<body>
<?php require("entete.php"); ?>
<form style="margin:auto; text-align:center; font-size:50px;color: blue;">
<div style=" font-size:20px; text-align: right; font-weight:bold;"><?php date_default_timezone_set('America/Winnipeg');
	echo date("y-m-d h:i A");
	 ?></div>	
<div class="col-md-12 col-xs-12">
<div class="panel panel-info spacer">
<div class="panel-heading">Listes des rembourssements</div>
<div class="panel-body">
<table class="table table-striped">
<thead>
	<tr>
		<th>Id</th>
		<th>NumCompte</th>
		<th>NumDossiser</th>
		<th>capital</th>
		<th>Interet</th>
		<th>capitalAmortie</th>
		<th>Date</th>
		
	</tr>
</thead>
<tbody>
	<?php while ($mb=$res->fetch()) {?>
		<tr>
			<td><?php echo($mb['idremb']) ?> </td>
			<td><?php echo($mb['idcompte']) ?> </td>
			<td><?php echo($mb['NumDossier']) ?> </td>
			<td><?php echo number_format($mb['capital'],0,',','.') ?> </td>
			<td><?php echo number_format($mb['interet'],0,',','.') ?> </td>
			<td><?php echo number_format($mb['capitalAmorti'],0,',','.') ?> </td>
			<td><?php echo($mb['dateRemb']) ?> </td>
			
			
		</tr>
		
<?php	} ?>
</tbody>	
</table>	
</div>	
	
	

</div>	
</div>	
</form>

</body>