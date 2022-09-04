	
<?php
session_start();
if($_SESSION['username']!=="")
{
	$username=$_SESSION['username'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style type="text/css">
    p{
        text-align: justify;
        color: darkgray;
        font-size: 32px;
    }
    body{
    background-color: #262626;
}
nav{
    background-color: #2f948d;
}
nav ul{
    padding: 10px;
    display: flex;
    justify-content: center;
    list-style: none;
}
nav li{
    padding: 4px 20px;
}
nav li a{
    text-decoration: none;
    font-size: 18px;
    color: #fff; 
    font-family:Audiowide;
}
nav ul li:hover{
    background-color: #15d56;
    transition: 0.9s;
}
@media only screen and (max-width: 767px){
    nav ul{
        height: 230px;
        flex-direction: column;
        text-align: center;
    }
</style>

<body>
	<nav>
    <ul>
<li><a href="Historique.php">Historique</a></li>
<li><a href="Apropos.php">Apropos</a></li>
<li><a href="saisieMembre.php">Adhesion</a></li>
<li><a href="logout.php">logout[<?php echo"$username";?>]</a></li>
</ul>
</nav>
<div style="background-color:#031321;">
		 <p style="text-align:center; font-weight:bold; font-size:50px; color:darkkhaki;">Le service crédit </p>
		 	<center>
<img src="images/cred.png" width="80%" height="40%">
			</center><br><br><br>
<p>

la procédure d’octroi de crédit commence par l’ouverture du compte. On 
distingue quatre catégories de compte : </p>
<p> Le compte de 5$, un membre qui a ouvert un compte de 5$ est éligible 
au crédit de 50 à 300 $ remboursable dans 6 mois avec les intérêts.</p>
<p> Le compte de 10 $, un membre qui a ouvert ce compte est éligible au 
crédit qui se trouve dans l’intervalle de 50 à 10000 $ et remboursable 
dans neuf mois.</p> 
<p> Le compte de 20$, un membre qui a ouvert ce compte est éligible au 
crédit ne dépassant pas 20000$, avec échéance une année.</p> 
<p> Le compte de 50$, Le montant de crédit à accorder pour ce compte 
d’ordre de 80000 $ avec une échéance de 24 mois.</p> 
<p>Il faut préciser que tous ces comptes fonctionnent de la même manière en 
termes d’épargne. La différence réside au montant de crédit que peu acquérir 
un membre et le délai de remboursement du crédit en question. <a href="visiteur.php">Clique ici</a></p>  

	</p>
</div>
</body>
</html>