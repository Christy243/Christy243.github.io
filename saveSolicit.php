
									<?php
									if(session_status()==PHP_SESSION_NONE){
									session_start();

									if($_SESSION['mail'] !== "")
									{
									$email= $_SESSION['mail'];
									}
									}
									require("cnx.php");
									$idC=$_POST['Idcompte'];
									$categorieC=$_POST['categorieC'];
									$typeCred=$_POST['typecredit'];
									$freq=$_POST['frequence'];
									$motAc=$_POST['MontantAccorde'];
									$taux=$_POST['TauxInteret'];
									$mot=$_POST['Motif'];
									$dev=$_POST['Devise'];
									$echea=$_POST['Echeance'];
									$duree=$_POST['dureeJ'];
									$date=$_POST['DateCred'];
									$dateTombee=$_POST['dateTombee'];

									//GENERE UN NUMERO UN MEMBRE
									$ps=$pdo->prepare("INSERT INTO compteur_idsol(fakeId) VALUES(?)");
									$params=array("0000");
									$ps->execute($params);

									$LastIdCredit=$pdo->prepare("SELECT * FROM compteur_idsol ORDER BY id DESC LIMIT 1");
									$LastIdCredit->execute();
									$result=$LastIdCredit->fetch(PDO::FETCH_OBJ);
									$NumSol="SOL000".$result->id;
$ps=$pdo->prepare("INSERT INTO solicitation(idSolicit,idcompte,categorieC,typecred,frequenceRemb,montantAcorde,interet,motif,devise,echeance,dureeJour,dateCred,dateTombee) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");
$params=array($NumSol,$idC,$categorieC,$typeCred,$freq,$motAc,$taux,$mot,$dev,$echea,$duree,$date,$dateTombee);
									//$ps->execute($params);
$res=$pdo->query("SELECT sum(montant) as Solde FROM mouvement WHERE idcompte='$idC'");
													while($solde=$res->fetch())
													{
													if($solde['Solde']>=1)
													{
													if($categorieC=="A")
													{
													if($dev=="USD")
													{
													if($motAc<=300)

													if($taux=="2,5")
													{	
													if($echea=="6")
													{
													if($duree=="180")
													{
													if($ps->execute($params))
													{
									$headers="Content-Type: text/plain; charset=utf-8\r\n";
									$headers.="from:christellebambaolivia@gmail.com\r\n";
									$message='Salut, Nous accusons bonne reception de votre demande';
									mail("$email","Bienvenue",$message,$headers);	
									header("location:saisieSolicit.php");
									die();
														}
														}
														}
														}
														}
														}
														}
														}

$res=$pdo->query("SELECT sum(montant) as Solde FROM mouvement WHERE idcompte='$idC'");
									while($solde=$res->fetch())
									{
									if($solde['Solde']>=1)
									{
									if ($categorieC=="B") 
									{
										if($dev=="USD")
										{
										if($motAc<=10000)
										{
										if($taux=="2,5")
										{	
										if($echea=="9")
										{
										if($duree=="270")
										{
											if($ps->execute($params))
											{
									$headers="Content-Type: text/plain; charset=utf-8\r\n";
									$headers.="from:christellebambaolivia@gmail.com\r\n";
									$message='Salut, Nous accusons bonne reception de votre demande';
									mail("$email","Bienvenue",$message,$headers);
									header("location:saisieSolicit.php");
									die();
									}
									}
									}
									}
									}
									}
									}
									}
									}
$res=$pdo->query("SELECT sum(montant) as Solde FROM mouvement WHERE idcompte='$idC'");
									while($solde=$res->fetch())
									{
									if($solde['Solde']>=1)
									{
									if ($categorieC=="C") 
									{
										if($dev=="USD")
										{
										if($motAc<=20000)
										{
										if($taux=="2,5")
										{
										if($echea=="12")
										{
										if($duree=="365")
										{
											if($ps->execute($params))
											{
									$headers="Content-Type: text/plain; charset=utf-8\r\n";
									$headers.="from:christellebambaolivia@gmail.com\r\n";
									$message='Salut, Nous accusons bonne reception de votre demande';
									mail("$email","Bienvenue",$message,$headers);
									header("location:saisieSolicit.php");
									die();
									}
									}
									}
									}
									}
									}
									}
									}
									}
