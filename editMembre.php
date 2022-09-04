
<?php
$idmembre=$_GET['idmembre'];
require("cnx.php");
$ps=$pdo->prepare('SELECT * FROM membre WHERE idmembre=?');
$params=array($idmembre);
$ps->execute($params);
$mb=$ps->fetch();
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
 <div class="panel-heading" style="font-size:30px; color:darkred; font-weight:bold;">Edition</div>
 <div class="panel-body">
 <form method="POST" action=UpdateMembre.php enctype="multipart/form-data">
    <div style=" font-size:20px; text-align: right; font-weight:bold;"><?php date_default_timezone_set('America/Winnipeg');
    echo date("y-m-d h:i A");
     ?></div>
     <div class="container">
        <img src="images/<?php echo($mb['photo']) ?>" width="100" height="100" style="float: right;">
    </div>
    <br><br><br>
    <div class="form-group">
        <label class="control-label">id:<?php echo($mb['idmembre']) ?></label>
        <input type="hidden" name="idmembre" value="<?php echo($mb['idmembre'])?>" class="form-control">
        
    </div>
    <div class="form-group">
        <label class="control-label">Nom:</label>
        <input type="text" name="nom" class="form-control" value="<?php echo($mb['nom']) ?>">
        
    </div>
    <div class="form-group">
        <label class="control-label">Postnom:</label>
        <input type="text" name="postnom" class="form-control" value="<?php echo($mb['postnom']) ?>">
        
    </div>
    <div class="form-group">
        <label class="control-label">Prenom:</label>
        <input type="text" name="prenom" class="form-control" value="<?php echo($mb['prenom']) ?>">
        
    </div>
    <div class="form-group">
         <label class="control-label">Genre:</label>
        <select  class="form-select"type="text" name="genre" value="<?php echo($mb['genre']) ?>">
                    <option value="F">Feminin</option>
                    <option value="M">Masculin</option>
                </select>
        
    </div>
    <div class="form-group">
        <label class="control-label">Etatcivil:</label>
    <select  class="form-select"type="text" name="etatcivil" value="<?php echo($mb['etatcivil']) ?>">
        <option  value="Marié(é)">Marié(é)</option>
        <option value="Celibataire">Celibataire</option>
    </select>
    </div>
    <div class="form-group">
        <label class="control-label">Profession:</label>
        <input type="text" name="profession" class="form-control" value="<?php echo($mb['profession']) ?>">
    </div>
    <div class="form-group">
        <label class="control-label">Date:</label>
        <input type="date" name="dateAdhesion" class="form-control" value="<?php echo($mb['dateAdhesion']) ?>">
    </div>
    <div class="form-group">
        <label class="control-label">Telephone:</label>
        <input type="text" name="telephone" class="form-control" value="<?php echo($mb['telephone']) ?>">
    </div>
     <div class="form-group">
        <label class="control-label">Adresse:</label>
        <input type="text" name="adresse" class="form-control" value="<?php echo($mb['adresse']) ?>">
    </div>
    <div class="form-group">
        <label class="control-label">Nationalite:</label>
        <input type="text" name="nationalite" class="form-control" value="<?php echo($mb['nationalite']) ?>">
    </div>

    <div class="form-group">
        <label class="control-label">Photo:</label>
        <input type="file" name="photo" class="form-control">
    </div>
    <br>
    <div class="container">
        <button type="submit" class="btn btn-success" style="font-size:30px;">Save</button>
    </div>
 </form>
<a href="credit.php";><button class=" btn btn-primary" type="submit" style="float:right;">afficher</button></a>

 <br>
 
 </div> 
</div>
    
 </div> 
 <?php require("footer.php"); ?>
</body>
</html>