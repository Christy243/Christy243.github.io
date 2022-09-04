
<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style/idx.css">
<body style="background-color:#031321;">
<div class="container">
    <br>
    <div>
    <a href="visiteur.php"> 
                <span></span>
                <span></span>
                <span></span>
                <span></span>
               retour
           </a>

        <a href="saisieSolicit.php" style="float:right;" > 
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                soliciter un credit
           </a>
       </div>
        <div>
    
     <br><br><br>
        <form action="moncompte.php" method="POST"  style=" text-align: center;">
         <div class="input-group">
        <input type="search" placeholder="Rechercher par votre numéro de compte" name="idcompte" class="form-control me-2">
        <span class="input-group-btn">
        <button type="submit" name="recherche" class="btn btn-primary"><i>Rechercher</i></button>
        </span>
    </div>
    <br><br>
    <div>
    <div>
        <?php
        require("cnx.php");
        if(isset($_POST['recherche'])){
        $idcompte=$_POST['idcompte'];
        $req="SELECT * FROM membres WHERE idcompte='$idcompte'";
        $res=$pdo->prepare($req);
        $res->execute();
        while($ligne=$res->fetch()){
                    echo"<div style=\"\">
                    <p><label style=\"color:white;\">NumCompte:$ligne[0]</label></p>
                     <p><label style=\"color:white;\">CategorieC : $ligne[1]</label></p>
                    <p><label style=\"color:white;\">Nom : $ligne[2]</label></p>
                    <p><label style=\"color:white;\">Postnom : $ligne[3]</label></p>
                    <p><label style=\"color:white;\">Prenom : $ligne[4]</label></p>";
                    ?>
                    <p><img src="<?php echo "./images/".$ligne[11];?>" width="100" height="100"style="float:right;"></p>    
                    
                 <?php echo'</div>';

                 }
             }

        ?>
    </div>
    <div style="background-color:darkgreen;">
    <p style="text-align:center; color:white; font-size:30px;">Mes mouvements</p>  
    <?php
    require("sitMouv.php");
    ?>
    </div>
    <div style="background-color:darkblue;">
    <p style="text-align:center; color:white; font-size:30px;">Mon echéancier</p>  
    <?php require("monEcheancier.php"); ?>
    </div>
  
</form>
</div>
</body>
</html>
