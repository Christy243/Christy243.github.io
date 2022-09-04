
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
 <div class="panel-heading" style="font-size:30px; color:darkred; font-weight:bold;">Monter un  Crédit</div>
 <div class="panel-body">
 <form method="POST" action="saveCredit.php" enctype="multipart/form-data">
    <div style=" font-size:20px; text-align: right; font-weight:bold;"><?php date_default_timezone_set('America/Winnipeg');
    echo date("y-m-d h:i A");
     ?></div>
 	<div class="form-group">
 		<label class="control-label">NumCompte:</label>
 		<input type="text" name="Idcompte" class="form-control">
 	</div>
    <div class="form-group">
        <label class="control-label">Categorie:</label>
<select type="text" name="categorieC" class="form-select" style="color:green;">
            <option></option>
            <option  value="A">Categorie A</option>
            <option  value="B">Categorie B</option>
            <option  value="C">Categorie C</option>
            <option  value="D">Categorie D</option>
            
        </select><br>        
    </div>
    <div class="form-group">
         <label class="control-label">TypeCredit:</label>
        <select  class="form-select"type="text" name="typecredit" style="color:green;">
                    <option></option>
                    <option value="GroupeSolidaire">GroupeSolidaire</option>
                    <option value="Individuel">Individuel</option>
                </select>
            </div>
            <div class="form-group">
         <label class="control-label">FrequenceRemb:</label>
        <select  class="form-select"type="text" name="frequence" style="color:red;">
                    <option></option>
                    <option value="mensuel">Mensuel</option>
                </select>
            </div>
    <div class="form-group">
        <label class="control-label">MontantAccorde:</label>
        <input type="text" name="MontantAccorde" class="form-control">
    </div>
    <div class="form-group">
        <label class="control-label">TauxInteret:</label>
        <select  class="form-select"type="text" name="TauxInteret" style="color:blue;" required>
                    <option></option>
                    <option value="2,5">2,5%</option>
                    <option value="3">3%</option>
                </select>
    </div>
    <div class="form-group">
        <label class="control-label">Motif:</label>
        <input type="text" name="Motif" class="form-control">
    </div>
    <div class="form-group">
         <label class="control-label">Devise:</label>
        <select  class="form-select"type="text" name="Devise" style="color:green;">
                    <option></option>
                    <option value="USD">Dollars</option>
                    <option value="CDF">Francs</option>
                </select>
            </div>
    <div class="form-group">
        <label class="control-label">Echeance:</label>
<select type="text" name="Echeance" class="form-select" style="color:red;">
            <option></option>
            <option  value="6">6 mois</option>
            <option  value="9">9 mois</option>
            <option  value="12">12 mois</option>
            <option  value="24">24 mois</option>
            
        </select><br>        
    </div>
   <div class="form-group">
        <label class="control-label">Durée en jours:</label>
<select type="text" name="dureeJ" class="form-select"style="color:blue; font-weight:bold;">
            <option></option>
            <option  value="180">180 Jours</option>
            <option  value="270">270 Jours</option>
            <option  value="365">365 Jours</option>
            <option  value="730">730 Jours</option>
            
        </select><br>        
    </div>
    <div class="form-group">
        <label class="control-label">DateCrèdit:</label>
        <input type="date" name="DateCred" class="form-control">
    </div>
     <div class="form-group">
        <label class="control-label">DateTombeeEcheance:</label>
        <input type="date" name="dateTombee" class="form-control">
    </div>
    <br>
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