<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$userName . " " . $userSurname}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{ $userRole}}</h6>
        <a href="{{route('aboutUsDetail', ['name'=>$userName])}}" class="card-link"> Scopri di più</a>
    </div>
</div>