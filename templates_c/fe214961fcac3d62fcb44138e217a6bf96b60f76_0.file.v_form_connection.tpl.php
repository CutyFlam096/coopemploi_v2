<?php
/* Smarty version 3.1.30, created on 2018-03-23 15:31:42
  from "C:\wamp64\www\coopemploi\vues\connection\v_form_connection.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ab51ddeef5821_71258600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe214961fcac3d62fcb44138e217a6bf96b60f76' => 
    array (
      0 => 'C:\\wamp64\\www\\coopemploi\\vues\\connection\\v_form_connection.tpl',
      1 => 1513288744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ab51ddeef5821_71258600 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class='form-group'>
	<form method='POST' action='index.php?controller=connection&action=verif_connection'>
		<label for='login_producteur'>Login</label>
		<input name='login' id='login' type='text' class='form-control' size='30' maxlength='45' />
		
		<label for='mdp_producteur'>Mot de passe</label>
		<input name='mdp' id='mdp' class='form-control' type='password' value='' size='30' maxlength='45' />
		</br>
		<input type='submit' value='Valider' class='btn btn-primary'>
		<input type='reset' value='Annuler' class='btn btn-primary'>
	</form>
	</br>
</div><?php }
}
