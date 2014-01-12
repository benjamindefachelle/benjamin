<?php
	include ('includes/connexion.inc.php');
	include ('includes/header.inc.php');
	echo '<div class="span6">';
	unset($_COOKIE['sid']);
	setcookie ('sid',NULL,-1);
	echo "Deconnexion réussie";
	header ('Refresh:3;url=index.php');
	include ('includes/footer.inc.php');
?>