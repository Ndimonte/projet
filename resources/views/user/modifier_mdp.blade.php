@extends('modele')

@section('title','Modification de mot de passe')

@section('contenu')
@include('nav')
<form action="{{route('modifiermotdepasse')}}" method="post">
    <div class="container">
        <h3>Changer mon mot de passe</h3>
        @csrf
        <div class="mb-3">
            <label for="mdp" class="form-label">Nouveau Mot de passe:</label>
            <input type="password" class="form-control" name="mdp" placeholder="Mot de passe">
        </div>
        <div class="mb-3">
            <label for="mdp_confirmation" class="form-label">Confirmation de mot de passe:</label>
            <input type="password" class="form-control" name="mdp_confirmation" placeholder="Confirmation mot de passe">
        </div>
        <button class="btn btn-primary" type="submit" name="Modifier">Mettre à jour</button>
        <button class="btn btn-secondary" type="submit" name="Annuler">Annuler</button>
    </div>
</form>

@endsection
