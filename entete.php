
<?php session_start(); ?>
 <?php
                
                if($_SESSION['username'] !== ""){
                    $username = $_SESSION['username'];
                    }
            ?>
<link rel="stylesheet" type="text/css" media="screen" href="style/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="style/style.css">
<style type="text/css">
*{
	margin: 0;
	padding: 0;
}
body{
	background-color: #262626;
}
nav{
	background-color: darkred;
}
nav ul{
	padding: 10px;
	display: flex;
	justify-content: center;
	list-style: none;
}
nav li{
	padding: 1px 20px;
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
}
</style>
<body>
<div  style="background: #031321;">
<table class= "table table-dark">
						<th>
<h1 align="center" style="font-size: 30px";>COOPERATIVE D'EPARGNE ET DE CREDIT <b style="color: lightblue";><br>AKIBA YETU</b></h1>  
						</th>

					</table >
<nav>
	<ul>
<li><a href="accueil.php">ACCUEIL</a></li>
<li><a href="membre.php">ADHESION</a></li>
<li><a href="SaisieMouvement.php">OPERATIONS</a></li>
<li><a href="saisieCredit.php">EMPRUNT</a></li>
<li><a href="echeancier.php">REMBOURSSEMENT</a></li>
<li><a href="solicit.php">SOLICITATIONS</a></li>
<li><a href="etats.php">ETATS</a></li>
<li><a href="logout.php">DECONNEXION[<?php echo"$username";?>]</a></li>
</ul>
</nav>


</div>

</body>
 