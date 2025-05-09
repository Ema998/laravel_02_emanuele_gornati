<x-layout>
    <header class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="row">
                <h2 class="text-center display-5">{{$prodotto['name']}}</h2>
            </div>
            <div class="col-md-6 div-col-12 justify-content-center align-items-center">
                <h3 class="text-center">Nome:{{$prodotto['name']}}</h3>
                <h4 class="text-cenetr">Descrizione:{{$prodotto['description']}}</h4>
                <h4 class="text-cenetr">Prezzo:{{$prodotto['price']}}</h4>
            </div>
        </div>
    </header>
</x-layout>