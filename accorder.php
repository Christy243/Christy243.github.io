
<?php
require("cnx.php");
$idSolicit=$_GET['idSolicit'];
$ps=$pdo->prepare('SELECT * FROM solicitation WHERE idSolicit=?');
$params=array($idSolicit);
$ps->execute($params);
$cd=$ps->fetch();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style/style.css">
<link rel="stylesheet" type="text/css" href="style/bootstrap.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<style type="text/css">
    label{
        font-weight: bold;
    }
</style>
<body>
 <?php require("entete.php"); ?>
 <br><br><br>
 <div>
    </div>
<div class="container spacer col-md-6 col-xs-12 col-md-offset-3">
     <div class="panel panel-default">
 <div class="panel-heading" style="font-size:30px; color:darkred; font-weight:bold;">AccoderCrèdit</div>
 <div class="panel-body">
 <form method="POST" action="saveAccorder.php" enctype="multipart/form-data">
    <div style=" font-size:20px; text-align: right; font-weight:bold;"><?php date_default_timezone_set('America/Winnipeg');
    echo date("y-m-d h:i A");
     ?></div>
     
     <div class="form-group">
        <label class="control-label">Id:<?php echo($cd['idSolicit']) ?></label>
        <input type="hidden" name="idcredit" class="form-control" value="<?php echo($cd['idSolicit']) ?>">
    </div>
    <div class="form-group">
        <label class="control-label">NumCompte:<?php echo($cd['idcompte']) ?></label>
        <input type="hidden" name="Idcompte" value="<?php echo($cd['idcompte']) ?>" class="form-control">
    </div>
    
    <div class="form-group">
        <label class="control-label">CategorieCompte:<?php echo($cd['categorieC']) ?></label>
        <input type="hidden" name="categorieC" value="<?php echo($cd['categorieC']) ?>" class="form-control">
    </div>
     <div class="form-group">
         <label class="control-label">TypeCredit:</label>
         <input type="text" name="typecredit" value="<?php echo($cd['typecred']) ?>" class="form-control">
            </div>
    <div class="form-group">
     <label class="control-label">FrequenceRemb:</label>
     <input type="text" name="frequence" value="<?php echo($cd['frequenceRemb']) ?>" class="form-control">
        
        </div>   
    <div class="form-group">
        <label class="control-label">MontantAccorde:</label>
        <input type="text" name="MontantAccorde" class="form-control" value="<?php echo($cd['montantAcorde']) ?>">
    </div>
    <div class="form-group">
        <label class="control-label">TauxInteret:</label>
        <input type="text" name="TauxInteret" class="form-control" value="<?php echo($cd['interet']) ?>">
    </div>
    <div class="form-group">
        <label class="control-label">Motif:</label>
        <input type="text" name="Motif" class="form-control" value="<?php echo($cd['motif']) ?>">
    </div>
    <div class="form-group">
         <label class="control-label">Devise:</label>
         <input type="text" name="Devise" value="<?php echo($cd['devise']) ?>" class="form-control">
        
    </div>
    <div class="form-group">
        <label class="control-label">Echeance:</label>
        <input type="text" name="Echeance" class="form-control" value="<?php echo($cd['echeance']) ?>">
    </div>
    <div class="form-group">
        <label class="control-label">Duree en jour:</label>
        <input type="text" name="dureeJ" class="form-control" value="<?php echo($cd['dureeJour']) ?>">
    </div>
    <div class="form-group">
        <label class="control-label">DateCredit:</label>
        <input type="date" name="DateCred" class="form-control" value="<?php echo($cd['dateCred']) ?>">
    </div>
     <div class="form-group">
        <label class="control-label">DateTombeeEcheance:</label>
        <input type="date" name="dateTombee" class="form-control" value="<?php echo($cd['dateTombee']) ?>">
    </div>
    <div class="container">
        <button class=" btn btn-success" type="submit">Save</button>
    </div>
 </form>

<br>
<a href="credit.php";><button class=" btn btn-primary" type="submit" style="float:right;">afficher</button></a>

 <br><br>
 
 </div> 
</div>
    
 </div> 
 <?php require("footer.php"); ?>
</body>
</html>