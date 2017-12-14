<?php
/* Smarty version 3.1.30, created on 2017-12-14 13:46:51
  from "C:\wamp64\www\coopemploiv2\vues\reunion\v_voir_reunion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3280cb658b50_25135337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5fd9e4cfb7703830889d0a744f8cdc298d4289a' => 
    array (
      0 => 'C:\\wamp64\\www\\coopemploiv2\\vues\\reunion\\v_voir_reunion.tpl',
      1 => 1513239131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3280cb658b50_25135337 (Smarty_Internal_Template $_smarty_tpl) {
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
		    Organisateur: <?php echo $_smarty_tpl->tpl_vars['reu']->value->un_organisateur->prenom;?>
 <?php echo $_smarty_tpl->tpl_vars['reu']->value->un_organisateur->nom;?>
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
