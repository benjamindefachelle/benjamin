<?php
	include('includes/connexion.inc.php');
	include 'includes/header.inc.php';
?>
<div class="span8">
	<?php
		$id=$_GET['id'];
		$SQL="SELECT * FROM commentaire WHERE new_id=$id ORDER BY id DESC";
		$requete = mysql_query($SQL);
		while($data2=mysql_fetch_assoc($requete)){
			echo " <h5> id: </h5>";
			echo $id["id"]; 
			?>
			<?php 
				echo "<h5>Publié par :</h5>";
				echo $data2["pseudo"] ;
			?>
			<br>
			<?php 
				echo "<h5>commentaire : </h5>";
				echo "<p>{$data2["commentaire"]}</p>";
			?>
			<br>
			<br>
			<?php
			echo "Commentaire Précédent";
		}
	?>
	<br>
	<br>
</div>
<?php include 'includes/footer.inc.php';?>



