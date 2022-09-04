
<?php 

if(isset($_POST['recherche'])){
    $idcompte=$_POST['idcompte'];
require("cnx.php");
$req=("SELECT * FROM fichechea WHERE idcompte='$idcompte'");
$res=$pdo->prepare($req);
$res->execute();
       
foreach($pdo->query("SELECT SUM(CapAmmorti)FROM fichechea WHERE idcompte='$idcompte'") as $cap) 
echo "<div style=\"color: white; text-align:center; font-weight:bold; font-size:20px; \">";
echo "<p> Capital: " .number_format($cap['SUM(CapAmmorti)'],0,',','.')."</p>";
echo "</div>"; 


echo"<div class=\"col-md-12 col-xs-12\">";

echo"<table class=\"table table-sm table-dark\">";
    echo'<tr>';
        echo'
        <th>Compte</th>
        <th>NumDossier</th>
        <th>NbrJours</th>
        <th>Capital</th>
        <th>Interet</th>
        <th>Cap/Ammortie</th>
        <th>Total</th>
        <th>Cumul</th>
        <th>DateTranche</th>
        ';
        
    echo'</tr>';

    while ($mb=$res->fetch()) {
        echo'<tr>
             <td>'.$mb[0].'</td>
            <td>'.$mb[5].'</td>
            <td>'.$mb[7].'</td>
            <td>'.number_format($mb[8],0,',','.').'</td>
            <td>'.number_format($mb[9],0,',','.').'</td>
            <td>'.number_format($mb[10],0,',','.').'</td>
            <td>'.number_format($mb[11],0,',','.').'</td>
            <td>'.number_format($mb[12],0,',','.').'</td>
            <td>'.$mb[13].'</td>';
            echo'</tr>';         
        } 
          
echo'</table>';
echo'</div>';
}
if(isset($_POST['recherche'])){
$idcompte=$_POST['idcompte'];       
foreach($pdo->query("SELECT SUM(TotalAp)FROM fichechea WHERE idcompte='$idcompte'") as $row)
echo "<div style=\"color: white; text-align:center; font-weight:bold; font-size:20px; \">";
echo "<p> Total à payer: " .number_format($row['SUM(TotalAp)'],0,',','.')."</p>";
echo "</div>"; 

}

 ?>
