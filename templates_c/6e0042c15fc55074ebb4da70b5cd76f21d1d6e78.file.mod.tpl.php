<?php /* Smarty version Smarty-3.1.15, created on 2014-01-12 18:44:33
         compiled from ".\templates\mod.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38645294bf231210e5-69917624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e0042c15fc55074ebb4da70b5cd76f21d1d6e78' => 
    array (
      0 => '.\\templates\\mod.tpl',
      1 => 1389547758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38645294bf231210e5-69917624',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5294bf2319aee5_32890437',
  'variables' => 
  array (
    'titre' => 0,
    'corps' => 0,
    'statut' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5294bf2319aee5_32890437')) {function content_5294bf2319aee5_32890437($_smarty_tpl) {?><body>
	<form action="mod_traitement.php" method="POST"enctype="multipart/form-data">>
		<div class="clearfix">
			<label for="titre">Titre</label>
			<div class="impact"><input type="text" name="titre" id="titre" value="<?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
" /></div>
		</div>
		<div class="clearfix">
			<label for="text">Texte</label>
			<div class="impact"><textarea name="corps" id="corps" ><?php echo $_smarty_tpl->tpl_vars['corps']->value;?>
</textarea></div>
		</div>
		<div class="clearfix">
			<label for="checkbox">Publication</label>
			<div class="impact"><input type="checkbox" name="statut" id="statut" value="<?php echo $_smarty_tpl->tpl_vars['statut']->value;?>
"></div>
		</div>
		<label for="text"> Fichier :</label><br />
		<input type="file" id="datafile" name="datafile" size="40">				
		<input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" >
		<br>
		<div class="form-action">
			<input type="submit" name="Modifier" value="Modifier"/>
		</div>
	</form>
</body><?php }} ?>
