<?php
	// fichier de connexion//
	require('includes/connexion.inc.php');
	require('includes/header.inc.php');
	if (identification_cookie()==true){
	//Declaration de variable pour la requette sql//
		$titre=$_POST["titre"];
		$corps=$_POST["corps"];
	//Fin de declaration//
	//Requette SQL insertion dans la base//
		$req="UPDATE articles SET titre ='".$_POST["titre"]."' ,corps = '".$_POST["corps"]."' WHERE articles.id =".$_POST["id"].";";
		mysql_query($req);
				if (!empty($_POST['datafile']))
				{
					$serveur_image = $_FILES['datafile']['error'];
				}else{
						$serveur_image ="";
					}	
		$id=$_POST["id"];
		move_uploaded_file($_FILES['datafile']['tmp_name'], dirname(__FILE__) ."../img/$id.jpg");
		header("location:index.php");
	}else{
			echo "Accès Interdit !";
		}
?>