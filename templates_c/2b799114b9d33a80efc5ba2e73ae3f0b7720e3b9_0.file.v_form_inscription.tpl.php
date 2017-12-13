<?php
/* Smarty version 3.1.30, created on 2017-12-13 06:08:05
  from "C:\wamp\www\coopemploi\vues\connection\v_form_inscription.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a30c3c5f07eb5_15803503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b799114b9d33a80efc5ba2e73ae3f0b7720e3b9' => 
    array (
      0 => 'C:\\wamp\\www\\coopemploi\\vues\\connection\\v_form_inscription.tpl',
      1 => 1513144161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a30c3c5f07eb5_15803503 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class='form-group'>
	<form method='POST' action='index.php?controller=connection&action=inscription'>
		<label for='login'>Login</label>
		<input name='login' id='login' type='text' class='form-control' size='30' maxlength='45'>
		
		<label for='nom'>Nom</label>
		<input name='nom' id='nom' type='text' class='form-control' size='30' maxlength='45'>
		
		<label for='prenom'>Prénom</label>
		<input name='prenom' id='prenom' type='text' class='form-control' size='30' maxlength='45'>
		
		<label for='adresse'>Adresse</label>
		<input name='adresse' id='adresse' type='text' class='form-control' size='30' maxlength='45'>
		
		<label for='mail'>Mail</label>
		<input name='mail' id='mail' type='text' class='form-control' size='30' maxlength='45'>
		
		<label for='tel'>Téléphone</label>
		<input name='tel' id='tel' type='text' class='form-control' size='30' maxlength='45'>
		
		<label for='code_postal'>Code postal</label>
		<input name='code_postal' id='code_postal' type='text' class='form-control' size='30' maxlength='45'>
		
		<label for='ville'>Ville</label>
		<input name='ville' id='ville' type='text' class='form-control' size='30' maxlength='45'>
		
		<label for='mdp'>Mot de passe</label>
		<input name='mdp' id='mdp' class='form-control' type='password' value='' size='30' maxlength='45'>
		Confirmer mot de passe
		<input name='mdp2' id='mdp2' class='form-control' type='password' value='' size='30' maxlength='45'>
		</br>
		
		<input type='submit' value='Valider' name='valider' class='btn btn-primary'>
		<input type='reset' value='Annuler' name='annuler' class='btn btn-primary'>
	</form>
</div><?php }
}
