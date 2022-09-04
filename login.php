<?php
session_start();
include("infos.php");
@$valider = $_POST["valider"];
$erreur = "";
if (isset($valider)) {
include("cnx.php");
$verify = $pdo->prepare("select * from users where pseudo=? and password=? limit 1");
$verify->execute(array($pseudo, $pass_crypt));
while($ligne = $verify->fetch())
{
if($count=$verify->rowCount())
{
if($ligne[7] == 1)
{
$_SESSION['username'] = $ligne[1];
$_SESSION['admin'] = true;
$_SESSION['visiteur'] = true;
$_SESSION["connecter"] = "yes";
header("location:session.php");
}else
if($ligne[7]==0){
$_SESSION['username'] = $ligne[1];
$_SESSION['mail']=$ligne[4];
$_SESSION['visiteur'] = true;
$_SESSION['admin']=false;
$_SESSION["connecter"] = "yes";
header("location:sessionVisit.php");
}else
$erreur = "Mauvais login ou mot de passe!";

}
}
}

?>
 
<!DOCTYPE  html>
<html>
<head>
<meta  charset="utf-8"  />
<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style/style.css">
<style>

.erreur {
text-align: center;
color: red;
margin-top: 10px;
}
 
h1{
            text-align: center;
            font-size: 50px;
         background-color:inherit;
            color: orange;
            font-weight:bold;
            padding-top: 10px;
            height: 15%;
          }  
          form{
      
            background: currentColor;
          }
</style>
</head>
<body  onLoad="document.fo.login.focus()" style="background-color: #031321; height: 100vh;
 width: 100vw; overflow: hidden; padding: 15px;">
<h1>Authentification</h1>
<div  class="erreur"><?php  echo  $erreur  ?></div>
<form  name="form"  method="post"  action="">
<input  type="text"  name="pseudo"  placeholder="Votre Pseudo"  /><br  />
<input  type="password"  name="password"  placeholder="Mot de passe"  /><br  />
<input  type="submit"  name="valider"  value="S'authentifier"  />
<a href="inscription.php" style="color: red; background-color: black; margin-top: 30px" class="btn btn-info btn btn-lg">Créer votre Compte</a>
</form>
</body>
</html>