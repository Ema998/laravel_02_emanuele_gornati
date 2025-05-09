<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$prodottoName}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{$prodottoDescription}}</h6>
        <h6 class="card-subtitle mb-2 text-muted">{{$prodottoPrice}}</h6>
        <a href="{{route('prodottiDetail', ['prodotto'=>$prodottoId])}}" class="card-link"> Scopri di più</a>                            
    </div>
</div>