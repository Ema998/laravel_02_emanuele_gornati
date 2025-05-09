<x-layout>
        <header class="container-fluid">
            <div class="row h-100 align-items-center justify-content-around">
                <div class="col-12 h-25 justify-content-center align-items-center">
                    <h3 class="text-color text-center display-5">CONTATTI</h3>
                </div>
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 text-center">
                        <h4>Per qualsiasi informazione non esitare a contattarci</>
                </div>
                <div class="row justify-content-center align-items-center">
                    <div class="clo-12 col-md-6">
                    <form class="px-5 py-3 box-bg shadow rounded" method="POST" action="{{ route('contatti.submit') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label">inserisci il tuo nome</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">inserisci la tua email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">scrivici i tuoi suggerimenti</label>
                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-dark">invia</button>
                    </form>
                    </div>
                </div>
                <div class="col-md-3 text-center box d-flex flex-column justify-content-center align-items-center">
                    <div class="row">
                    <div class="col-12">
                        <i class="icon bi bi-whatsapp"></i>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-12">
                        <p>contattaci su whatsapp</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-3 text-center box d-flex flex-column justify-content-center align-items-center">
                <div class="row">
                <div class="col-12">
                        <i class="icon bi bi-instagram"></i>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-12">
                        <p>seguici su instagram</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-3 text-center box d-flex flex-column justify-content-center align-items-center">
                    <div class="row">
                        <div class="col-12">
                            <i class="icon bi bi-facebook"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p>seguici su facebook</p>
                        </div>
                    </div>
                </div>
        </header>
</x-layout>