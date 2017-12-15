<?php
/* Smarty version 3.1.30, created on 2017-12-14 22:46:23
  from "C:\wamp\www\coopemploi\vues\reunion\v_voir_reunion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a32ff3f1e4941_01588485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '160f867131ed09156ec87b44fa6b1b889c659736' => 
    array (
      0 => 'C:\\wamp\\www\\coopemploi\\vues\\reunion\\v_voir_reunion.tpl',
      1 => 1513291581,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a32ff3f1e4941_01588485 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class='row'>
    <div class="col-xs-12" >
        <div class = "page-header">

            <h1>
                ACCUEIL
               <small>Voici les rÃ©unions a venir ou il reste de la place: </small>
            </h1>
        </div>
    </div>
</div>

<div class='row'>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reunions']->value, 'reu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['reu']->value) {
?>
	    <div class='col-xs-4 reunion '>
		    <div class="thumbnail">
		    Date de debut:<br> <?php echo $_smarty_tpl->tpl_vars['reu']->value->date_heure_debut_reunion;?>
 <br>
		    Date de fin:<br> <?php echo $_smarty_tpl->tpl_vars['reu']->value->date_heure_fin_reunion;?>
 <br>
		    Organisateur: <?php echo $_smarty_tpl->tpl_vars['reu']->value->un_organisateur->prenom_utilisateur;?>
 <?php echo $_smarty_tpl->tpl_vars['reu']->value->un_organisateur->nom_utilisateur;?>
 <br>
		    Lieu: <?php echo $_smarty_tpl->tpl_vars['reu']->value->un_lieu->designation_lieu;?>
 <br>
		    <br>

      		<a href="index.php?controller=reunion&action=inscription&id_reunion=<?php echo $_smarty_tpl->tpl_vars['reu']->value->id_reunion;?>
">S'inscrire</a>
      		</div>
	    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div><?php }
}
