<?php
/* Smarty version 3.1.30, created on 2018-04-01 14:22:44
  from "C:\wamp64\www\coopemploi\vues\reunion\v_inscription_reunion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac0eb3412abb3_91354490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aef823c4c7bfebaa79f10f1fb68a59b84f32d95f' => 
    array (
      0 => 'C:\\wamp64\\www\\coopemploi\\vues\\reunion\\v_inscription_reunion.tpl',
      1 => 1513285284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac0eb3412abb3_91354490 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class='row'>
    <div class="col-xs-12" >
		<h2>Inscription a la reunion n°<?php echo $_smarty_tpl->tpl_vars['id_reunion']->value;?>
</h2>
		<div class='form-group'>
			<form method='POST' action='index.php?controller=reunion&action=valider_inscription&id_reunion=<?php echo $_smarty_tpl->tpl_vars['id_reunion']->value;?>
'>
				<label for='nom'>Nom:</label>
				<input name='nom' id='nom' class='form-control' type='text' value='' size='30' maxlength='45' />
				<label for='prenom'>Prenom: </label>
				<input name='prenom' id='prenom' class='form-control' type='text' value='' size='30' maxlength='45' />
				<label for='date'>Date de naissance: : </label>
				<input name='date' id='date' class='form-control' type='date' value='' size='30' maxlength='45' />
				<label for='telephone: '>Telephone: : </label>
				<input name='telephone' id='telephone' class='form-control' type='text' value='' size='30' maxlength='45' />
				<label for='mail'>Mail: </label>
				<input name='mail' id='mail' class='form-control' type='text' value='' size='30' maxlength='45' />
				
				<label for="commune">Commune: </label>
				<select class="form-control" name='commune'>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['communes']->value, 'commune');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['commune']->value) {
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['commune']->value->id_code_commune;?>
"><?php echo $_smarty_tpl->tpl_vars['commune']->value->nom_commune;?>
</option>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</select> 

				<label for='adresse'>Adresse: </label>
				<input name='adresse' id='adresse' class='form-control' type='text' value='' size='30' maxlength='45' />
				<label for='complement_adresse'>Complement adresse: </label>
				<input name='complement_adresse' id='complement_adresse' class='form-control' type='text' value='' size='30' maxlength='45' />
				
				</br>
				<input type='submit' value='Valider' class='btn btn-primary'>
				<input type='reset' value='Annuler' class='btn btn-primary'>
				</form>
		</div>
    </div>
</div><?php }
}
