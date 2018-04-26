<?php
/* Smarty version 3.1.30, created on 2018-04-22 02:56:13
  from "C:\wamp64\www\coopemploi\vues\reunion\v_creer_reunion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adbf9cdecb521_95752418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0377b035efcba4b68b32a449e8728b18d94bbaf' => 
    array (
      0 => 'C:\\wamp64\\www\\coopemploi\\vues\\reunion\\v_creer_reunion.tpl',
      1 => 1524365771,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5adbf9cdecb521_95752418 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>Creation d'une reunion</h1>
<div class='form-group'>
	<form method='POST' action='index.php?controller=reunion&action=validate_creation'>
			<label for='deb_reunion'>Date de debut de la reunion: </label>
			<input class="form-control" id="deb_reunion" name="deb_reunion" type="text"/>
			
			<label for='h_deb_reunion'>Heure de debut de la reunion: </label>
			<input class="form-control" id="h_deb_reunion" name="h_deb_reunion" type="number" min="0" max="24"/>
			
			<label for='m_deb_reunion'>Minute de debut de la reunion: </label>
			<input class="form-control" id="m_deb_reunion" name="m_deb_reunion" type="number" min="0" max="60"/>
			
			
			
			<label for='fin_reunion'>Date de fin de la reunion: </label>
			<input class="form-control" id="fin_reunion" name="fin_reunion" type="text"/>
			
			<label for='deb_reunion'>Heure de fin de la reunion: </label>
			<input class="form-control" id="h_fin_reunion" name="h_fin_reunion" type="number" min="0" max="24"/>
			
			<label for='deb_reunion'>Minute de fin de la reunion: </label>
			<input class="form-control" id="m_fin_reunion" name="m_fin_reunion" type="number" min="0" max="60"/>
			
			
			<label for='select_commune'>Commune: </label>
			<select id="select_commune" class="form-control" name="select_commune">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['communes']->value, 'com');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['com']->value) {
?>
					 <option value="<?php echo $_smarty_tpl->tpl_vars['com']->value->id_code_commune;?>
"><?php echo $_smarty_tpl->tpl_vars['com']->value->nom_commune;?>
</option>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</select>
			
			<label for='select_adresse'>Adresse: </label>
			<select id="select_adresse" class="form-control" disabled>
			</select>
			
			<label for='select_lieu'>Lieu: </label>
			<select id="select_lieu" class="form-control" name="select_lieu" disabled>
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
