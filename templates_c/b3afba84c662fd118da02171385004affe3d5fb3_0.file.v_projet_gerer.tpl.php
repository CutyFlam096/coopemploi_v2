<?php
/* Smarty version 3.1.30, created on 2017-12-15 13:08:23
  from "C:\wamp\www\coopemploi\vues\projet\v_projet_gerer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a33c947761923_90282981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3afba84c662fd118da02171385004affe3d5fb3' => 
    array (
      0 => 'C:\\wamp\\www\\coopemploi\\vues\\projet\\v_projet_gerer.tpl',
      1 => 1513343151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a33c947761923_90282981 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class='form-group'>
	<?php if ($_smarty_tpl->tpl_vars['un_projet']->value != null) {?>
		<form method='POST' action='index.php?controller=projet&action={}>
			<label for='nom'>Nom du projet: </label>
			<input value='<?php echo $_smarty_tpl->tpl_vars['un_projet']->value->nom_projet;?>
' name='nom' id='nom' type='text' class='form-control' size='30' maxlength='45' />
			
			<label for='nic'>NIC: </label>
			<input value='<?php echo $_smarty_tpl->tpl_vars['un_projet']->value->nic;?>
' name='nic' id='nic' class='form-control' type='text' value='' size='30' maxlength='45' />
			<label for='description'>Description du projet: </label>
			<textarea value='<?php echo $_smarty_tpl->tpl_vars['un_projet']->value->description_projet;?>
' name='description' id='description' class='form-control' rows='4' />
			</textarea>
			
			<label for='secteur'>Secteur: </label>
			<Select name='secteur' id='secteur' class='form-control' type='text'/>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secteurs']->value, 'secteur');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['secteur']->value) {
?>
				<option value='<?php echo $_smarty_tpl->tpl_vars['secteur']->value->id_secteur_projet;?>
'><?php echo $_smarty_tpl->tpl_vars['secteur']->value->designation_secteur_projet;?>
</option>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</select>
			
			
			<label for='site'>Site web: </label>
			<input value='<?php echo $_smarty_tpl->tpl_vars['un_projet']->value->site_web;?>
' name='site' id='site' class='form-control' type='text' value='' size='30' maxlength='45' />
			
			<label for='nic'>Photo 1: </label>
			<input name='photo_1' id='photo_1' class='form-control' type='file' value='' size='30' maxlength='45' />
			<label for='nic'>Photo 2:</label>
			<input name='photo_2' id='photo_2' class='form-control' type='file' value='' size='30' maxlength='45' />
			<label for='nic'>Photo 3:</label>
			<input name='photo_3' id='photo_3' class='form-control' type='file' value='' size='30' maxlength='45' />
			<label for='nic'>Description Photo 1: </label>
			<input value='<?php echo $_smarty_tpl->tpl_vars['un_projet']->value->description_photo_1;?>
' name='description_photo_1' id='description_photo_1' class='form-control' type='text' value='' size='30' maxlength='45' />
			<label for='nic'>Description Photo 2:</label>
			<input value='<?php echo $_smarty_tpl->tpl_vars['un_projet']->value->description_photo_3;?>
' name='description_photo_2' id='description_photo_2' class='form-control' type='text' value='' size='30' maxlength='45' />
			<label for='nic'>Description Photo 3:</label>
			<input value='<?php echo $_smarty_tpl->tpl_vars['un_projet']->value->description_photo_3;?>
' name='description_photo_3' id='description_photo_3' class='form-control' type='text' value='' size='30' maxlength='45' />
			
			<label for='parcours'>Parcours: </label>
			<input value='<?php echo $_smarty_tpl->tpl_vars['un_projet']->value->parcours;?>
' name='parcours' id='parcours' class='form-control' type='text' value='' size='30' maxlength='45' />
			<label for='logo'>Logo: </label>
			<input name='logo' id='logo' class='form-control' type='file' value='' size='30' maxlength='45' />
			
			</br>
			<input type='submit' value='Valider' class='btn btn-primary'>
			<input type='reset' value='Annuler' class='btn btn-primary'>
		</form>
	<?php } else { ?>
	<form method='POST' action='index.php?controller=connection&action=verif_connection'>
			<label for='nom'>Nom du projet: </label>
			<input name='nom' id='login' type='text' class='form-control' size='30' maxlength='45' />
			
			<label for='nic'>NIC: </label>
			<input name='nic' id='nic' class='form-control' type='text' value='' size='30' maxlength='45' />
			<label for='description'>Description du projet: </label>
			<input name='description' id='description' class='form-control' type='text' value='' size='30' maxlength='45' />
			
			
			//secteur
			<label for='secteur'>Secteur: </label>
			<input name='secteur' id='secteur' class='form-control' type='text' value='' size='30' maxlength='45' />
			
			<label for='site'>Site web: </label>
			<input name='site' id='site' class='form-control' type='text' value='' size='30' maxlength='45' />
			
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
		<?php }?>
	</br>
</div><?php }
}
