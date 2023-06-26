@extends('modele')

@section('title','Refus des utilisateurs')

@section('contenu')
@include('nav')
<div class="container">
    <p>Voulez-vous supprimer l'utilisateur {{$users->login}} ?</p>
    <form action="{{route('refuserutilisateurs',['id'=>$users->id])}}" method="post">
        @csrf
        <button class="btn btn-danger" type="submit">Supprimer</button>
    </form>
    <br>
    <button class="btn btn-secondary"><a class="text-light" href="{{route('listetousutilisateurs')}}">Annuler</a></button>
</div>

@endsection
