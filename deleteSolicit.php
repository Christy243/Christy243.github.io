
<?php
$id=$_GET['idSolicit'];
require("cnx.php");
$ps=$pdo->prepare("DELETE FROM solicitation WHERE idSolicit=?");
$params=array($id);
$ps->execute($params);
header("location:solicit.php");

?>