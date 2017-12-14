<?php
/* Smarty version 3.1.30, created on 2017-12-14 06:56:16
  from "C:\wamp\www\coopemploi\vues\reunion\v_inscription_reunion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a322090561d73_13282741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c03077aa755cd25b3d32cb746fd7d3756b0bd4e' => 
    array (
      0 => 'C:\\wamp\\www\\coopemploi\\vues\\reunion\\v_inscription_reunion.tpl',
      1 => 1513234573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a322090561d73_13282741 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class='row'>
    <div class="col-xs-12" >
		<?php echo $_smarty_tpl->tpl_vars['id_reunion']->value;?>

		<div class='form-group'>
			<form method='POST' action='index.php?controller=connection&action=verif-connection'>
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
				<label for='mail'>Mail: </label>
				<input name='mail' id='mail' class='form-control' type='text' value='' size='30' maxlength='45' />
				<label for='genre'>Genre: </label>
				<input name='genre' id='genre' class='form-control' type='text' value='' size='30' maxlength='45' />
				</form>
		</div>
    </div>
</div><?php }
}
