@extends('layouts.front')

@section('title', 'Inicio')
@section('cssExtras')
	<link rel="stylesheet" href="{{asset('css/index.css')}}">
	<link rel="stylesheet" href="{{ asset('vendor/owlCarousel/assets/owl.carousel.css') }}">
	{{-- <link rel="stylesheet" href="{{ asset('css/owlcarousel/owl.theme.default.min.css') }}"> --}}
@endsection

@section('styleExtras')

@endsection

@include('layouts.partials.headerP')

@section('content')
<section>
    <div class="container-fluid">
        <div class="row">
            <div id="carousel">
                <div>
                    <div class="card border-0">
                        <img src="{{ asset("imgTmp/126.png") }}" alt="126">
                        <div class="card-body border-start border-end border-dark">
                            <h5 class="card-title">Consultoria TI</h5>
                            <p><img src="{{ asset("imgTmp/048.png") }}" alt="48"></p>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta pariatur deleniti, molestias neque recusandae natus quidem distinctio, maxime odio omnis eum, laborum dolorem corrupti totam saepe debitis facilis minima nemo.</p>
                            <p class="text-end"><a href="#" class="btn btn-outlink-light">más <i class="fa-regular fa-greater-than"></i></a></p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card border-0">
                        <img src="{{ asset("imgTmp/123-014.png") }}" alt="123-014"> 
                        <div class="card-body border-start border-end border-dark">
                            <h5 class="card-title">Cableado Estructurado</h5>
                            <p><img src="{{ asset("imgTmp/048.png") }}" alt="48"></p>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta pariatur deleniti, molestias neque recusandae natus quidem distinctio, maxime odio omnis eum, laborum dolorem corrupti totam saepe debitis facilis minima nemo.</p>
                            <p class="text-end"><a href="#" class="btn btn-outlink-light">más <i class="fa-regular fa-greater-than"></i></a></p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card border-0">
                        <img src="{{ asset("imgTmp/125.png") }}" alt="125">
                        <div class="card-body border-start border-end border-dark">
                            <h5 class="card-title">Nubes Privadas</h5>
                            <p><img src="{{ asset("imgTmp/048.png") }}" alt="48"></p>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta pariatur deleniti, molestias neque recusandae natus quidem distinctio, maxime odio omnis eum, laborum dolorem corrupti totam saepe debitis facilis minima nemo.</p>
                            <p class="text-end"><a href="#" class="btn btn-outlink-light">más <i class="fa-regular fa-greater-than"></i></a></p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card border-0">
                        <img src="{{ asset("imgTmp/123-010.png") }}" alt="123-010">
                        <div class="card-body border-start border-end border-dark">
                            <h5 class="card-title">Soporte</h5>
                            <p><img src="{{ asset("imgTmp/048.png") }}" alt="48"></p>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta pariatur deleniti, molestias neque recusandae natus quidem distinctio, maxime odio omnis eum, laborum dolorem corrupti totam saepe debitis facilis minima nemo.</p>
                            <p class="text-end"><a href="#" class="btn btn-outlink-light">más <i class="fa-regular fa-greater-than"></i></a></p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card border-0">
                        <img src="{{ asset("imgTmp/126.png") }}" alt="126">
                        <div class="card-body border-start border-end border-dark">
                            <h5 class="card-title">Consultoria TI</h5>
                            <p><img src="{{ asset("imgTmp/048.png") }}" alt="48"></p>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta pariatur deleniti, molestias neque recusandae natus quidem distinctio, maxime odio omnis eum, laborum dolorem corrupti totam saepe debitis facilis minima nemo.</p>
                            <p class="text-end"><a href="#" class="btn btn-outlink-light">más <i class="fa-regular fa-greater-than"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>	
        </div>
    </div>

    <div class="container py-3 bg-black text-white mb-5">
        <div class="row">
            <div class="col">
                <div class="mx-auto text-center">
                    <button id="btn-slick-2" class="btn btn-outline-link text-center" style="color: orange; font-size: 12px; background-color: transparent;">
                        <div>
                            <i class="fa-solid fa-bars"></i>
                            <i class="fa-solid fa-bars"></i>
                            <i class="fa-solid fa-bars"></i>
                        </div>
                    </button>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <img src="{{ asset("imgTmp/018.png") }}" alt="018" style="-webkit-filter: invert(100%) !important;">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <p class="display-4">Conoce nuestro catalogo de<p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto text-center">
                <p class="display-2">SERVICIOS</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <p class="text-center">
                   Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus earum molestiae ut praesentium ad vero, excepturi non explicabo et natus.
                </p>
                <p class="text-center">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem debitis cupiditate, vel atque incidunt reprehenderit accusamus inventore possimus quisquam id, repellat eos, ullam minima animi nemo. Odit voluptates unde eaque.
                </p>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-6 mx-auto text-center">
                <button type="submit" class="btn btn-outlink-white bg-white text-black btn-lg rounded-pill px-4">Ver todos</button>
            </div>
        </div>
    </div>
</section>

<main class="mt-5 mb-5">
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col text-center">
                <h1 class="display-4">Hacemos equipo con los mejores</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto text-center">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, possimus. Eum commodi facere ipsum alias.
                </p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-6 mx-auto">
                <div class="row">
                    <div class="col-md-3"><img src="{{ asset("imgTmp/036.png") }}" alt="036"></div>
                    <div class="col-md-3"><img src="{{ asset("imgTmp/038.png") }}" alt="038"></div>
                    <div class="col-md-3"><img src="{{ asset("imgTmp/037.png") }}" alt="037"></div>
                    <div class="col-md-3"><img src="{{ asset("imgTmp/035.png") }}" alt="035"></div>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col text-center">
                Boton Carrusel
            </div>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col-md-6 mx-auto text-end">
                <img src="{{ asset("imgTmp/Presentación1.png") }}" alt="Presentación1" width="50%" height="100%">
            </div>
            <div class="col-md-6 mt-5 mx-auto">
                <div class="row">
                    <div class="col-md-6">
                        <p class="display-5">¡Agradecemos su confianza!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor saepe excepturi, inventore, quas libero dolore odio illo deserunt eos, at voluptate neque architecto eveniet ullam. Totam accusantium aliquid deleniti nobis!
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-9 mx-auto">
                <div class="row">
                    <div class="col-md-3 mx-auto px-0 text-center">
                        <div class="row">
                            <div class="col">
                                <img src="{{ asset("imgTmp/092.png") }}" alt="092">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus consectetur vero explicabo, ut obcaecati aspernatur.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                ANA PAULA COVARRUBIAS
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mx-auto px-0 text-center">
                        <div class="row">
                            <div class="col">
                                <img src="{{ asset("imgTmp/092.png") }}" alt="092">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus consectetur vero explicabo, ut obcaecati aspernatur.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                ANA PAULA COVARRUBIAS
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mx-auto px-0 text-center">
                        <div class="row">
                            <div class="col">
                                <img src="{{ asset("imgTmp/092.png") }}" alt="092">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus consectetur vero explicabo, ut obcaecati aspernatur.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                ANA PAULA COVARRUBIAS
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('jqueryExtra')
<script>
    $(document).ready(function() 
    {
          $('#carousel').slick({
              slidesToShow: 4,
              slidesToScroll: 1,
              nextArrow: '#btn-slick-2',
              responsive: [
                {
                    breakpoint: 1008,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
          });
    });
</script>
@endsection
