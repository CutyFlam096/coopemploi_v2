<?php
/* Smarty version 3.1.30, created on 2017-12-12 14:18:03
  from "C:\wamp64\www\coopemploiv2\vues\connection\v_form_connection.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2fe51bba78b0_73536697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f9c269289e63e1d8dd149728e4abf189ec3a252' => 
    array (
      0 => 'C:\\wamp64\\www\\coopemploiv2\\vues\\connection\\v_form_connection.tpl',
      1 => 1513088266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2fe51bba78b0_73536697 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class='form-group'>
	<form method='POST' action='index.php?controller=connection&action=verif-connection'>
		<label for='login_producteur'>Login</label>
		<input name='login' id='login' type='text' class='form-control' size='30' maxlength='45' />
		
		<label for='mdp_producteur'>Mot de passe</label>
		<input name='mdp' id='mdp' class='form-control' type='password' value='' size='30' maxlength='45' />
		</br>
		<input type='submit' value='Valider' class='btn btn-primary'>
		<input type='reset' value='Annuler' class='btn btn-primary'>
	</form>
	</br>
	<p>Pas de compte ?</p>
	<a id='inscription' href='index.php?controller=connection&action=form-inscription'>Cliquez ici !</a>
</div><?php }
}
