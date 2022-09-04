
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style/style.css" media="screen" type="text/css" />
        <link rel="stylesheet" href="style/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style type="text/css">
        	p{
        		color: white;
        		text-align: center;
        		font-weight:bold;
        	}
            body{
    margin: 0;
    padding: 0;
    background: #313131;
}
.slider{
    width:100%;
    height: 800px;
    background: url(images/cred.png);
    margin: 100px auto;
    animation: slide 20s infinite;
}
@keyframes slide{
    25%{
            background: url(images/operation.png);

    }
    50%{
            background: url(images/rembou.png);

    }
    75%{
            background: url(images/compt.png);

    }
    100%{
            background: url(images/remb.png);

    }
}

</style>
</head>
<body style="background-color:#031321;">
<div class="container" style="background-color:navy; color: black;">
<P style="font-weight: bold; text-align: center; font-size: 50px; color:khaki;">GESTION DES CREDITS</P>
<div class="row">
<div class="col-xs-12 col-ms-5  col-lg-4 " align="center" style="background-color: darkred;">
<br>
<div class="bouton">
 <a href="logout.php"  style="color: darkred; background-color: black;font-size: 50px; font-weight:bold;"  a class="btn btn-info btn btn-lg">Deconnexion</a> </div>          
</div>
<div class="col-xs-6 col-ms-5 col-lg-4" align="center" style="background-color: darkgreen;">
<br>

<div class="bouton">
 <a href="Auth.php" style="color: darkgreen; background-color: black;font-size: 50px; font-weight:bold;" class="btn btn-info btn btn-lg">Connexion</a> </div>             
</div>
<div class="hidden-xs col-ms-2 col-md-2 col-lg-4" align="center" style="background-color: darkorange; ">
<br>
	<div class="bouton">
 <a href="operations.php" style="color:darkorange; background-color: black;font-size: 50px; font-weight: bold;" class="btn btn-info btn btn-lg">Operations</a> </div>          
</div>
<div class="container-fluid cont"style="background-color: brown;"><br>
<P style="font-weight: bold; font-size:30px;">COOPERATIVE D'EPARGNE ET DE CREDIT <b style="color: darkseagreen;">AKIBA YETU</b></P>
<div class="slider"></div>
<div class="clearfix" style="clear: both;"></div>
</div>
</div>
</div>
   <?php require("footer.php");?>

</body>
</html>