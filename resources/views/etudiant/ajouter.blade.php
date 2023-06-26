@extends('modele')

@section('title', 'Creation des etudiants')

@section('contenu')
    @include('nav')
    <div class="container"><div class="col-sm-12">
        <form action="{{route('creeretudiants')}}" method="post" class="mt-3">
            <h2>Creation des etudiants</h2>
            @csrf
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" name="nom" class="form-control" placeholder="Nom">
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prenom</label>
                <input type="text" name="prenom" class="form-control" placeholder="Prenom">
            </div>
            <div class="mb-3">
                <label for="noet" class="form-label">Numero matricule</label>
                <input type="integer" name="noet" class="form-control" placeholder="Numero matricule">
            </div>
            <button type="submit" class="btn btn-primary">Creer</button>
        </form>
    </div></div>
@endsection
