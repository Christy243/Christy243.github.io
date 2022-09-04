
<?php
require("cnx.php");
$req='SELECT * FROM SitCred';
$res=$pdo->prepare($req);
$res->execute();
?>

<body>

 <?php require("etats.php"); ?> 
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
<form style="margin:auto; text-align: center; color:blue; font-size: 50px; background-color:cadetblue;">
<div style=" font-size:20px; text-align: right; font-weight:bold;"><?php date_default_timezone_set('America/Winnipeg');
    echo date("y-m-d h:i A");
     ?></div>   
<section class="bg-light p-5">
<div class="bg-white">Situations des crédits</div>
<div class="table-responsive" id="id=no-more-tables">
<table class="table bg-white">
<thead class="bg-dark text-light">
    <tr>
        <th>NumCompte</th>
        <th>Categorie</th>
        <th>Nom</th>
        <th>Postnom</th>
        <th>Prenom</th>
        <th>NumDossier</th>
        <th>TypeCredit</th>
        <th>FrequenceRemb</th>
        <th>Montant</th>
        <th>Devise</th>
         <th>Echeance</th>
        <th>Date</th>


        
    </tr>
</thead>
<tbody>
    <?php while ($mb=$res->fetch()) {?>
        <tr>
            <td><?php echo($mb[0]) ?> </td>
            <td><?php echo($mb[1]) ?> </td>
            <td><?php echo($mb[2]) ?> </td>
            <td><?php echo($mb[3]) ?> </td>
            <td><?php echo($mb[4]) ?> </td>
            <td><?php echo($mb[5]) ?> </td>
            <td><?php echo($mb[6]) ?> </td>
            <td><?php echo($mb[7]) ?> </td>
            <td><?php echo($mb[8]) ?> </td>
            <td><?php echo($mb[9])?> </td>
            <td><?php echo($mb[10])?> </td>
            <td><?php echo($mb[11])?> </td>



            
        
        </tr>
        
<?php   } ?>
</div>
</div>
</section>
</tbody>    
</table>    
 </form>  
</body>