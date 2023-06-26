@extends('modele')

@section('title', 'Creation des cours')

@section('contenu')
    @include('nav')
    <div class="container">
        <div class="col-sm-12">
            <form action="{{route('creercours')}}" method="post" class="mt-3">
                <h2>Creation des cours</h2>
                @csrf
                <div class="mb-3">
                    <label for="intitule" class="form-label">Intitule</label>
                    <input type="text" name="intitule" class="form-control" placeholder="Intitule">
                </div>
                <button type="submit" class="btn btn-primary">Creer</button>
            </form>
        </div>
    </div>
@endsection
