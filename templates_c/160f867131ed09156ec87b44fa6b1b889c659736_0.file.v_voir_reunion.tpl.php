<?php
/* Smarty version 3.1.30, created on 2017-12-13 13:52:09
  from "C:\wamp\www\coopemploi\vues\reunion\v_voir_reunion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a313089aabd12_17925952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '160f867131ed09156ec87b44fa6b1b889c659736' => 
    array (
      0 => 'C:\\wamp\\www\\coopemploi\\vues\\reunion\\v_voir_reunion.tpl',
      1 => 1513172938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a313089aabd12_17925952 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class='row'>
    <div class="col-xs-12" >
        <div class = "page-header">

            <h1>
                ACCUEIL
               <small>Voici les réunions a venir ou il reste de la place: </small>
            </h1>
        </div>
    </div>
</div>

<div class='row'>
    <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
    <div class='col-xs-4 reunion '>
        <div class="thumbnail">
            ville: Neuvy-Pailloux <br>
            Rue: 3 rue de la boustifaille <br>
            <br>
            date: 13/12/2017 <br>
            debut: 15h30 <br>
            <br>
            Organisateur: John Smith<br>
            <br>
            
            <button type="button" class="btn btn-default">S'inscrire</button>
        </div>
    </div>
    <?php }
}
?>

</div><?php }
}
