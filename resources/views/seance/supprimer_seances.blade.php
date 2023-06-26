@include('nav')
<div class="container"><div class="col-sm-12">
    <p>Voulez-vous supprimer la programmation {{$seances->id}} ?</p>
    <form action="{{route('supprimerseances',['id'=>$seances->id])}}" method="post">
        @csrf
        <input type="submit" class="btn btn-danger" value="Supprimer">
    </form>
    <br>
    <a href="{{route('listeseances')}}" class="btn btn-secondary">Annuler</a>

</div></div>
