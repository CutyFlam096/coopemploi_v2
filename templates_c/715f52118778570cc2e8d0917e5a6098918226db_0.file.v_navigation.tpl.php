<?php
/* Smarty version 3.1.30, created on 2018-04-19 22:59:26
  from "C:\wamp64\www\coopemploi\vues\v_navigation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad91f4e1cc377_39882004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '715f52118778570cc2e8d0917e5a6098918226db' => 
    array (
      0 => 'C:\\wamp64\\www\\coopemploi\\vues\\v_navigation.tpl',
      1 => 1524178764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad91f4e1cc377_39882004 (Smarty_Internal_Template $_smarty_tpl) {
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
						Vous êtes connecté(e) en tant que <?php echo $_smarty_tpl->tpl_vars['utilisateur']->value->prenom_utilisateur;?>
 <?php echo $_smarty_tpl->tpl_vars['utilisateur']->value->nom_utilisateur;?>
</br>
						<a href='index.php?controller=connection&action=deconnection'>se deconnecter</a>
					<?php } else { ?>
						Vous n'êtes pas connecté(e)</br>
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
	                    	<li><a href='index.php'>Gerer rdv</a></li>
	                    	<li><a href='index.php?controller=reunion&action=voir'>Gerer reunions</a></li>
	                    <?php }?>
	                    
                    </ul>
                    
                 </div>
            </nav><?php }
}
