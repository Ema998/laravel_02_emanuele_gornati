<x-layout>
    <header class="container-fluid">
        <div class="row h-100">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <h1 class="fw-bold text-center display-1 text-color">GAMELAND</h1>
                @if (session('success'))
                    <div class="alert alert-primary" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
        </div>
    </header>
</x-layout>