<link rel="stylesheet" type="text/css" href="style/idx.css">
<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
<body style="background-color:darkgray;">
    <div style="background-color:darkgray; width: 70%; margin:auto;"> 
<br><br><br>
<a href="admin.php" style="color:darkblue; font-weight:bold;"> 
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                administration
           </a>

<p style="text-align:center; font-weight:bold; font-size:30PX; color: darkblue;">AJOUTER AUX ADMIN</p> 

<?php 
require("cnx.php");

    foreach($pdo->query('SELECT * FROM users WHERE admin=0')as $ligne)

                   {
                   	echo "<div class=\"text-center fw-bold\">
                   	<form action=\"AdminUtilisateur.php\" method=\"POST\" class=\"mb-4 bg-success text-light mt-2\" style=\"width: 40%; margin:auto; border-radius:6px;\"><p><label>$ligne[1]</label></p>
                   			<p><input style=\"read-only=true; display: none;\" type='text' name='id' value=$ligne[0]></p>
                   			<input type='submit' name='admin' value='Ajouter aux admin' style=\"font-size:20px;\" class=\"btn btn-primary\" />
                   	</form></div>";
                   }
                  if (isset($_POST['admin']))
                  {
                  	$id = $_POST['id']; 
                  	if($pdo->query("UPDATE users SET admin=1 WHERE id=$id"))
                  	{
                  		header('Location:AdminUtilisateur.php');
                  		die();
                  	}

                  }

?>
        <p style="text-align:center; font-weight:bold; font-size:30PX; color:darkred;">RETIRER AUX ADMIN</p> 
                <?php 
    require("cnx.php");

    foreach($pdo->query('SELECT * FROM users WHERE admin=1')as $ligne)
                   {
                    echo "<div class=\"text-center fw-bold\">
                    <form action=\"AdminUtilisateur.php\" method=\"POST\" class=\"mb-4 bg-success text-light mt-2\" style=\"width: 40%; margin:auto; border-radius:6px;\"><p><label>$ligne[1]</label></p>
                            <p><input style=\"read-only=true; display: none;\" type='text' name='id' value=$ligne[0]></p>
                            <input type='submit' name='retadmin' value='Retirer aux admin' style=\"font-size:20px;\" class=\"btn btn-danger \" />
                    </form></div>";
                   }
                  if (isset($_POST['retadmin']))
                  {
                    $id = $_POST['id']; 
                    if($pdo->query("UPDATE users SET admin=0 WHERE id=$id"))
                    {
                        header('Location:AdminUtilisateur.php');
                        die();
                    }

                  }


?>
</div>
<?php 
require("footer.php");
?>
</body>
</html>