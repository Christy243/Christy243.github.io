

<?php session_start(); ?>
 <?php
                
                if($_SESSION['username'] !== ""){
                    $username = $_SESSION['username'];
                    }
            ?>
<?php require("header.php"); ?>

<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style/style.css">
<style type="text/css">
	*{
	margin: 0;
	padding: 0;
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
	padding: 2px 20px;
}
nav li a{
	text-decoration: none;
	font-size: 30px;
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
}

</style>
<div  style="background: #031321;">
<table class= "table table-dark">
						<th>
<h1 align="center" style="font-size: 30px";>COOPERATIVE D'EPARGNE ET DE CREDIT <b style="color: lightblue";><br>AKIBA YETU</b></h1>  
						</th>

					</table >
<nav>
	<ul>
<li><a href="accueil.php">Acceuil</a></li>
<li><a href="listeMembres.php">ListeMembres</a></li>		
<li><a href="SituationCredit.php">SituationCredit</a></li>
<li><a href="echeancier.php">Echeanciers</a></li>
<li><a href="ficheRemb.php">Fiche du rembourssement</a></li>
<li><a href="logout.php">Deconnexion [<?php echo"$username";?>]</a></li>
</ul>
</nav>


</div>