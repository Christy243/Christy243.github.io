<?php 
session_start();
if(!(isset($_SESSION['username']))){
header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style/style.css">
<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
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
 <div class="panel-heading" style="font-size:30px; color:darkred; font-weight:bold;">Opérations</div>
 <div class="panel-body">
 <form method="POST" action="saveMouve.php" enctype="multipart/form-data">
    <div style=" font-size:20px; text-align: right; font-weight:bold;"><?php date_default_timezone_set('America/Winnipeg');
    echo date("y-m-d h:i A");
     ?></div>
    <div class="form-group">
<label class="control-label">NumCompte:</label>
<input type="text" name="idcompte" class="form-control">
</div>

<div class="form-group">
<label class="control-label">Nature:</label>
<select  class="form-select" type="text" name="nature">
    <option></option>
<option value="Depot">Depot</option>
<option value="Retrait">Retrait</option>
</select>
</div>
    
<div class="form-group">
<label class="control-label">Devise:</label>
<select  class="form-select"type="text" name="devise" >
    <option></option>
<option value="USD">Dollars</option>
<option value="CDF">Francs</option>
</select>
</div>
<div class="form-group">
<label class="control-label">Date:</label>
<input type="date" name="dateMouve" class="form-control">
</div>
 <div class="container"> 
<div class="form-group">
<label class="control-label">Montant:</label>
<input type="text" name="montant" class="form-control" style="background-color:bisque;">
</div>           
    <div class="container">  
<button class="btn btn-success" type="submit" style="width:100%; font-size:20px;">Effectuer Opération</button>
</div>

 </form>

 </div>
</div>
</div>
<br>
<a href="Mouvement.php";><button class="btn btn-primary" type="submit" style="float:right">afficher</button></a>
<br><br>
<?php require("footer.php");?>

</body>
</html>