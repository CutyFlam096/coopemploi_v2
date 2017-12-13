<?php
/* Smarty version 3.1.30, created on 2017-12-13 10:30:32
  from "C:\wamp64\www\coopemploiv2\vues\v_navigation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3101484f7a95_38896521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ee0e921e398b342d42f0de6f65808b4a7dd2cab' => 
    array (
      0 => 'C:\\wamp64\\www\\coopemploiv2\\vues\\v_navigation.tpl',
      1 => 1513161030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3101484f7a95_38896521 (Smarty_Internal_Template $_smarty_tpl) {
?>
<body> 
	<div class='container'>
		<div class='row'>
			<div class="col-md-3" >
				<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
			</div>
			
			<div id="connection" class="col-md-offset-3 col-md-6" >
				<p>
					<?php if (isset($_smarty_tpl->tpl_vars['utilisateur']->value)) {?>
						Vous êtes connecté(e) en tant que <?php echo $_smarty_tpl->tpl_vars['utilisateur']->value['prenom'];?>
 <?php echo $_smarty_tpl->tpl_vars['utilisateur']->value['nom'];?>
</br>
						<a href='index.php?controller=connection&action=deconnection'>se deconnecter</a>
					<?php } else { ?>
						Vous n'êtes pas connecté(e)</br>
						<a href='index.php?controller=connection&action=form-connection'>se connecter</a>
					<?php }?>
				</p>
			</div>
		</div>
		
		<div class='row'>
			<nav id="navigation" class='navbar navbar-default'>
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
                    </nav>
	
<?php }
}
