<?php
	include ('includes/connexion.inc.php');
	include ('includes/header.inc.php');
	require_once("libs/smarty.class.php");
	$smarty = new Smarty();
	echo '<div class="span8">';
	if(isset($_GET["id"]))
		{$smarty->display("delete.tpl");
		$id = $_GET["id"];
		$SQL = "DELETE FROM articles WHERE id='$id';" ;
		mysql_query($SQL);
		header ('Refresh: 4;url=index.php');
	}
?>
<?php
	include ('includes/footer.inc.php');
?>
