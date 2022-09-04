<?php
require("cnx.php");
$req='SELECT * FROM solicitation ORDER BY idSolicit DESC';
$res=$pdo->prepare($req);
$res->execute();
?>
<body>
<?php require("entete.php"); ?>
<style type="text/css">

	@media only screen and (max-width: 860px){
	#no-more-tables tbody,
	#no-more-tables tr,
	#no-more-tables td{
		display: block;
	}
	#no-more-tables thead tr{
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	#no-more-tables td{
		position: relative;
		padding-left: 50%;
	
		}
		#no-more-tables td:before{
			content: attr(data-title);
			position: absolute;
			left: 50px;
			font-weight: bold;
		}
}	


</style>	
<form style="margin:auto; text-align: center; color:blue; font-size: 50px; background-color:cadetblue;">
<div style=" font-size:20px; text-align: right; font-weight:bold;"><?php date_default_timezone_set('America/Winnipeg');
	echo date("y-m-d h:i A");
	 ?></div>	
<section class="bg-light p-5">
<div class="bg-white">Solicitations</div>
<div class="table-responsive" id="id=no-more-tables">
<table class="table bg-white">
<thead class="bg-dark text-light">
	<tr>
		<th>Id</th>
		<th>NumCompte</th>
		<th>TypeCredit</th>
		<th>Frequence</th>
		<th>Montant</th>
		<th>TauxInteret</th>
		<th>Motif</th>
		<th>Devise</th>
		<th>Echeance</th>
		<th>Duree en jour</th>
		<th>Date</th>
		<th>DateTombe</th>
		
	</tr>
</thead>
<tbody>
	<?php while ($mb=$res->fetch()) {?>
		<tr>
			<td><?php echo($mb['idSolicit']) ?> </td>
			<td><?php echo($mb['idcompte']) ?> </td>
			<td><?php echo($mb['typecred']) ?> </td>
			<td><?php echo($mb['frequenceRemb']) ?> </td>
			<td><?php echo($mb['montantAcorde']) ?> </td>
			<td><?php echo($mb['interet']) ?> </td>
			<td><?php echo($mb['motif']) ?> </td>
			<td><?php echo($mb['devise']) ?> </td>
			<td><?php echo($mb['echeance']) ?> </td>
			<td><?php echo($mb['dureeJour']) ?> </td>
			<td><?php echo($mb['dateCred']) ?> </td>
			<td><?php echo($mb['dateTombee']) ?> </td>
			<td><a href="deleteSolicit.php?idSolicit=<?php echo($mb['idSolicit']) ?>" class="btn btn-danger">Delete</a></td>
			<td><a href="accorder.php?idSolicit=<?php echo($mb['idSolicit']) ?>" class="btn btn-success">Accorder</a></td>

		</tr>
		
<?php	} ?>
</div>	
</div>	
</section>
</tbody>	
</table>		
</form>
</body>