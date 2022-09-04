<?php
session_start();
if($_SESSION['mail'] !== "")
{
$email= $_SESSION['mail'];
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
 input[type="text"],input[type="date"],input[type="file"]{
background-color: bisque;
} 


</style>
<body style="background-color:#031321;">
 <table class= "table table-dark">
                        <th>
<h1 align="center" style="font-size: 50px";>COOPERATIVE D'EPARGNE ET DE CREDIT <b style="color: lightblue";><br>AKIBA YETU</b></h1>  
                        </th>

                    </table >   
<div class="container spacer col-md-6 col-xs-12 col-md-offset-3">
	 <div class="panel panel-default">
 <div class="panel-heading" style="color:white; font-size:30px; ">SaisieCoordonées</div>
 <div class="panel-body">
    <a href="visiteur.php"><button class="btn btn-primary">Retrour</button></a>
 <form method="POST" action="saveMembre.php" enctype="multipart/form-data">
 <div class="form-group">
      <label class="control-label">Email:<?php echo"$email"; ?></label> 
      <input type="hidden"  class="form-control" value="<?php echo"$email"; ?>" name="mail"> 
    </div>   
 	<div class="form-group">
 		<label class="control-label">Nom:</label>
 		<input type="text" name="nom" class="form-control" required>
 		
 	</div>
 	<div class="form-group">
 		<label class="control-label">Postnom:</label>
 		<input type="text" name="postnom" class="form-control" required>
 		
 	</div>
    <div class="form-group">
        <label class="control-label">Prenom:</label>
        <input type="text" name="prenom" class="form-control" required>
        
    </div>
    <div class="form-group">
         <label class="control-label">Genre:</label>
        <select  class="form-select" type="text" name="genre" style=" background-color:bisque;" required>
            <option></option>
                    <option value="F" style="font-weight:bold;">Feminin</option>
                    <option value="M" style="font-weight:bold;">Masculin</option>
                </select>
        
    </div>
    <div class="form-group">
        <label class="control-label">Etatcivil:</label>
    <select  class="form-select" type="text" name="etatcivil" class="form-control" style="background-color:bisque;" required>
        <option></option>
        <option  value="Marié(é)" style="font-weight:bold;">Marié(é)</option>
        <option value="Celibataire" style="font-weight:bold;">Celibataire</option>
    </select>
    </div>
    <div class="form-group">
        <label class="control-label">Profession:</label>
        <input type="text" name="profession" class="form-control" required>
    </div>
    <div class="form-group">
        <label class="control-label">Date:</label>
        <input type="date" name="dateAdhesion" class="form-control" required>
    </div>
    <div class="form-group">
        <label class="control-label">Telephone:</label>
        <input type="text" name="telephone" class="form-control" required>
    </div>
    <div class="form-group">
        <label class="control-label">Adresse:</label>
        <input type="text" name="adresse" class="form-control" required>
    </div>
    <div class="form-group">
        <label class="control-label">Nationalite:</label>
        <input type="text" name="nationalite" class="form-control" required>
    </div>
 	<div class="form-group">
 		<label class="control-label">Photo:</label>
 		<input type="file" name="photo" class="form-control" required>
 		
 	</div>
 	<div class="container">
 		<button type="submit" class="btn btn-success">Save</button>
 	</div>

 </form>
 	
 </div>	
</div>
 </div>
 <br><br>
 <?php require("footer.php"); ?>
</body>
</html>