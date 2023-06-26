@extends('modele')

@section('title', 'Liste des etudiants')

@section('contenu')
    @include('nav')
    <br>
    <div class="container"><div class="col-sm-12">
        @if(sizeof($etudiants)==0)
        <h1>Aucun etudiant !</h1>
    @else
        <form action="{{route('rechercheretudiants')}}" method="get" class="mb-3">
            @csrf
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Rechercher un etudiant..">
                <button type="submit" class="btn btn-primary">Recherche</button>
            </div>
        </form>
        <h3>Liste des etudiants</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Numero matricule</th>
                    <th>Modification</th>
                    <th>Suppression</th>
                    <th>Programmation</th>
                </tr>
            </thead>
            <tbody>
                @foreach($etudiants as $etudiant)
                    <tr>
                        <td>{{$etudiant->id}}</td>
                        <td>{{$etudiant->nom}}</td>
                        <td>{{$etudiant->prenom}}</td>
                        <td>{{$etudiant->noet}}</td>
                        <td><a href="{{route('modifieretudiantsform',['id'=>$etudiant->id])}}" class="btn btn-primary">Modifier</a></td>
                        <td><a href="{{route('supprimeretudiantsform',['id'=>$etudiant->id])}}" class="btn btn-danger">Supprimer</a></td>
                        <td><a href="{{route('listepresencesetudiant',['id'=>$etudiant->id])}}" class="btn btn-primary">Programmation</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$etudiants->links()}}
    @endif
    </div></div>
@endsection
