
<?php
require("cnx.php");
$req='SELECT * FROM credit';
$res=$pdo->prepare($req);
$res->execute();
?>
<body>
<?php require("entete.php"); ?>	
 <form style="margin:auto; text-align: center; color:blue; font-size: 50px; background-color:cadetblue;">
<div style=" font-size:20px; text-align: right; font-weight:bold;"><?php date_default_timezone_set('America/Winnipeg');
    echo date("y-m-d h:i A");
     ?></div>   
<section class="bg-light p-5">
<div class="bg-white">Listes des crédirs</div>
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
			<td><?php echo($mb['NumDossier']) ?> </td>
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
			<td><a href="editCredit.php?NumDossier=<?php echo($mb['NumDossier']) ?>" class="btn btn-primary">Edit</a></td>
			<td><a href="deleteCredit.php?NumDossier=<?php echo($mb['NumDossier']) ?>" class="btn btn-danger">Delete</a></td>

		</tr>
		
<?php	} ?>
</div>
 </div>
 </section>  
</tbody>	
</table>	
	
</form>
</body>