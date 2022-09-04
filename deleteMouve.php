
<?php
$id=$_GET['idmouve'];
require("cnx.php");
$ps=$pdo->prepare("DELETE FROM mouvement WHERE idmouve=?");
$params=array($id);
$ps->execute($params);
header("location:mouvement.php");
?>