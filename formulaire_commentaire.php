<?php
	require('includes/connexion.inc.php');
	require_once("libs/smarty.class.php");
	$smarty = new Smarty();
	include('includes/header.inc.php');
	echo '<div class="span6">';
	$smarty->display("commentaire.tpl");
	include ('includes/footer.inc.php');
?>