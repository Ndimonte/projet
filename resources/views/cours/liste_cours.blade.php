@extends('modele')

@section('title', 'Liste des cours')

@include('nav')
@section('contenu')
    <br>
    @if(sizeof($cours)==0)
        <h1>Aucun cours !</h1>
    @else
        <form action="{{route('recherchercours')}}" method="get" class="mb-3">
            @csrf
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Rechercher un cours...">
                <button type="submit" class="btn btn-primary">Recherche</button>
            </div>
        </form>

        <table class="table">
            <h3>Liste des cours</h3>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Intitule</th>
                    <th>Modification</th>
                    <th>Suppression</th>
                    <th>Etudiants</th>
                    <th>Enseignant</th>
                    <th>Liste</th>
                    <th>Liste</th>
                    <th>Associer plusieurs</th>
                    <th>Dissocier plusieurs</th>
                    <th>Programmes</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cours as $cour)
                    <tr>
                        <td>{{$cour->id}}</td>
                        <td>{{$cour->intitule}}</td>
                        <td><a href="{{route('modifiercoursform',['id'=>$cour->id])}}" class="btn btn-primary mt-2">Modifier</a></td>
                        <td><a href="{{route('supprimercoursform',['id'=>$cour->id])}}" class="btn btn-danger mt-2">Supprimer</a></td>
                        <td>
                            <a href="{{route('associeretudiantscoursform',['id'=>$cour->id])}}" class="btn btn-primary mt-2">Associer</a>/
                            <a href="{{route('dissocieretudiantform',['id'=>$cour->id])}}" class="btn btn-primary mt-2">Dissocier</a>
                        </td>
                        <td>
                            <a href="{{route('associerenseignantform',['id'=>$cour->id])}}" class="btn btn-primary mt-2">Associer</a>/
                            <a href="{{route('dissocierenseignantform',['id'=>$cour->id])}}" class="btn btn-primary mt-2">Dissocier</a>
                        </td>
                        <td><a href="{{route('listeetudiantsassocies',['id'=>$cour->id])}}" class="btn btn-primary mt-2">Etudiant</a></td>
                        <td><a href="{{route('listeenseignantassocies',['id'=>$cour->id])}}" class="btn btn-primary mt-2">Enseignant</a></td>
                        <td>
                            <a href="{{route('associerplusieursetudiantform',['id'=>$cour->id])}}" class="btn btn-primary mt-2">Etudiant</a>/
                            <a href="{{route('associerplusieursenseignantform',['id'=>$cour->id])}}" class="btn btn-primary mt-2">Enseignant</a>
                        </td>
                        <td>
                            <a href="{{route('dissocierplusieursetudiantform',['id'=>$cour->id])}}" class="btn btn-primary mt-2">Etudiant</a>/
                            <a href="{{route('dissocierplusieursenseignantform',['id'=>$cour->id])}}" class="btn btn-primary">Enseignant</a>
                        </td>
                        <td>
                            <a href="{{route('creerseancesform',['id'=>$cour->id])}}" class="btn btn-primary mt-2">Ajouter</a>/
                            <a href="{{route('listeseancescours',['id'=>$cour->id])}}" class="btn btn-primary mt-2">Liste</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
