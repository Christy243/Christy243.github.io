
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
    <link rel="stylesheet" type="text/css" href="style/bootstrap.css">
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
</style>
<nav>
    <ul>
<li><a href="Historique.php">Historique</a></li>
<li><a href="Apropos.php">Apropos</a></li>
<li><a href="saisieMembre.php">Adhesion</a></li>
<li><a href="logout.php">logout[<?php echo"$username";?>]</a></li>
</ul>
</nav>
<body>

    <div style="background-color:#031321; width:100%;" class="container">
        <p style="text-align:center; font-weight:bold; font-size:50px; color:darkkhaki;"> Historique
<p >
 
La coopérative d’épargne et de crédit AKIBA YETU est une coopérative privée,elle est le fruit d’apport de 52 membres au départ et après 46 personnes sont venues pour l’accomplissement de cette véritable idée de 
créativité et pour l’épanouissement collectif dans un destin commun.</p>

<p>Outre les activités économiques,la coopérative d’épargne et de crédit s’était 
assignée un objectif social qui est celui de promouvoir le bien-être social par 
la mesure de ne pas vouloir trop gagner en pénalisant la société congolaise 
mais plutôt de bénéficier un peu, tout en gardant normal l’épargne et l’offre ou 
l’octroi de crédit pour une participation effective au processus du 
développement de notre patrie.</p> 
<p> toute coopérative et à travers ses membres effectifs, la coopérative 
d’épargne et de crédit « AKIBA YETU » S’était assignée une mission en deux 
voies qui sont :</p> 
<p>1. Une épargne de fonds en toute sécurité de ses membres effectifs et 
adhérents,</p> 
<p>2. Un crédit à la société adhérant dans le cadre de la lutte contre la pauvreté 
afin de promouvoir la situation socio-économique de la population congolaise. 
La coopérative d’épargne et de crédit AKIBA YETU a été créée le 
26 avril 2007 en obtenant ses statuts et règlements d’ordre intérieurs notariés 
sous le numéro 229/028/012/2007, par l’office national de la ville de Goma en 
5 date du 28 décembre 2007.</p>
<p>Le 02 mai 2008 est aussi une date mémorable au sein de la coopérative 
d’épargne et de crédit AKIBA YETU comme date d’ouverture de postes à ses 
membres et le lancement d’activité d’épargne et de crédit.</p>
<p> La poursuite des 
démarches auprès de la Banque Centrale Du Congo (BCC) pour l’obtention 
du numéro d’agrément pour une réelle assurance ainsi que la mise au point 
des démarches pour l’ouverture de guichets dans de différents endroits de la 
ville pouvant garantir à ses membres un déplacement moins important en 
distance.<a href="visiteur.php">Cliquez ici</a></p>
<div style="background-color:#031321;">

<p style="text-align:center; font-weight:bold; font-size:50px; color:darkkhaki;">Localisation</p>
   
        <center>
<img src="images/aki.jpg">
        </center>
        <p>       
La COOPEC AKIBA YETU AKIBA YETU a son siège en RDC, dans la 
province du nord Kivu, en ville de Goma, située dans la commune de Goma, 
quartier les volcans, avenue BUTEMBO1, Nº23, derrière CNSS et ECOBANK. 
 <a href="visiteur.php">Cliquez ici</a>
 
</p>
</div>
</p>
</p>
</div>

</body>
</html>