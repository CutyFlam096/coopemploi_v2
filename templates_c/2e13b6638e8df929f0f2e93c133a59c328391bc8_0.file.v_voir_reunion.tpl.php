<?php
/* Smarty version 3.1.30, created on 2018-04-22 00:27:56
  from "C:\wamp64\www\coopemploi\vues\reunion\v_voir_reunion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adbd70ce04c98_31677711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e13b6638e8df929f0f2e93c133a59c328391bc8' => 
    array (
      0 => 'C:\\wamp64\\www\\coopemploi\\vues\\reunion\\v_voir_reunion.tpl',
      1 => 1524355941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5adbd70ce04c98_31677711 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class='row'>
    <div class="col-xs-12" >
        <div class = "page-header">

            <h1>
                GESTION DES REUNIONS
				<br>
				<a class="btn btn-info btn-lg" href="index.php?controller=reunion&action=creation">Creer</a>
				<br>
                <small>Voici les réunions: </small>
            </h1>
        </div>
    </div>
</div>

<div class='row'>
	<?php if (isset($_smarty_tpl->tpl_vars['utilisateur']->value)) {?>
		<?php if ($_smarty_tpl->tpl_vars['utilisateur']->value->id_type_profil == 2) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reunions']->value, 'reu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['reu']->value) {
?>
				<div class='col-xs-4 reunion'>
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

					<a class="btn btn-info btn-lg" href="index.php?controller=reunion&action=modification&id_reunion=<?php echo $_smarty_tpl->tpl_vars['reu']->value->id_reunion;?>
">Modifier</a>
					<button id="<?php echo $_smarty_tpl->tpl_vars['reu']->value->id_reunion;?>
" type="button" class="delete_reunion btn btn-info btn-lg" data-toggle="modal" data-target="#modalSuppression">Supprimer</button>
					
					</div>
				</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		<?php } else { ?>
			Pas les droits!
		<?php }?>
	<?php } else { ?>
		Pas les droits!
	<?php }?>
	
	<!-- Modal -->
	  <div class="modal fade" id="modalSuppression" role="dialog">
		<div class="modal-dialog">
		
		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Valider Suppression</h4>
			</div>
			<div class="modal-body">
			  <a type="button" class="valider_delete_reunion btn btn-info btn-lg" href="index.php?controller=reunion&action=suppression&id_reunion=<?php echo $_smarty_tpl->tpl_vars['reu']->value->id_reunion;?>
">Valider suppression</a>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		  </div>
		  
		</div>
	  </div>
  
</div>

<?php echo '<script'; ?>
>
$('.delete_reunion').on('click', function () {
	$('.valider_delete_reunion').attr('href', "index.php?controller=reunion&action=get_adresses&id_commune=" + $(this).val());
  $('#myModal').modal('show')
})
<?php echo '</script'; ?>
><?php }
}
