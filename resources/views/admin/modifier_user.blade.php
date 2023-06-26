@extends('modele')

@section('title','Modification des utilisateurs')

@section('contenu')
@include('nav')
<form action="{{route('modifierutilisateurs',['id'=>$users->id])}}" method="post">
    <div class="container">
        <h3>Modification des utilisateurs</h3>
        @csrf
        <div class="mb-3">
            <label for="nom" class="form-label">Nom:</label>
            <input type="text" class="form-control" name="nom" value="{{$users->nom}}">
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom:</label>
            <input type="text" class="form-control" name="prenom" value="{{$users->prenom}}">
        </div>
        <div class="mb-3">
            <label for="login" class="form-label">Login:</label>
            <input type="text" class="form-control" name="login" value="{{$users->login}}" disabled>
        </div>
        <div class="mb-3">
            <label for="mdp" class="form-label">Nouveau Mot de passe:</label>
            <input type="password" class="form-control" name="mdp">
        </div>
        <div class="mb-3">
            <label for="mdp_confirmation" class="form-label">Confirmation de mot de passe:</label>
            <input type="password" class="form-control" name="mdp_confirmation">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type:</label>
            <select class="form-select" name="type">
                <option value="enseignant">Enseignant</option>
                <option value="gestionnaire">Gestionnaire</option>
                <option value="etudiant">Etudiant</option>
            </select>
        </div>
        <button class="btn btn-primary" style="width:210px;">Mettre à jour</button>
        <button class="btn btn-secondary" style="width:210px;">Annuler</button>
    </div>
</form>

@endsection
