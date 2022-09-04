<?php

try {
$cnx='mysql:host=localhost;dbname=gestioncredit';
$pdo=new pdo($cnx,'root','');
	
} catch (Exception $e) {
$msg='Erreur pdo'.$e->getmessages();
die($msg);	
}
// $pdo = new PDO('mysql:host=localhost;dbname=gestioncredit;charset=utf8','root', '');
// $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
// $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
?>
