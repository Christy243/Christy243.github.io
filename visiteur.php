<?php
session_start();
require("header.php");
$counter = count($_SESSION);
if ($counter > 0)
{
for($i=0; $i<$counter; $i++)
{
if($_SESSION['visiteur'])
{
    if($_SESSION['username'] !== ""){
                    $username = $_SESSION['username'];
                    }
?>
<link rel="stylesheet" type="text/css" href="style/idx.css">
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
<br>
        <a href="moncompte.php"  > 
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                mon compte
           </a>
        <div>
            
               <center>
  <img src="images/accueil.png" alt="index" title="AKIBA YETU"  />
        </center>
    </div>
 <?php
break;
}
if($i == $counter-1)
{
    echo "<p class=\"alert alert-danger fw-bold\" role=\"alert\" style=\"width:50%; margin:auto; text-align: center;\"> Aucun accès</P>";
}
}   
}
else
{
    echo "<p class=\"alert alert-danger fw-bold\" role=\"alert\" style=\"width:50%; margin:auto; text-align: center;\">créez un compte svp!!!</P>"; 
}
?>
<?php require("footer.php"); ?>

</body>
</html>