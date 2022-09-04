
<?php
require("cnx.php");
$req='SELECT * FROM compte';
$res=$pdo->prepare($req);
$res->execute();
?>
<head>
<link rel="stylesheet" type="text/css" href="style/style.css">
<link rel="stylesheet" type="text/css" href="style/bootstrap.css">
</head>
<body>
<?php require("entete.php");?>
 <br><br><br>
<form style="width:90%; margin:auto;" >
<div style=" font-size:20px; text-align: right; font-weight:bold;"><?php date_default_timezone_set('America/Winnipeg');
    echo date("y-m-d h:i A");
     ?></div>
     <div class="col-md-12 col-xs-12">
<div class="panel panel-info spacer">
<div class="panel-heading" style="font-size:50px; font-weight:bold; text-align:center; color:blue;">Listes des comptes</div>
<div class="panel-body">
<table class="table table-striped">
<thead>
    <tr>
        <th>Numcompte</th>
        <th>IdMembre</th>
        <th>Categorie</th>
        <th>Devise</th>
        <th>Frais</th>
        <th>DateOuverture</th>
        
    </tr>
</thead>
<tbody>
    <?php while ($ct=$res->fetch()) {?>
        <tr>
            <td><?php echo($ct['idcompte']) ?> </td>
            <td><?php echo($ct['idmembre']) ?> </td>
            <td><?php echo($ct['categorieC']) ?> </td>
            <td><?php echo($ct['devise']) ?> </td>
            <td><?php echo($ct['frais']) ?> </td>
            <td><?php echo($ct['dateOuvert']) ?> </td>
            

            <td><a href="editCompte.php?idcompte=<?php echo($ct['idcompte']) ?>" class="btn btn-primary">Edit</a></td>
            <td><a onclick="return confirm('Etes vous sur de vouloir supprimer?'); "href="deleteCompte.php?idcompte=<?php echo($ct['idcompte']) ?>" class="btn btn-danger">Delete</a></td>
             
        </tr>
        
<?php   } ?>
</tbody>    
</table>    
</div>  
    
    

</div>  
</div>  
</form>
</body>