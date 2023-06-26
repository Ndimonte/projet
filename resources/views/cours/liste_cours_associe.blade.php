@extends('modele')

@section('title','Liste des cours associes')

@section('contenu')
@include('nav')
<div class="container">
    <br>
    <h3>Mes cours</h3>

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Intitule</th>
                <th>Liste inscris</th>
                <th>Liste</th>
                <th>Pointage</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user->cours as $cour)
            <tr>
                <td>{{$cour->id}}</td>
                <td>{{$cour->intitule}}</td>
                <td><a href="{{route('listeetudiantsassocies',['id'=>$cour->id])}}" class="btn btn-link">Etudiant</a></td>
                <td><a href="{{route('listeseancescours',['id'=>$cour->id])}}" class="btn btn-link">Programme</a></td>
                <td>
                    <a href="{{route('pointeretudiantform',['id'=>$cour->id])}}" class="btn btn-link">Etudiant</a> /
                    <a href="{{route('pointerplusieursetudiantsform',['id'=>$cour->id])}}" class="btn btn-link">Plusieurs</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
