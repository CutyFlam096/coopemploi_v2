<?php
/* Smarty version 3.1.30, created on 2018-04-24 23:10:47
  from "C:\wamp64\www\coopemploi\vues\reunion\v_modification_reunion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adfb977e1b805_71434860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bae40e3806126c3ae92718b6ec16acaba42c0789' => 
    array (
      0 => 'C:\\wamp64\\www\\coopemploi\\vues\\reunion\\v_modification_reunion.tpl',
      1 => 1524611443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5adfb977e1b805_71434860 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>Modification d'une reunion</h1>
<div class='form-group'>
	<form method='POST' action='index.php?controller=reunion&action=validate_modification'>
			<input class="form-control" id="id_reunion" name="id_reunion" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['une_reunion']->value->id_reunion;?>
"/>
	
			<label for='deb_reunion'>Date de debut de la reunion: </label>
			<input class="form-control" id="deb_reunion" name="deb_reunion" type="text" value="<?php echo $_smarty_tpl->tpl_vars['date_deb']->value;?>
"/>
			
			<label for='h_deb_reunion'>Heure de debut de la reunion: </label>
			<input class="form-control" id="h_deb_reunion" name="h_deb_reunion" type="number" min="0" max="24" value="<?php echo $_smarty_tpl->tpl_vars['h_deb']->value;?>
"/>
			
			<label for='m_deb_reunion'>Minute de debut de la reunion: </label>
			<input class="form-control" id="m_deb_reunion" name="m_deb_reunion" type="number" min="0" max="60" value="<?php echo $_smarty_tpl->tpl_vars['m_deb']->value;?>
"/>
			
			
			
			<label for='fin_reunion'>Date de fin de la reunion: </label>
			<input class="form-control" id="fin_reunion" name="fin_reunion" type="text" value="<?php echo $_smarty_tpl->tpl_vars['date_fin']->value;?>
"/>
			
			<label for='deb_reunion'>Heure de fin de la reunion: </label>
			<input class="form-control" id="h_fin_reunion" name="h_fin_reunion" type="number" min="0" max="24" value="<?php echo $_smarty_tpl->tpl_vars['h_fin']->value;?>
"/>
			
			<label for='deb_reunion'>Minute de fin de la reunion: </label>
			<input class="form-control" id="m_fin_reunion" name="m_fin_reunion" type="number" min="0" max="60" value="<?php echo $_smarty_tpl->tpl_vars['m_fin']->value;?>
"/>
			
			
			<label for='select_commune'>Commune: </label>
			<select id="select_commune" class="form-control" name="select_commune">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['des_communes']->value, 'com');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['com']->value) {
?>
					<?php if ($_smarty_tpl->tpl_vars['nom']->value->id_code_commune == $_smarty_tpl->tpl_vars['une_commune']->value->id_commune) {?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['com']->value->id_code_commune;?>
" selected><?php echo $_smarty_tpl->tpl_vars['com']->value->nom_commune;?>
</option>
					<?php } else { ?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['com']->value->id_code_commune;?>
"><?php echo $_smarty_tpl->tpl_vars['com']->value->nom_commune;?>
</option>
					<?php }?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</select>
			
			<label for='select_adresse'>Adresse: </label>
			<select id="select_adresse" class="form-control">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['des_adresses']->value, 'add');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['add']->value) {
?>
					<?php if ($_smarty_tpl->tpl_vars['add']->value->id_adresse == $_smarty_tpl->tpl_vars['une_adresse']->value->id_adresse) {?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['add']->value->id_adresse;?>
" selected><?php echo $_smarty_tpl->tpl_vars['add']->value->rue1_adresse;?>
 <?php echo $_smarty_tpl->tpl_vars['add']->value->rue2_adresse;?>
</option>
					<?php } else { ?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['add']->value->id_adresse;?>
"><?php echo $_smarty_tpl->tpl_vars['add']->value->rue1_adresse;?>
 <?php echo $_smarty_tpl->tpl_vars['add']->value->rue2_adresse;?>
</option>
					<?php }?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</select>
			
			<label for='select_lieu'>Lieu: </label>
			<select id="select_lieu" class="form-control" name="select_lieu">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['des_lieux']->value, 'lieu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lieu']->value) {
?>
					<?php if ($_smarty_tpl->tpl_vars['lieu']->value->id_lieu == $_smarty_tpl->tpl_vars['un_lieu']->value->id_lieu) {?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['lieu']->value->id_lieu;?>
" selected><?php echo $_smarty_tpl->tpl_vars['lieu']->value->designation_lieu;?>
 - <?php echo $_smarty_tpl->tpl_vars['lieu']->value->place_lieu;?>
</option>
					<?php } else { ?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['lieu']->value->id_lieu;?>
"><?php echo $_smarty_tpl->tpl_vars['lieu']->value->designation_lieu;?>
 - <?php echo $_smarty_tpl->tpl_vars['lieu']->value->place_lieu;?>
</option>
					<?php }?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</select>
			
			</br>
			<input type='submit' value='Valider' class='btn btn-primary'>
			<input type='reset' value='Annuler' class='btn btn-primary'>
		</form>
	</br>
</div>

<?php echo '<script'; ?>
>
$( function() 
	{
		$( "#deb_reunion" ).datepicker(
			{
				altField: "#datepicker",
				closeText: 'Fermer',
				prevText: 'Précédent',
				nextText: 'Suivant',
				currentText: 'Aujourd\'hui',
				monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
				monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
				dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
				dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
				dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
				weekHeader: 'Sem.',
				dateFormat: 'yy-mm-dd'
			}
		);
		
		$( "#fin_reunion" ).datepicker(
			{
				altField: "#datepicker",
				closeText: 'Fermer',
				prevText: 'Précédent',
				nextText: 'Suivant',
				currentText: 'Aujourd\'hui',
				monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
				monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
				dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
				dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
				dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
				weekHeader: 'Sem.',
				dateFormat: 'yy-mm-dd'
			}
		
		);
		$( "#select_commune" ).change(function() 
		{
			$("#select_adresse").removeAttr('disabled');
			
			$.get("result_ajax.php?action=liste_adresses&id_commune=" + $("#select_commune").val(), function(result)
			{
				$("#select_adresse").html(result);
			});
		});
		
		$( "#select_adresse" ).change(function() 
		{
			$("#select_lieu").removeAttr('disabled');
		
			$.get("result_ajax.php?action=liste_lieux&id_adresse=" + $("#select_adresse").val(), function(result)
			{
				$("#select_lieu").html(result);
			});
		});
	} 
);
<?php echo '</script'; ?>
>            <?php }
}
