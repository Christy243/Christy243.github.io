
<?php
$id=$_GET['NumDossier'];
require("cnx.php");
$ps=$pdo->prepare("DELETE FROM credit WHERE NumDossier=?");
$params=array($id);
$ps->execute($params);
header("location:credit.php");

?>