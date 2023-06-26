@include('nav')
<div class="container">
    <div class="col-sm-12">
        <form action="{{route('modifierseances',['id'=>$seances->id])}}" method="post">
            <h3>Modification des Programmations</h3>
            @csrf
            <label for="date_debut" class="form-label">Date de début</label><br>
            <input class="form-control" type="date" name="date_debut" value="{{$seances->date_debut}}"><br>
            <label for="date_fin">Date de fin</label><br>
            <input class="form-control" type="date" name="date_fin" value="{{$seances->date_fin}}"><br>
            <br>
            <input type="submit" class="btn btn-primary" name="Modifier" value="Mettre à jour">
            <input type="submit" class="btn btn-secondary " name="Annuler" value="Annuler">
        </form>

    </div>
</div>
