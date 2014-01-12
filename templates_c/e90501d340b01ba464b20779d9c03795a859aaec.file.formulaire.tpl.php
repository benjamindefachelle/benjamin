<?php /* Smarty version Smarty-3.1.15, created on 2014-01-12 18:44:18
         compiled from ".\templates\formulaire.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89555294ac1bdeb9b8-28475469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e90501d340b01ba464b20779d9c03795a859aaec' => 
    array (
      0 => '.\\templates\\formulaire.tpl',
      1 => 1389547749,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89555294ac1bdeb9b8-28475469',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5294ac1be288b0_53931882',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5294ac1be288b0_53931882')) {function content_5294ac1be288b0_53931882($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<body>
		<form method="POST" action="traitement.php"enctype="multipart/form-data" onsubmit="return verifier();">
			<fieldset style="width:200x;">
				<legend><span style="text-decoration:underline;">Ajouter un article </span></legend>
				<label for="text">Titre :</label><br />
				<input type="text" name="titre"><br />
				<label for="text"> Texte :</label><br />
				<input type="text" name="texte"  /><br />
				<label for="checkbox"> Publication : </label>
				<input type="checkbox" name="option" value="1"> Oui<br>
				<br>
				<label for="text"> Fichier :</label><br />
				<input type="file" id="datafile" name="datafile" size="40">
			</fieldset>
			<center><input type="submit" value="Valider" name="poster"/>
			<input type="submit" value="Annuler" /></center></font>
			<br>
			</form>
	</body>
</html> <?php }} ?>
