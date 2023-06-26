@include('nav')
<br>
<div class="container">
    <div class="col-sm-12">
        @if(sizeof($seances)==0)
    <h1>Aucune séance !</h1>
@else
    <h3>Liste des programmations</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Cours_id</th>
                <th>Date_debut</th>
                <th>Date_fin</th>
                <th>Modification</th>
                <th>Suppression</th>
            </tr>
        </thead>
        <tbody>
            @foreach($seances as $seance)
                <tr>
                    <td>{{$seance->id}}</td>
                    <td>{{$seance->cours_id}}</td>
                    <td>{{$seance->date_debut}}</td>
                    <td>{{$seance->date_fin}}</td>
                    <td><a href="{{route('modifierseancesform',['id'=>$seance->id])}}" class="btn btn-primary">Modifier</a></td>
                    <td><a href="{{route('supprimerseancesform',['id'=>$seance->id])}}" class="btn btn-danger">Supprimer</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
{{$seances->links()}}

    </div>
</div>
