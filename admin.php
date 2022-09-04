<?php
session_start();
require("header.php");
$counter = count($_SESSION);
if ($counter > 0)
{$i = 0;
foreach($_SESSION as $key=>$valeur)
{$i++;
if($key=='admin' and $valeur==true)
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
<li><a href="AdminUtilisateur.php">Gestion</a></li>
<li><a href="logout.php">logout[<?php echo"$username";?>]</a></li>
</ul>
</nav>

           <a href="accueil.php" > 
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                administration
           </a>
   
           
           
               <center>
  <img src="images/accueil.png" alt="index" title="AKIBA YETU"  />
        </center>
           

      
    </body>
 </html>
<?php
break;
}
if($i == $counter){
    echo "<p class=\"alert alert-danger fw-bold\" role=\"alert\" style=\"width:50%; margin:auto; text-align: center;\">Aucun accès</P>";
}
}   
}
else
{
    echo "<p class=\"alert alert-danger fw-bold\" role=\"alert\" style=\"width:50%; margin:auto; text-align: center;\">Aucun accès créez un compte svp!!!</P>"; 
}
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php require("footer.php"); ?>

</body>
</html>