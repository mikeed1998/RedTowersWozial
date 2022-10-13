@extends('layouts.front')

@section('title', 'Contacto')
{{-- @section('cssExtras')@endsection --}}

@include('layouts.partials.header')

@section('content')
<main>
    <div class="container-fluid bg-black text-white">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="row py-3">
                    <div class="col text-start">
                        <p class="display-5">
                            Estamos pendientes de ti...
                        </p>
                    </div>
                </div>
                <div class="row mt-1 mb-2">
                    <div class="col text-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique fuga laudantium odio ratione assumenda at?</p>
                    </div>
                </div>
                <div class="row mt-1 mb-2">
                    <div class="col-md-4">
                        <input type="text" class="form-control bg-black" placeholder="NOMBRE">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control bg-black" placeholder="WHATSAPP">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control bg-black" placeholder="CORREO">
                    </div>
                </div>
                <div class="row mt-1 mb-2">
                    <div class="col">
                        <input type="text" class="form-control bg-black" placeholder="">
                    </div>
                </div>
                <div class="row mt-1 mb-2">
                    <div class="col-md-4 text-center mx-auto">
                        <a href="#" class="btn btn-outlink-light bg-white rounded-pill border border-dark btn-block px-5">enviar</a>
                    </div>
                </div>  
            </div>
            <div class="col-md-4 mx-auto">
                <div class="row">
                    <div class="col">
                        <br><br><br><br><br><br><br><br><br><br><br>
                        <p class="m-0 text-end">Avenida Lapizlazuli 2074 int3</p>
                        <p class="m-0 text-end">Residencial victoria, Guadalajara</p>
                        <p class="m-0 text-end">Jalisco, México</p>
                        <p class="m-0 text-end">contacto@rtc.com</p>
                        <p class="m-0 text-end">3338096501</p>
                    </div>
                </div>
            </div>
        </div>	
        <div class="row py-5">
            <div class="col px-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d59726.325260510064!2d-103.35974389558793!3d20.673837004762593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1660254201213!5m2!1ses-419!2smx" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</main>
@endsection

