
<?php 
if(isset($_POST['recherche'])){
    $idcompte=$_POST['idcompte'];
require("cnx.php");
$req=("SELECT * FROM rembourssement WHERE idcompte='$idcompte'");
$res=$pdo->prepare($req);
$res->execute();
echo"<div class=\"col-md-12 col-xs-12\">";

echo"<table class=\"table table-sm table-dark\">";
    echo'<tr>';
        echo'
        <th>Id</th>
        <th>NumCompte</th>
        <th>NumCredit</th>
        <th>Capital</th>
        <th>Interet</th>
        <th>Cap/Ammortie</th>
        <th>DateTranche</th>
        ';
        
    echo'</tr>';

    while ($mb=$res->fetch()) {
        echo'<tr>
            <td>'.$mb[0].'</td>
            <td>'.$mb[1].'</td>
            <td>'.$mb[2].'</td>
            <td>'.$mb[3].'</td>
            <td>'.$mb[4].'</td>
            <td>'.$mb[5].'</td>
            <td>'.$mb[6].'</td>


            ';
            echo'</tr>';
        }   
echo'</table>';
echo'</div>';
}

 ?>
