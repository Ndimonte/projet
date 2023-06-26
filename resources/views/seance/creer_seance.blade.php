
@include('nav')

<div class="container">
    <div class="col-sm-12">
        <form action="{{route('creerseances',['id'=>$cours->id])}}" method="post">
            <h3>Création des Programmations</h3>
            @csrf
            <label for="date_debut">Date de début</label><br>
            <input type="date" name="date_debut" class="form-control"><br>
            <label for="date_fin">Date de fin</label><br>
            <input type="date" name="date_fin" class="form-control"><br>
            <br>
            <button class="btn btn-primary" type="submit" value="Envoyer">Créer</button>
        </form>
    </div>
</div>
