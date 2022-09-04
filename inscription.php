<?php
session_start();
include("infos.php");
@$valider = $_POST["inscrire"];
$erreur = "";
if (isset($valider)) {
if (empty($nom)) $erreur = "Le chanmps nom est obligatoire!";
elseif (empty($prenom)) $erreur = "Le chanmps prénom est obligatoire!";
elseif (empty($pseudo)) $erreur = "Le chanmps Pseudo est obligatoire!";
elseif (empty($email)) $erreur = "Le chanmps Email est obligatoire!";
elseif (empty($password)) $erreur = "Le chanmps mot de passe est obligatoire!";
elseif ($password != $passwordConf) $erreur = "Mots de passe differents!";
else {
include("cnx.php");
$verify_pseudo = $pdo->prepare("select id from users where pseudo=? limit 1");
$verify_pseudo->execute(array($pseudo));
$user_pseudo = $verify_pseudo->fetchAll();
if (count($user_pseudo) > 0)
$erreur = "Pseudo existe déjà!";
else {
 
  $email = $_POST['mail'];
if ($_POST['mail'] == "christellebambaolivia@gmail.com")
                   {
                    $ps=$pdo->prepare("INSERT into users(nom,prenom,pseudo,mail,password,admin) VALUES(?,?,?,?,?,?)");
                    $params=array($nom, $prenom, $pseudo,$email, md5($password),1);
                                      }
                   else
                   {
                     $ps=$pdo->prepare("INSERT INTO users(nom,prenom,pseudo,mail,password) VALUES(?,?,?,?,?)");
                    $params=array($nom, $prenom, $pseudo,$email, md5($password));
                
                   }
                   
                   if($ps->execute($params))
                   {
                    
                    $headers="Content-Type: text/plain; charset=utf-8\r\n";
                    $headers.="from:christellebambaolivia@gmail.com\r\n";
                    $message='Vous etes deja notre visiteur vous avez maintenat le droit de vous connecter sur notre site afin d\'avoir plus d\'informations';
                    mail("$email","Bienvenue",$message,$headers);

                     }
                  else 
                    {
                      echo '<script language="javascript">alert("Erreur dajout de lutilisateur");</script>';
                    
                     }


header("location:login.php");
     }
   }
}
?>
<!DOCTYPE  html>
 
<html>
<head>
<meta  charset="utf-8"  />
<link rel="stylesheet" href="style/style.css" media="screen" type="text/css" />
<link rel="stylesheet" href="style/bootstrap.min.css">
<style type="text/css">
           h1{
            text-align: center;
            font-size: 50px;
         background-color: inherit;
            color: orange;
            font-weight:bold;
            padding-top: 10px;
            height: 15%;
          }  
          form{
      
            background:currentColor;
          } 
          
        </style>
</head>
<body style="background-color: #031321; height: 100vh;
 width: 100vw; overflow: hidden; padding: 15px;">
<h1>Inscription</h1>
<div  class="erreur"><?php  echo  $erreur  ?></div>
<form  name="fo"  method="post"  action="">
<input  type="text"  name="nom"  placeholder="Nom"  value="<?=  $nom  ?>" class="form-control" /><br  />
<input  type="text"  name="prenom"  placeholder="Prénom"  value="<?=  $prenom  ?>"  class="form-control"/><br  />
<input  type="text"  name="pseudo"  placeholder="Votre Pseudo"  value="<?=  $pseudo  ?>" class="form-control" /><br  />
<input  type="mail"  name="mail"  placeholder="Adresse mail"  value="<?=  $email  ?>" class="form-control" /><br  />
<input  type="password"  name="password"  placeholder="Mot de passe" class="form-control" /><br  />
<input  type="password"  name="passconf"  placeholder="Confirmer votre Mot de passe" class="form-control"  /><br  />
<input  type="submit"  name="inscrire"  value="S'inscrire" class="btn btn-success" />
<div class="bouton">
<a href="login.php" style="color: red; background-color: black; margin-top: 30px" class="btn btn-info btn btn-lg">Deja un compte</a>
                
</div>
</form>
</body>
</html>