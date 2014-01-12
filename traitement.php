<?php
	//fichier de connexion//
	require('includes/connexion.inc.php');
	//fin del'inclusion//
	if(isset($_POST["titre"]) && isset($_POST["texte"]) && isset($_POST["option"])) {
	//Declaration de variable pour la requette sql//
		$titre=$_POST["titre"];
		$corps=$_POST["texte"];
		$option=$_POST["option"];
		$date = date("Y-m-d");
	///Requette SQL insertion dans la base//
		$sql="INSERT INTO articles (titre,corps,date,statut) VALUES ('$titre','$corps','$date','$option');";
		mysql_query($sql);
			if (!empty($_POST['datafile'])) {
					$serveur_image = $_FILES['datafile']['error'];
				}else{
					$serveur_image ="";
				}
		$id=mysql_insert_id();
		move_uploaded_file($_FILES['datafile']['tmp_name'], dirname(__FILE__) ."../img/$id.jpg");
		// Si la requete est bonne on retourne sur la page index//
		header("location:index.php");
	}else{
		header("location:formulaire_article.php");
	}
?>