<?php
/* Smarty version 3.1.30, created on 2017-12-15 10:31:23
  from "C:\wamp\www\coopemploi\vues\porteur\v_afficher_projet.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a33a47b996719_69762727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35080d3268d3206f6cb2e14a8aef2958a41806bc' => 
    array (
      0 => 'C:\\wamp\\www\\coopemploi\\vues\\porteur\\v_afficher_projet.tpl',
      1 => 1513295961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a33a47b996719_69762727 (Smarty_Internal_Template $_smarty_tpl) {
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
		   Description du projet : <?php echo $_smarty_tpl->tpl_vars['projet']->value->description_projet;?>
 <br>


		   
        
		    <!--Lieu: <?php echo $_smarty_tpl->tpl_vars['reu']->value->project->designation_lieu;?>
 <br>
		    <br>!-->

  
      		</div>
	    </div>
   
</div><?php }
}
