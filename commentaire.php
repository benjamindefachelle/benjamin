<?php
	include('includes/connexion.inc.php');
	include 'includes/header.inc.php';
?>
	<div class="span8">
		<?php
			$id = $_GET['id'];
			$SQL = ("SELECT * from articles WHERE articles.id=$id");
			$requete = mysql_query($SQL);
			$data = mysql_fetch_assoc($requete);
			echo "<h1> {$data["titre"]}</h1>";
			echo "<p> {$data["corps"]}</p>";
			$id=$_GET['id'];
		?>
		<form action="ajout_commentaire.php" method="post">
			Pseudo : <input type="text" name="pseudo"/><br>
			Mail : <input type="text" name="mail"/><br>
			Commentaire : <br> <textarea name="commentaire" style="width:200px;height:200px;"></textarea><br>
			<input type="submit" value ="envoyer"/>
			<input type="hidden" name="new_id" value="<?php echo $id ?>"/>
		</form>
	</div>	
<?php include_once 'includes/footer.inc.php';?>



