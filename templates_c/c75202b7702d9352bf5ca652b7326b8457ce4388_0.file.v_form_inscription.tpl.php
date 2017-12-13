<?php
/* Smarty version 3.1.30, created on 2017-12-12 14:19:41
  from "C:\wamp64\www\coopemploiv2\vues\connection\v_form_inscription.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2fe57de719b8_84884697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c75202b7702d9352bf5ca652b7326b8457ce4388' => 
    array (
      0 => 'C:\\wamp64\\www\\coopemploiv2\\vues\\connection\\v_form_inscription.tpl',
      1 => 1513088377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2fe57de719b8_84884697 (Smarty_Internal_Template $_smarty_tpl) {
?>
<head>
	<meta charset="utf-8">
</head>
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
