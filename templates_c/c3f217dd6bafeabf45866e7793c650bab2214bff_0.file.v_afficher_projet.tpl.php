<?php
/* Smarty version 3.1.30, created on 2017-12-14 15:14:18
  from "C:\wamp64\www\coopemploiv2\vues\porteur\v_afficher_projet.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a32954a8d2e01_35632444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3f217dd6bafeabf45866e7793c650bab2214bff' => 
    array (
      0 => 'C:\\wamp64\\www\\coopemploiv2\\vues\\porteur\\v_afficher_projet.tpl',
      1 => 1513264455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a32954a8d2e01_35632444 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class='row'>
    <div class="col-xs-12" >
        <div class = "page-header">

            <h1>
                ACCUEIL
               <small>Voici les projets en cours : </small>
            </h1>
        </div>
    </div>
</div>

<div class='row'>
 
	    <div class='col-xs-6  projet '>
		    <div class="thumbnail">
		    Nom du projet : <?php echo $_smarty_tpl->tpl_vars['projet']->value->description_projet;?>
 <br>


		   
        
		    <!--Lieu: <?php echo $_smarty_tpl->tpl_vars['reu']->value->project->designation_lieu;?>
 <br>
		    <br>!-->

  
      		</div>
	    </div>
   
</div><?php }
}
