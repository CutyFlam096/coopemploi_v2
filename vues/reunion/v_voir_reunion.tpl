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
    {for $foo=1 to 5}
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
    {/for}
</div>