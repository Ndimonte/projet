@include('nav')

@section('title', 'Suppression des étudiants')

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <p>Voulez-vous supprimer l'étudiant {{$etudiants->nom}} {{$etudiants->prenom}} ?</p>
            <form action="{{route('supprimeretudiants',['id'=>$etudiants->id])}}" method="post">
                @csrf
                <button class="btn btn-danger" type="submit">Supprimer</button>
            </form>
            <br>
            <a href="{{route('listetudiants')}}" class="btn btn-secondary">Annuler</a>
        </div>
    </div>
</div>

