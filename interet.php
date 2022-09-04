<?php
require("cnx.php");
    $req=("SELECT (montantAcorde*interet/ 100) as Interet FROM SitCred");
    $res =$pdo->prepare($req);
    $res->execute();
    while ($donnees = $res->fetch())
    {
    ?>
    <?php
    echo "<div style=\"color: black; font-weight:bold;\">";
    echo "<p> interet: " . $donnees['Interet'] . "</p>";
    echo "</div>";
    ?>
    <?php
    }
    ?>
