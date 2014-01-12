<?php
	include ('includes/connexion.inc.php');
	include 'includes/header.inc.php';
?>
<div class="span8">
	<?php
		$pseudo=$_POST['pseudo'];
		$mail=$_POST['mail'];
		$commentaire=$_POST['commentaire'];
		$new_id=$_POST['new_id'];
		$SQL="INSERT INTO commentaire (pseudo,mail,commentaire,new_id)VALUES ('$pseudo','$mail','$commentaire','$new_id')";
		$requete = mysql_query($SQL);
	?>
	<br>
	<?php
		echo "redirection sur la page d'accueil dans 2 secondes";
	?>
	<SCRIPT LANGUAGE=JAVASCRIPT>
		function refresh(){	
		window.location = 'index.php';
			}
				var dmc_setInterval = setInterval(refresh,2000);
	</SCRIPT>
</div>
<?php include 'includes/footer.inc.php';?>