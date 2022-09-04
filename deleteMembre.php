
<?php
$idmembre=$_GET['idmembre'];
require("cnx.php");
$ps=$pdo->prepare("DELETE FROM membre WHERE idmembre=?");
$params=array($idmembre);
$ps->execute($params);
header("location:membre.php");
?>