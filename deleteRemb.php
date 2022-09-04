
<?php
$idremb=$_GET['idremb'];
$idcompte=$_GET['idcompte'];
require("cnx.php");
$ps=$pdo->prepare("DELETE FROM rembourssement WHERE idremb=?");
$params=array($idremb);
$ps->execute($params);
if($pdo->query("UPDATE echeanciers SET statutPayement=0 WHERE idcompte='$idcompte'"))
                  	{
                  		header("location:rembourssement.php");
                  		die();
                  	}
?>