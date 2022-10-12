<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Formulaire </title>
	<font color="Black" size="5" face="script">
    <link rel="stylesheet" type="text/css" href="stylesheets/Home.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    
    <!--Script-->
    <script src="js/scripts.js"></script>
</head>
<body>
    <header>
        <ul>
            <div id="logobox">
                <li><img src="image/logo2.jpeg" alt="" width="400px"></li>
            </div><br><br><br>
        </ul>
    </header>
    <body>
    <center style="float: left;margin-left: -100px;">
        <fieldset>
        <FONT color="green" face=" Courier" size="3">
        <h1>Formulaire d'inscription : </h1>
        </font>
        <FONT face="Comic Sans Ms">
        <form Name="f" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
        <label>Nom : </label><input type="text" Name="nom" maxlength="20" required />
        <br/>
        <label>Prénom : </label><input type="text" Name="prenom" required />
        <br/>
        Date de naissance : <input type="date" name="date"/><br/>
        E-mail : <input type="email" name="mail" required placeholder="Nom.prenom@gmail.com"><br/>
        Mot de passe : <input type="password" name="passe"><br/>
        Sexe : <input type="radio" name="sexe" >Homme
            <input type="radio" name="sexe" >Femme
        <br/><br>
        <input type="submit" value="S'inscrire" id="inscrire">
        <input type="reset" name="Effacer" id="inscrire">
        <div class="follow" style=" margin-top: -70px;">
            <li><h3>Follow us</h3></li>
            <li><div class="social">
                    <img src="image/fbpng.png">
                    <img src="image/twitterpng.png">
                    <img src="image/intpng.png">
                    <img src="image/youtpng.png">
                    <img src="image/intpng.png">
                </div>
            </li>
        </div>
        </fieldset>
    </center>
    <?php
    if(isset($_GET['nom'])){
        $nom=$_GET['nom'];
        $prenom=$_GET['prenom'];
        $date=$_GET['date'];
        $mail=$_GET['mail'];
        $passe=$_GET['passe'];
        $sexe=$_GET['sexe'];
    include("connexion.php");

	if($nom!=null && $prenom!=null && $date!=null && $mail!=null && $passe!=null)
	{
		$nb=$conn->exec("insert into clients values ('$nom', '$prenom','$date','$mail','$passe','$sexe')");
		 if ($nb>0){ echo '<script>alert("client ajouté avec succès")</script>';}
		
		//$Cl=new client($nom,$prenom,$date,$mail,$passe,$sexe);
		//$nb=client::ajouterClient($Cl);
	}
	
    }
        
	?>
</body>
</html>