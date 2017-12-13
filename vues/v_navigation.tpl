<body> 
	<div class='container'>
		<div class='row'>
			<div class="col-lg-3" >
				<h1>{$title}</h1>
			</div>
			
			<div class="col-lg-9 statut-connection" >
				<h3>
					{if isset($utilisateur)}
						Vous ètes connecté(e) en tant que {$utilisateur.prenom} {$utilisateur.nom}</br>
						<a href='index.php?controller=connection&action=deconnection'>se deconnecter</a>
					{else}
						Vous n'ètes pas connecté(e)</br>
						<a href='index.php?controller=connection&action=form-connection'>se connecter</a>
					{/if}
				</h3>
			</div>
		</div>
		
		<div class='row'>
			<nav class='navbar navbar-default'>
					<div class='navbar-header'>
                                            <a class='navbar-brand' href='index.php'>Accueil</a>
					</div>
					<ul class='nav navbar-nav'>
                                            <li><a href='index.php'>FAQ</a></li>
                                            <li><a href='index.php'>Porteurs de projet</a></li>
                                            <li><a href='index.php'>Contact</a></li>
                                        </ul>

                         </div>
                    </nav>
	
