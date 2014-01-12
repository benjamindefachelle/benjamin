<?php
	//inclue le fichier de connexion//
	require('includes/connexion.inc.php');
	include('includes/header.inc.php');
	echo '<div class="span8">';
	if (isset($_POST["email"]) && isset($_POST["mdp"])){
		$email=$_POST["email"];
		$mdp=$_POST["mdp"];
		$erreurco="Login ou Mot de passe incorrect";
		$co_bonne="Authentification réussie";
		$sql="SELECT mail , mdp FROM utilisateur WHERE mail = '$email' and mdp = '$mdp'";
		$execute = mysql_query($sql);
		if ($exe = mysql_fetch_array($execute))
			{
				$sid=sha1($execute['email'].time());
				$update = "UPDATE utilisateur SET sid ='$sid' WHERE mail = '$email';";
				mysql_query($update);
				echo $co_bonne;
				setcookie('sid',$sid,time()+60*60);
				header('Refresh: 1; url=index.php');
			}else{
				echo ($erreurco);
				header('Refresh: 1; url=co.php');
			}
		}
	include ('includes/footer.inc.php');
?>