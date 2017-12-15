<?php
/* Smarty version 3.1.30, created on 2017-12-15 13:00:34
  from "C:\wamp\www\coopemploi\vues\v_navigation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a33c772a54de3_61626527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51313f0b8ac61a2f5cdf17b4bc7f7b037226bb30' => 
    array (
      0 => 'C:\\wamp\\www\\coopemploi\\vues\\v_navigation.tpl',
      1 => 1513342833,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a33c772a54de3_61626527 (Smarty_Internal_Template $_smarty_tpl) {
?>
<body> 
	<div class='container'>
		<div class='row'>
			<div class="col-lg-3" >
				<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
			</div>
			
			<div class="col-lg-9 statut-connection" >
				<h3>
					<?php if (isset($_smarty_tpl->tpl_vars['utilisateur']->value)) {?>
						Vous ètes connecté(e) en tant que <?php echo $_smarty_tpl->tpl_vars['utilisateur']->value->prenom_utilisateur;?>
 <?php echo $_smarty_tpl->tpl_vars['utilisateur']->value->nom_utilisateur;?>
</br>
						<a href='index.php?controller=connection&action=deconnection'>se deconnecter</a>
					<?php } else { ?>
						Vous n'ètes pas connecté(e)</br>
						<a href='index.php?controller=connection&action=form-connection'>se connecter</a>
					<?php }?>
				</h3>
			</div>
		</div>
		
		<div class='row'>
			<nav class='navbar navbar-default'>
					<div class='navbar-header'>
                                            <a class='navbar-brand' href='index.php'>Accueil</a>
					</div>
					
					<ul class='nav navbar-nav'>
					
						<?php if (!isset($_smarty_tpl->tpl_vars['utilisateur']->value)) {?>
	                        <li><a href='index.php?controller=faq&action=voir'>FAQ</a></li>
	                        <li><a href='index.php?controller=porteur&action=voir'>Porteurs de projet</a></li>
	                        <li><a href='index.php?controller=contact&action=voir'>Contact</a></li>
	                    <?php } elseif ($_smarty_tpl->tpl_vars['utilisateur']->value->id_type_profil == 1) {?>
	                    	<li><a href='index.php?controller=projet&action=gerer'>Gestion de son projet</a></li>
	                    <?php } elseif ($_smarty_tpl->tpl_vars['utilisateur']->value->id_type_profil == 2) {?>
		                    <li><a href='index.php'>Valider profil</a></li>
		                    <li><a href='index.php'>Gerer profil</a></li>
	                    	<li><a href='index.php'>Gerer rdv</a></li>
	                    	<li><a href='index.php'>Gerer reunions</a></li>
	                    <?php }?>
	                    
                    </ul>
                    
                 </div>
            </nav><?php }
}
