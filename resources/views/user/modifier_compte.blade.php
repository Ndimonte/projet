@extends('modele')

@section('title','Mon compte')

@section('contenu')

<a href="{{route('home')}}" class="btn btn-primary">Page principale</a>
<form action="{{route('modifiercompte',['id'=>$users->id])}}" method="post">
    <div class="container">
        <h3>Mon compte</h3>
        @csrf
        <div class="mb-3">
            <label for="nom" class="form-label">Nom:</label>
            <input type="text" class="form-control" name="nom" value="{{$users->nom}}">
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prenom:</label>
            <input type="text" class="form-control" name="prenom" value="{{$users->prenom}}">
        </div>
        <div class="mb-3">
            <label for="login" class="form-label">Login:</label>
            <input type="text" class="form-control" name="login" value="{{$users->login}}" disabled>
        </div>
        <button class="btn btn-primary" type="submit" name="Modifier">Mettre à jour</button>
        <button class="btn btn-secondary" type="submit" name="Annuler">Annuler</button>
    </div>
</form>


@endsection