$res=$pdo->query("SELECT sum(montant) as Solde FROM mouvement WHERE idcompte='$idC'");
									while($solde=$res->fetch())
									{
									if($solde['Solde']>=1)
									{
									if ($categorieC=="D") 
									{
										if($dev=="USD")
										{
										if($motAc<=80000)
										{
										if($taux=="3")
										{
										if($echea=="24")
										{
										if($duree=="730")
										{
											if($ps->execute($params))
											{
									$headers="Content-Type: text/plain; charset=utf-8\r\n";
									$headers.="from:christellebambaolivia@gmail.com\r\n";
									$message='Salut, Nous accusons bonne reception de votre demande';
									mail("$email","Bienvenue",$message,$headers);	
									header("location:saisieSolicit.php");
									die();
									}
									}
									}
									}
									}
									}
									}
									}
								}
$res=$pdo->query("SELECT sum(montant) as Solde FROM mouvement WHERE idcompte='$idC'");
									while($solde=$res->fetch())
									{
									if($solde['Solde']>=1)
									{
									if($categorieC=="A")
									{
									if($dev=="CDF")
									{
									if($motAc<=600000)
									{
									if($taux=="2,5")
									{
									if($echea=="6")
									{
									if($duree=="180")
									{
									if($ps->execute($params))
									{
									$headers="Content-Type: text/plain; charset=utf-8\r\n";
									$headers.="from:christellebambaolivia@gmail.com\r\n";
									$message='Salut, Nous accusons bonne reception de votre demande';
									mail("$email","Bienvenue",$message,$headers);	
									header("location:saisieSolicit.php");
									die();
									}
									}
									}
									}
									}
									}
									}
									}
									}
$res=$pdo->query("SELECT sum(montant) as Solde FROM mouvement WHERE idcompte='$idC'");
									while($solde=$res->fetch())
									{
									if($solde['Solde']>=1)
									{
									if ($categorieC=="B") 
									{
										if($dev=="CDF")
										{
										if($motAc<=20000000)
										{
										if($taux=="2,5")
										{
										if($echea=="9")
										{
										if($duree=="270")
										{
											if($ps->execute($params))
											{
									$headers="Content-Type: text/plain; charset=utf-8\r\n";
									$headers.="from:christellebambaolivia@gmail.com\r\n";
									$message='Salut, Nous accusons bonne reception de votre demande';
									mail("$email","Bienvenue",$message,$headers);	
									header("location:saisieSolicit.php");
									die();
									}
									}
									}
									}
									}
									}
									}
									}
									}
									$res=$pdo->query("SELECT sum(montant) as Solde FROM mouvement WHERE idcompte='$idC'");
									while($solde=$res->fetch())
									{
									if($solde['Solde']>=1)
									{
									if ($categorieC=="C") 
									{
										if($dev=="CDF")
									{
										if($motAc<=40000000)
									{
										if($taux=="2,5")
									{
										if($echea=="12")
									{
										if($duree=="365")
										{
											if($ps->execute($params))
											{
									$headers="Content-Type: text/plain; charset=utf-8\r\n";
									$headers.="from:christellebambaolivia@gmail.com\r\n";
									$message='Salut, Nous accusons bonne reception de votre demande';
									mail("$email","Bienvenue",$message,$headers);
									header("location:saisieSolicit.php");
									die();
											}
										}
									}
									}
									}
									}
								}
							}
$res=$pdo->query("SELECT sum(montant) as Solde FROM mouvement WHERE idcompte='$idC'");
									while($solde=$res->fetch())
									{
									if($solde['Solde']>=1)
									{
									if ($categorieC=="D") 
									{
										if($dev=="CDF")
										{
										if($motAc<=160000000)
										{
										if($taux=="3")
										{
										if($echea=="24")
										{
										if($duree=="730")
										{
										if($ps->execute($params))
										{
									$headers="Content-Type: text/plain; charset=utf-8\r\n";
									$headers.="from:christellebambaolivia@gmail.com\r\n";
									$message='Salut, Nous accusons bonne reception de votre demande';
									mail("$email","Bienvenue",$message,$headers);
									header("location:saisieSolicit.php");
									die();
									}
									}
									}
									}
									}
									}
									}
									}
									}
									}
									?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
<title></title>
</head>
<body style="background-color:lightblue;">
<br><br><br><br><br><br><br><br><br><br><br>
<p style="text-align:center; font-size:50px;color:red;">Erreur</p>
<div class="container">
<div class="alert-danger text-center fw-bold" role = "alert" style=" font-size:20px;">vérifiez les données saisies, soit:</br>-le montant ne correspond à la categorie du compte<br>-l'écheance ne correspond à la catégorie du compte</br>- les nombres des jours ne correspondent pas à l'écheance</br>-Vous n'avez pas encore éfuctué aucun mouvent sur votre compte</br>-Le taux d'interet ne correspont pas à l'échéance</div>
</div>

</body>
</html>


