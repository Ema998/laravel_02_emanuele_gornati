<x-layout>
        <header class="container-fluid" style="min-height: 100vh;">
            <div class="row h-100 justify-content-around align-items-center">
                <div class="row">
                    <h2 class="text-center display-5">I NOSTRI PRODOTTI</h2>
                </div>
                @foreach ($prodotti as $prodotto)
                    <div class="col-12 col-md-3">
                        <x-prodotti-card prodottoName="{{ $prodotto['name'] }}" prodottoDescription="{{ $prodotto['description'] }}" prodottoPrice="{{ $prodotto['price'] }}" prodottoId="{{ $prodotto['id'] }}" />
                    </div>
                @endforeach
            </div>
        </div>
        </header>
</x-layout>