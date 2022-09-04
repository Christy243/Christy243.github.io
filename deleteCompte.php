
<?php
$idcompte=$_GET['idcompte'];
require("cnx.php");
$ps=$pdo->prepare("DELETE FROM compte WHERE idcompte=?");
$params=array($idcompte);
$ps->execute($params);
header("location:compte.php");
?>