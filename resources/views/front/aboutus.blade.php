@extends('layouts.front')

@section('title', 'Nosotros')
@section('styleExtras')
	<link rel="stylesheet" href="{{asset('css/index.css')}}">
	{{-- <link rel="stylesheet" href="{{asset('css/nosotros.css')}}"> --}}
@endsection

@include('layouts.partials.header')

@section('content')
<style>
    .fondo {
       background: url('/imgTmp/045.png'); 
    }
</style>

<main>
    <div class="container-fluid bg-black text-white py-5 px-5">
        <div class="row py-5">
            <div class="col-md-6">
                <div class="row justify-content-start">
                    <div class="col">
                        <p class="display-4">Nosotros</p>
                    </div>
                </div>
                <div class="row justify-content-start">
                    <div class="col">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi enim, deleniti ducimus quibusdam accusantium ullam placeat exercitationem dolor totam voluptate eos, dicta porro quisquam non ipsum, temporibus culpa nobis earum quam a optio iusto fuga. Quidem nihil obcaecati illo exercitationem?
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-end">
                <img class="h-100" src="{{ asset("imgTmp/123-007.png") }}" alt="123-007" style="-webkit-transform: scaleX(-1); transform: scaleX(-1);">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 text-center">
                <img class="h-50" src="{{ asset("imgTmp/123-007.png") }}" alt="123-007">
            </div>
            <div class="col-md-6">
                <div class="row py-3">
                    <div class="col text-end">
                        <p class="display-4">Visión</p>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col text-end">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem consequatur perspiciatis magni minus aspernatur cupiditate? Praesentium saepe distinctio, quas veritatis optio, debitis eaque eius nisi quos iste, rerum aperiam facilis reiciendis provident! Qui exercitationem voluptates obcaecati eos, perspiciatis dolores facere!
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <p class="display-4">Nuestros Valores</p>
            </div>
        </div>
    </div>
</main>

<section>
    <div class="fondo container-fluid">
        <br><br><br><br><br>
        <div class="row mx-auto">
            <div class="col-md-12 mx-auto">
                <div class="row">
                    <div class="col-md-3 mx-auto px-0 text-center">
                        <div class="row py-2">
                            <div class="col">
                                <img src="{{ asset("imgTmp/092.png") }}" alt="092">
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus consectetur vero explicabo, ut obcaecati aspernatur.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mx-auto px-0 text-center">
                        <div class="row py-2">
                            <div class="col">
                                <img src="{{ asset("imgTmp/092.png") }}" alt="092">
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus consectetur vero explicabo, ut obcaecati aspernatur.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mx-auto px-0 text-center">
                        <div class="row py-2">
                            <div class="col">
                                <img src="{{ asset("imgTmp/092.png") }}" alt="092">
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus consectetur vero explicabo, ut obcaecati aspernatur.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
</section>
@endsection


