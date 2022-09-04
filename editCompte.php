

<?php
$idcompte=$_GET['idcompte'];
require("cnx.php");
$ps=$pdo->prepare('SELECT * FROM compte WHERE idcompte=?');
$params=array($idcompte);
$ps->execute($params);
$ct=$ps->fetch();
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
 <form method="POST" action="UpdateCompte.php" enctype="multipart/form-data">
    <div style=" font-size:20px; text-align: right; font-weight:bold;"><?php date_default_timezone_set('America/Winnipeg');
    echo date("y-m-d h:i A");
     ?></div>
     <div class="form-group">
        <label class="control-label">NumCompte:<?php echo($ct['idcompte']) ?></label>
        <input type="hidden" name="idcompte" value="<?php echo($ct['idcompte'])?>" class="form-control">
        
    </div>
    <div class="form-group">
        <label class="control-label">Membre:<?php echo($ct['idmembre']) ?></label>
    <input type="hidden" name="idmembre" class="form-control" value="<?php echo($ct['idmembre']) ?>">    
       
    </div>
    <div class="form-group">
        <label class="control-label">Categorie:</label>
      <input type="text" name="categorie" class="form-control" value="<?php echo($ct['categorieC']) ?>">  
  </div>
    <div class="form-group">
         <label class="control-label">Devise:</label>
         <input type="text" name="devise" class="form-control" value="<?php echo($ct['devise']) ?>">
    </div>
    
    <div class="form-group">
        <label class="control-label">Frais:</label>
        <input type="text" name="fraisOuvert" class="form-control" value="<?php echo($ct['frais']) ?>">
    </div>

    <div class="form-group">
        <label class="control-label">Date:</label>
        <input type="date" name="dateOuvert" class="form-control"  value="<?php echo($ct['dateOuvert']) ?>">
    </div>
    
    <div>
        <button type="submit" class="btn btn-primary">Save</button>

    </div>
 </form>
 <br>
 <a href="Compte.php"><button type="submit" class="btn btn-success" style="float: right;">Afficher</button></a>

 
 </div> 
</div>
 </div>
 <br><br>
 <?php require("footer.php"); ?>
</body>
</html>
