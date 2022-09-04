

<?php
require("cnx.php");

$req='SELECT * FROM membres ORDER BY idcompte DESC';
$res=$pdo->prepare($req);
$res->execute();
?>

<body>
<?php require("entete.php");?>
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
<div class="">
	<br><br>
<div class="container">
<form method="POST" >
<div class="input-group">	
<input type="Search"  placeholder="Search for DateAdhesion" name="idcompte" class="form-control me-2">
<span class="input-group-btn">
<button type="submit" name="Search" class="btn btn-primary"><i class="btn btn-primary">Search</i></button>
</span>
</div>
<?php 
if(isset($_POST['Search'])){
	$idcompte=$_POST['idcompte'];
require("cnx.php"); 
$req=("SELECT * FROM membres WHERE idcompte='$idcompte'");
$res=$pdo->prepare($req);
$res->execute();
echo"<b>Resultat de la recherche par NunCompte:$idcompte<br/>";
echo"<section class=\"bg-light p-5\">";
echo"<div class=\"table-responsive\" id=\"id=no-more-tables\">";
echo"<table class=\"table bg-white\">";
echo'<thead class=\"bg-dark text-light\">';
	echo'<tr>';
		echo'<th>NunCompte</th>
		<th>CategorieC</th>
		<th>Nom</th>
		<th>Postnom</th>
		<th>Prenom</th>
		<th>Genre</th>
		<th>EtatCivil</th>
		<th>Profession</th>
		<th>DateAdhesion</th>
		<th>Telephone</th>
		<th>Adresse</th>
		<th>Nationalite</th>
		<th>Photo</th>
		';
		
	echo'</tr>';
	echo'</thead>';

	while ($mb=$res->fetch()) {
		echo'<tbody>';
		echo'<tr>
			<td>'.$mb['idcompte'].'</td>
			<td>'.$mb['categorieC'].'</td>
			<td>'.$mb['nom'].'</td>
			<td>'.$mb['postnom'].'</td>
			<td>'.$mb['prenom'].'</td>
			<td>'.$mb['genre'].'</td>
			<td>'.$mb['etatcivil'].'</td>
			<td>'.$mb['profession'].'</td>
			<td>'.$mb['dateAdhesion'].'</td>
			<td>'.$mb['telephone'].'</td>
			<td>'.$mb['adresse'].'</td>
			<td>'.$mb['nationalite'].'</td>';

			 ?>
   <td><img src="<?php echo "./images/".$mb['photo'];?>" width="100" height="100"/>
    </td>
    <td><a href="editMembre.php?idcompte=<?php echo($mb['idcompte']) ?>" class="btn btn-success" >Edit</a></td>
    <td><a onclick="return confirm('Etes vous sur de vouloir supprimer?'); "href="deleteMembre.php?idcompte=<?php echo($mb['idcompte']) ?>" class="btn btn-danger" >Delete</a></td>

						<?php echo'</tr>';
		}
echo'</tbody>';
echo'</table>';			
echo'</div>';
echo'</div>';
echo'</section>';
//afichage des membres
require("cnx.php");
$req='SELECT * FROM membres';
$res=$pdo->prepare($req);
$res->execute();



}
?>

</span>
</div>
</form>
</div>
<br><br>
<form style="margin:auto; text-align: center; color:blue; font-size: 50px; background-color:cadetblue;">
<div style=" font-size:20px; text-align: right; font-weight:bold;"><?php date_default_timezone_set('America/Winnipeg');
    echo date("y-m-d h:i A");
     ?></div>   
<section class="bg-light p-5">
<div class="bg-white">Listes des membres</div>
<div class="table-responsive" id="id=no-more-tables">
<table class="table bg-white">
<thead class="bg-dark text-light">
	<tr>
		<th>NumCompte</th>
		<th>CategorieC</th>
		<th>Nom</th>
		<th>Postnom</th>
		<th>Prenom</th>
		<th>Genre</th>
		<th>EtatCivil</th>
		<th>Profession</th>
		<th>DateAdhesion</th>
		<th>Telephone</th>
		<th>Nationalite</th>
		<th>Photo</th>
	</tr>
</thead>
<tbody>
	<?php while ($mb=$res->fetch()) {?>
		<tr>
			<td data-title="Id"><?php echo($mb['idcompte']) ?> </td>
			<td data-title="Id"><?php echo($mb['categorieC']) ?> </td>
			<td data-title="Nom"><?php echo($mb['nom']) ?> </td>
			<td data-title="Postnom"><?php echo($mb['postnom']) ?> </td>
			<td data-title="Prenom"><?php echo($mb['prenom']) ?> </td>
			<td data-title="Genre"><?php echo($mb['genre']) ?> </td>
			<td data-title="EtatCivil"><?php echo($mb['etatcivil']) ?> </td>
			<td data-title="Profession"><?php echo($mb['profession']) ?> </td>
			<td data-title="DateAdhesion"><?php echo($mb['dateAdhesion']) ?> </td>
			<td data-title="Telephone"><?php echo($mb['telephone']) ?> </td>
			<td data-title="Nationalite"><?php echo($mb['nationalite']) ?> </td>

			<td data-title="Photo"><img src="images/<?php echo($mb['photo'])?>"width="100" height="100"></td>
			<td><a href="editMembre.php?" class="btn btn-success" >Edit</a></td>
			<td><a onclick="return confirm('Etes vous sur de vouloir supprimer?'); "href="deleteMembre.php?" class="btn btn-danger" >Delete</a></td>
			
			
		</tr>
		
<?php	} ?>
</div>	
</div>	
</section>
</tbody>	
</table>	
</body>