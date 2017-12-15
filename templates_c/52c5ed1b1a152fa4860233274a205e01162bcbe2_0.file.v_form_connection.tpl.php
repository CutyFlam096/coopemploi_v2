<?php
/* Smarty version 3.1.30, created on 2017-12-15 08:43:51
  from "C:\wamp\www\coopemploi\vues\connection\v_form_connection.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a338b47504ec6_51753779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52c5ed1b1a152fa4860233274a205e01162bcbe2' => 
    array (
      0 => 'C:\\wamp\\www\\coopemploi\\vues\\connection\\v_form_connection.tpl',
      1 => 1513288743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a338b47504ec6_51753779 (Smarty_Internal_Template $_smarty_tpl) {
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
