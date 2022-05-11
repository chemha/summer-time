@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner  mh-100">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="{{ asset('img/ninos/a1.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="{{ asset('img/ninos/a2.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="{{ asset('img/ninos/a3.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="{{ asset('img/ninos/a4.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="{{ asset('img/ninos/a5.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="{{ asset('img/ninos/a6.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="{{ asset('img/ninos/f1.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/ninos/f2.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/ninos/f3.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/ninos/f4.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/ninos/f5.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/ninos/f6.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/ninos/f7.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/ninos/f8.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/ninos/f9.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/ninos/f10.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/ninos/f11.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/ninos/f12.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <script>
                    const myCarousel = document.querySelector('#myCarousel');
                    const carousel = new bootstrap.Carousel(myCarousel);
                </script>
            </div>
        </div>
        <h1>Ultimos 3 anuncios de nuestros empleados</h1>
        <div class="row justify-content-center mt-3">
            @foreach ($anuncios = DB::table('anuncios')->select()->take(3)->get()
        as $anuncio)
                <div class="col-sm ">
                    <div class="card bg-dark min-vh-20">
                        <div class="card-header text-white">
                            <div class="row">
                                <div class="col">
                                    @if (App\Models\User::find($anuncio->user_id)->image)
                                        <img class="avatar-nav circulo"
                                            src="{{ App\Models\User::find($anuncio->user_id)->image }}">
                                    @else
                                        <img class="avatar-nav circulo" src="{{ asset('img/sinavatar.jpg') }}">
                                    @endif
                                    <span>{{ $anuncio->titulo }}</span>
                                </div>
                                <div class="col"></div>

                            </div>
                            <div class="row">
                                <div class="col">
                                    <span>Por:
                                        {{ App\Models\User::find($anuncio->user_id)->name }}
                                    </span>
                                </div>
                                <div class="col text-right"><span>{{ $anuncio->created_at }}</span></div>
                            </div>
                        </div>
                        <div class="card-body text-white">
                            {{ $anuncio->descripcion }}
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-sm ">
                <div class="card bg-dark min-vh-20">
                    <div class="card-header text-white">
                        <div class="row">
                            <div class="col">
                                <img class="avatar-nav circulo" src="{{ asset('img/sinavatar.jpg') }}">
                                Tarjeta de prueba
                            </div>
                            <div class="col"></div>

                        </div>
                        <div class="row">
                            <div class="col">Por: Administrador</div>
                            <div class="col text-right">05/12/1942</div>
                        </div>
                    </div>
                    <div class="card-body text-white">
                        Esto es una prueba Esto es una prueba Esto es una prueba Esto es una prueba Esto es una prueba
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
