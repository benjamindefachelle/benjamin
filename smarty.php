<?php
	require("libs/smarty.class.php");
	$smarty = new Smarty();
	$texte = "<p>Hello</p>";
	$smarty->assign("texte",$texte);
	$smarty->display("smarty.html");
?>