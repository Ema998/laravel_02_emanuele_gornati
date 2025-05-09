<x-layout>
    <header class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-md-6 div-col-12">
                <h3 class="text-center">{{$user['name']}} {{$user['surname']}}</h3>
                <h4 class="text-cenetr">{{$user['role']}}</h4>
            </div>
        </div>
    </header>
</x-layout>