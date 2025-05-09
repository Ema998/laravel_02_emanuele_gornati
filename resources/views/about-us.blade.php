<x-layout>
        <header class="container-fluid">
            <div class="row h-100 justify-content-around align-items-center">
                <div class="col-6">
                    <h1 class="text-color text-center">CHI SIAMO</h1>
                </div>
            </div>
        </header>
        <section>
            <div class="container" style="height: 70vh">
                <div class="row h-100 justify-content-around align-items-center">
                    @foreach ($users as $user)
                        <div class="col-12 col-md-4">
                           <x-about-us-card userName="{{ $user['name'] }}" userSurname="{{ $user['surname']}}" userRole="{{ $user['role'] }}" />
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
</x-layout>