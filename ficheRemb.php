
<?php
require("cnx.php");
$req='SELECT * FROM ficherembourssement';
$res=$pdo->prepare($req);
$res->execute();
?>

<body>
    <style type="text/css">
    @media only screen and (max-width: 860px){
    #no-more-tables tbody,
    #no-more-tables tr,
    #no-more-tables td{
        display: block;
    }
    #no-more-tables thead tr{
        position: absolute;
        top: -9999px;
        left: -9999px;
    }
    #no-more-tables td{
        position: relative;
        padding-left: 50%;
    
        }
        #no-more-tables td:before{
            content: attr(data-title);
            position: absolute;
            left: 50px;
            font-weight: bold;
        }
}
</style>
 <?php require("etats.php"); ?> 
 <div class="container">
<form method="POST" action="ficheRemb.php" style="width:100%;">
<div class="form-group">
        <label class="control-label">NumDossier:</label>
<select class="form-select" name="NumDossier">
                <?php
                require("cnx.php");
                foreach($pdo->query("select * from credit") as $row)
                    echo '<option value='.$row['NumDossier'].'>
                                        '.$row['NumDossier'].'</option>';
                ?>
</select>       
    </div>
  <br>  
<span class="input-group-btn">
<button type="submit" name="Search" class="btn btn-primary"><i>RechercherFiche</i></button>
</span>

<?php 
if(isset($_POST['Search'])){
    $NumDossier=$_POST['NumDossier'];
require("cnx.php");
$req=("SELECT * FROM ficherembourssement WHERE NumDossier='$NumDossier'");
$res=$pdo->prepare($req);
$res->execute();
echo"<b>Resultat de la recherche par NumDossier:$NumDossier<br/>";
echo"<section class=\"bg-light p-5\">";
echo"<div class=\"table-responsive\" id=\"id=no-more-tables\">";
echo"<table class=\"table bg-white\">";
echo'<thead class=\"bg-dark text-light\">';
    echo'<tr>';
        echo'
        <th>NumCompte</th>
        <th>Nom</th>
        <th>Postnom</th>
        <th>Prenom</th>
        <th>NumCredit</th>
        <th>Capital</th>
        <th>Interet</th>
        <th>Cap/Ammortie</th>
        <th>DateRemb</th>
        ';
        
    echo'</tr>';
    while ($mb=$res->fetch()) {
        echo'<tr>
            <td>'.$mb[0].'</td>
            <td>'.$mb[1].'</td>
            <td>'.$mb[2].'</td>
            <td>'.$mb[3].'</td>
            <td>'.$mb[4].'</td>
            <td>'.number_format($mb[5],0,',','.').'</td>
            <td>'.number_format($mb[6],0,',','.').'</td>
            <td>'.number_format($mb[7],0,',','.').'</td>
            <td>'.$mb[8].'</td>
            


            ';
            echo'</tr>';
        }   
echo'</table>';
echo'</div>';
echo'</section>';
}
require("cnx.php");
$req='SELECT * FROM ficherembourssement';
$res=$pdo->prepare($req);
$res->execute();
 ?>
</span>
</div>
</form>
</div>
<br>
 
 <form style="margin:auto; text-align: center; color:blue; font-size: 50px; background-color:cadetblue;">
<div style=" font-size:20px; text-align: right; font-weight:bold;"><?php date_default_timezone_set('America/Winnipeg');
    echo date("y-m-d h:i A");
     ?></div>   
<section class="bg-light p-5">
<div class="bg-white">Fiches des rembourssements</div>
<div class="table-responsive" id="id=no-more-tables">
<table class="table bg-white">
<thead class="bg-dark text-light">
    <tr>
     
        <th>NumCompte</th>
        <th>Nom</th>
        <th>Postnom</th>
        <th>Prenom</th>
        <th>NumCredit</th>
        <th>Capital</th>
        <th>Interet</th>
        <th>Cap/Ammortie</th>
        <th>DateRemb</th>
        

        
    </tr>
</thead>
<tbody>
    <?php
      while ($mb=$res->fetch()) {
        echo'<tr>
            <td>'.$mb[0].'</td>
            <td>'.$mb[1].'</td>
            <td>'.$mb[2].'</td>
            <td>'.$mb[3].'</td>
            <td>'.$mb[4].'</td>
            <td>'.number_format($mb[5],0,',','.').'</td>
            <td>'.number_format($mb[6],0,',','.').'</td>
            <td>'.number_format($mb[7],0,',','.').'</td>
            <td>'.$mb[8].'</td>';
            echo'</tr>';
        }   
echo'</table>';
        ?>
 </div>  
</div> 
</section> 
</tbody>    
</table>    
  </body>