<?php
/* Smarty version 3.1.30, created on 2017-12-12 14:04:48
  from "C:\wamp64\www\coopemploiv2\vues\v_navigation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2fe2009b4531_23690910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ee0e921e398b342d42f0de6f65808b4a7dd2cab' => 
    array (
      0 => 'C:\\wamp64\\www\\coopemploiv2\\vues\\v_navigation.tpl',
      1 => 1513085564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2fe2009b4531_23690910 (Smarty_Internal_Template $_smarty_tpl) {
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
						Vous ètes connecté(e) en tant que <?php echo $_smarty_tpl->tpl_vars['utilisateur']->value['prenom'];?>
 <?php echo $_smarty_tpl->tpl_vars['utilisateur']->value['nom'];?>
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
				<div class='container'>
					<div class='navbar-header'>
                                            <a class='navbar-brand' href='index.php'>Présentation de la coopérative</a>
					</div>
					<ul class='nav navbar-nav'>
                                            <li><a href='index.php'>FAQ</a></li>
                                            <li><a href='index.php'>Porteurs de projet</a></li>
                                            
                                            <li class="dropdown">
                                                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                                    Agendas
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="">Réunions collective</a></li>
                                                    <li><a href="">Manifestation</a></li>
                                                </ul>
                                            </li>
                                            <li><a href='index.php'>Contact</a></li>
                                        </ul>
                                    </div>

                         </div>
                    </nav>
	<?php }
}
