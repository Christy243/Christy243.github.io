<?php
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" type="text/css" href="style/idx.css">
        <title>Akiba yetu</title>
        <style type="text/css">
        .wrapper{
            font-family: sans-serif;
            width: 80%;
            margin:0 auto;
            position: relative;
        }
img{
    opacity: 1;
    display: block;
    width: 63%;
    height: auto;
    transition: .5s ease;

}
.content{
    position: absolute;
    top: 45%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%,-50%);
    text-transform: uppercase;
    font-size: 60px;
    color: #fff;
    white-space: nowrap;
    overflow: hidden;
}
.content a{
    font-size: 24px;
    display: block;
    background-color: #ff771d;
    text-align: center;
    padding: 10px;
    cursor: pointer;
}
.overlay{
    opacity: 0; 
}
.wrapper:hover img{
    opacity: .5 
}
.wrapper:hover .overlay{
    opacity: 1;
}
h4{
    color: cadetblue;
    font-weight: bold;
    text-align: center;
}
p{
    text-align: center;
    font-size: 20px;
    color: navajowhite;
}

    </style>
</head>
    <body>
        <div>
<p style="color:white; font-size: 50PX;">COOPERETIVE D'EPARGNE ET DE CREDIT AKIBA YETU</p>
</div>
        <div>        
           <a href="login.php" > 
                <span></span>
                <span></span>
                <span></span>
                <span></span>
               se connecter
           </a>
             <a href="inscription.php" style="float: right;"> 
                <span></span>
                <span></span>
                <span></span>
                <span></span>
               s'inscrire
           </a>
       </div>
           <div>
            <div class="wrapper">
        <center>
  <img src="images/aki.jpg" alt="index" title="AKIBA YETU" width="100%" sizes="50%" />
        </center>
<div class="overlay">
<div class="content">
 <a href="Auth.php"><button type="button" class="btn btn-warning" style="font-size:30px; font-weight: bold;">AUTHENTIFICATION</button></a>
    <a href="utilisateur.php"><button type="button" class="btn btn-warning" style="font-size:30px; font-weight: bold;">INSCRIPTION</button></a>
</div>
           </div>

  <?php require("footer.php") ?>    
    </body>
 </html>