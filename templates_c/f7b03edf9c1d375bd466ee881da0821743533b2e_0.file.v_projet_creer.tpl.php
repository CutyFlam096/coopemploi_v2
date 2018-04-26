<?php
/* Smarty version 3.1.30, created on 2018-04-01 13:53:49
  from "C:\wamp64\www\coopemploi\vues\projet\v_projet_creer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac0e46dc79313_72078609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7b03edf9c1d375bd466ee881da0821743533b2e' => 
    array (
      0 => 'C:\\wamp64\\www\\coopemploi\\vues\\projet\\v_projet_creer.tpl',
      1 => 1522590828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac0e46dc79313_72078609 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>Creation de votre projet:</h1>

<div class='form-group'>
	<form method='POST' action='index.php?controller=projet&action=validate_create' enctype='multipart/form-data'>
			<label for='nom'>Nom du projet: </label>
			<input name='nom' id='login' type='text' class='form-control' size='30' maxlength='45' />
			
			<label for='siren'>SIREN: </label>
			<input name='siren' id='siren' class='form-control' type='text' value='' size='30' maxlength='45' />
			
			<label for='nic'>NIC: </label>
			<input name='nic' id='nic' class='form-control' type='text' value='' size='30' maxlength='45' />
			<label for='description'>Description du projet: </label>
			<input name='description' id='description' class='form-control' type='text' value='' size='30' maxlength='45' />
			
			<label for='secteur'>Secteur: </label>
			<select name="secteur" size="1" class='form-control'>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secteurs']->value, 's');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['s']->value->id_secteur_projet;?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value->designation_secteur_projet;?>
</option>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</select>
			<label for='site'>Site web: </label>
			<input name='site' id='site' class='form-control' type='text' value='' size='30' maxlength='45' />
			
			
			<label for='raison'>Raison sociale: </label>
			<input name='raison' id='raison' class='form-control' type='text' value='' size='30' maxlength='45' />
			
			<label for='nic'>Photo 1: </label>
			<input name='photo_1' id='photo_1' class='form-control' type='file' value='' size='30' maxlength='45' />
			<label for='nic'>Photo 2:</label>
			<input name='photo_2' id='photo_2' class='form-control' type='file' value='' size='30' maxlength='45' />
			<label for='nic'>Photo 3:</label>
			<input name='photo_3' id='photo_3' class='form-control' type='file' value='' size='30' maxlength='45' />
			<label for='nic'>Description Photo 1: </label>
			<input name='description_photo_1' id='description_photo_1' class='form-control' type='text' value='' size='30' maxlength='45' />
			<label for='nic'>Description Photo 2:</label>
			<input name='description_photo_2' id='description_photo_2' class='form-control' type='text' value='' size='30' maxlength='45' />
			<label for='nic'>Description Photo 3:</label>
			<input name='description_photo_3' id='description_photo_3' class='form-control' type='text' value='' size='30' maxlength='45' />
			
			<label for='parcours'>Parcours: </label>
			<input name='parcours' id='parcours' class='form-control' type='text' value='' size='30' maxlength='45' />
			<label for='logo'>Logo: </label>
			<input name='logo' id='logo' class='form-control' type='file' value='' size='30' maxlength='45' />
			
			</br>
			<input type='submit' value='Valider' class='btn btn-primary'>
			<input type='reset' value='Annuler' class='btn btn-primary'>
		</form>
	</br>
</div><?php }
}
