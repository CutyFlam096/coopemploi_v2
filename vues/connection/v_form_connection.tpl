<div class='form-group'>
	<form method='POST' action='index.php?controller=connection&action=verif-connection'>
		<label for='login_producteur'>Login</label>
		<input name='login' id='login' type='text' class='form-control' size='30' maxlength='45' />
		
		<label for='mdp_producteur'>Mot de passe</label>
		<input name='mdp' id='mdp' class='form-control' type='password' value='' size='30' maxlength='45' />
		</br>
		<input type='submit' value='Valider' class='btn btn-primary'>
		<input type='reset' value='Annuler' class='btn btn-primary'>
	</form>
	</br>
	<p>Pas de compte ?</p>
	<a id='inscription' href='index.php?controller=connection&action=form-inscription'>Cliquez ici !</a>
</div>