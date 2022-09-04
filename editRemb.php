
<?php
$idremb=$_GET['idremb'];
require("cnx.php");
$ps=$pdo->prepare('SELECT * FROM rembourssement WHERE idremb=?');
$params=array($idremb);
$ps->execute($params);
$rb=$ps->fetch();
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
 <form method="POST" action="UpdateRemb.php" enctype="multipart/form-data">
    <div style=" font-size:20px; text-align: right; font-weight:bold;"><?php date_default_timezone_set('America/Winnipeg');
    echo date("y-m-d h:i A");
     ?></div>
     <div class="form-group">
        <label class="control-label">Id:<?php echo($rb['idremb']) ?></label>
        <input type="hidden" name="idremb" value="<?php echo($rb['idremb'])?>" class="form-control">
    </div>
    <div class="form-group">
        <label class="control-label">NumCompte:<?php echo($rb['idcompte']) ?></label>
        <input type="hidden" name="idcompte" value="<?php echo($rb['idcompte'])?>" class="form-control">
    </div>
    <div class="form-group">
        <label class="control-label">NumCredit:<?php echo($rb['NumDossier'])?></label>
        <input type="hidden" name="idcredit" class="form-control" value="<?php echo($rb['NumDossier'])?>">
    </div>
    <div class="form-group">
        <label class="control-label">Capital:</label>
        <input type="text" name="capital" class="form-control" value="<?php echo($rb['capital'])?>">
    </div>
    <div class="form-group">
        <label class="control-label">Interet:</label>
        <input type="text" name="interet" class="form-control" value="<?php echo($rb['interet'])?>">
    </div>
    <div class="form-group">
        <label class="control-label">CapitalAmortie:</label>
        <input type="text" name="capitalAmorti" class="form-control" value="<?php echo($rb['capitalAmorti'])?>">
    </div>
    <div class="form-group">
        <label class="control-label">Date:</label>
        <input type="date" name="dateRemb" class="form-control" value="<?php echo($rb['dateRemb'])?>">
    </div>
  <br>
    <div>
        <button class="btn btn-primary" type="submit">Save</button>
    </div>
 </form>
  <div>
    <br>
      <a href="rembourssement.php";><button class=" btn btn-primary" type="submit" style="float:right;">afficher</button></a>
    </div>
 </div> 
</div>
    
 </div>
 <br><br>
 <?php require("footer.php"); ?>
</body>
</html>
