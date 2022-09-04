
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
   
<div class="container spacer col-md-6 col-xs-12 col-md-offset-3">
	 <div class="panel panel-default">
            <br><br><br><br><br>

 <div class="panel-heading" style="font-weight:bold; color:darkred; font-size:30px;">Création compte</div>
 <div class="panel-body">
 <form method="POST" action="saveCompte.php" enctype="multipart/form-data" style="font-weight: bold;">
   <div style=" font-size:20px; text-align: right; font-weight:bold;"><?php date_default_timezone_set('America/Winnipeg');
    echo date("y-m-d h:i A");
     ?></div>
 	<div class="form-group">
 		<label class="control-label">Membre:</label>

<select class="form-select" name="idmembre">
                <?php
                //code option
                require("cnx.php");

                $id=$_GET['idmembre'];
                foreach($pdo->query("select * from membre WHERE idmembre='$id'") as $row)
                    echo '<option value='.$row['idmembre'].'>
                                        '.$row['idmembre'].'
                                        '.$row['nom'].'
                                        '.$row['postnom'].'
                                        '.$row['prenom'].'</option>';
                ?>
</select> 		
 	</div>
    <div class="form-group">
        <label class="control-label">Mail:<?php echo($row['mail'])?></label>
        <input type="hidden" name="mail" class="form-control" value="<?php echo($row['mail'])?>">
                <?php
                //code option
                require("cnx.php");
                $id=$_GET['idmembre'];
                foreach($pdo->query("select * from membre WHERE idmembre='$id'") as $row)
                                      
                ?>
   
    </div>
    <div class="form-group">
        <label class="control-label">Categorie:</label>
<select type="text" name="categorie" class="form-select">
    <option></option>
            <option  value="A">Categorie A</option>
            <option  value="B">Categorie B</option>
            <option  value="C">Categorie C</option>
            <option  value="D">Categorie D</option>
            
        </select><br>        
    </div>
    <div class="form-group">
         <label class="control-label">Devise:</label>
        <select type="text" name="devise" class="form-select">
            <option></option>
                    <option value="USD">Dollars</option>
                    <option value="CDF">Francs</option>
                </select>
                </div>
    
    <div class="form-group">
        <label class="control-label">Frais:</label>
         <select type="text" name="fraisOuvert" class="form-select">
            <option></option>
                    <option value="5">5 Dollars</option>
                    <option value="10">10 Dollars</option>
                    <option value="20">20 Dollars</option>
                    <option value="50">50 Dollars</option>
                    <option value="10000">10000 Francs</option>
                    <option value="20000">20000 Francs</option>
                    <option value="40000">40000 Francs</option>
                    <option value="100000">100000 Francs</option>
                </select>
    </div>
    <div class="form-group">
        <label class="control-label">Date:</label>
        <input type="date" name="dateOuvert" class="form-control">
    </div>
    
 	<div class="container">
 		<button type="submit" class="btn btn-success">Save</button>

 	</div>
 </form>
 <br>
 <div>
 <a href="Compte.php"><button type="submit" class="btn btn-primary" style="float:right;">afficher</button></a>
</div>
 </div>	
</div>
 	
 </div>
 <br><br>
 <?php require("footer.php"); ?>
</body>
</html>