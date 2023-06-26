@include('nav')
<div class="container">
    <div class="col-sm-12">
        <form action="{{route('modifieretudiants',['id'=>$etudiants->id])}}" method="post">
            <h3>Modification des étudiants</h3>
            @csrf
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" value="{{$etudiants->nom}}">
            </div>
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" name="prenom" value="{{$etudiants->prenom}}">
            </div>
            <div class="form-group">
                <label for="noet">Numéro Matricule</label>
                <input type="text" class="form-control" name="noet" value="{{$etudiants->noet}}" disabled>
            </div>
            <br>
            <button class="btn btn-primary" type="submit" name="Modifier">Mettre à jour</button>
            <br>
            <br>
            <button class="btn btn-secondary" type="submit" name="Annuler">Annuler</button>
        </form>

    </div>
</div>
