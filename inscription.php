<?php
	require('includes/connexion.inc.php');
	require_once("libs/smarty.class.php");
	$smarty = new Smarty();
	include('includes/header.inc.php');
	//include ('fonction.php');
	echo '<div class="span6">';
	$smarty->display("inscription.tpl");
	include ('includes/footer.inc.php');
?>