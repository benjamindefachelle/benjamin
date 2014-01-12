{foreach from=$data_tab item=data}
<h3><span style="text-decoration: underline;">Titre</span> : {$data['titre']}<h3>
<p style = "text-align : right;">
<h4><p>Le : {$data['date_fr']} </p><h4>
<p>Contenu : {$data['corps']}</p>
{if $identification == true}
<div align=left"><a href="mod.php?id={$data['id']}"><font size="2"><button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-star"></span> Editer
</button>
<a href="delete.php?id={$data['id']}"><font size="2"><button type="button" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-remove-sign"></span> Supprimer
</button></a></div>
&nbsp; &nbsp;
{/if}
<p><img src="img/{$data['id']}.jpg" alt="image"/>
<p style="float: left;"></p><a href="commentaire.php?id={$data['id']}"><font size="2"><button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-star"></span> Ajouter un commentaire
</button></a>
<p style="float: left;"></p><a href="vue.php?id={$data['id']}"><font size="2"><button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-star"></span> Voir les commentaires
</button></a>
<hr> 
{/foreach}



