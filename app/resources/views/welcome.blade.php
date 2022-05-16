@extends('layouts.app')
@section('title')
    <title>Summer Time</title>
@endsection
@section('js')
    <script src="{{ asset('js/welcome.js') }}"></script>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col">
                <!-- Carrusel de imágenes -->
                <div id="carrusel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner  mh-100">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="{{ asset('img/ninos/a1.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/ninos/a2.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/ninos/a3.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/ninos/a4.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/ninos/a5.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/ninos/a6.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
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
                    <button class="carousel-control-prev" type="button" data-bs-target="#carrusel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carrusel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <h1 class="m-2">Últimas noticias y actividades</h1>

        <!-- Tarjetas para los anuncios -->
        <div class="row justify-content-center">
            @foreach ($anuncios = DB::table('anuncios')->orderBy('id', 'desc')->take(3)->get()
        as $anuncio)
                <div class="col-sm">
                    <div class="card bg-dark tarjeta mb-2">
                        <div class="card-header text-white">
                            <div class="row">
                                <h4>
                                    @if (App\Models\User::find($anuncio->user_id)->image)
                                        <img class="avatar-tarjeta circulo"
                                            src="{{ App\Models\User::find($anuncio->user_id)->image }}">
                                    @else
                                        <img class="avatar-tarjeta circulo" src="{{ asset('img/sinavatar.jpg') }}">
                                    @endif
                                    {{ $anuncio->titulo }}
                                </h4>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span>Por:
                                        {{ App\Models\User::find($anuncio->user_id)->name }}
                                    </span>
                                </div>
                                <div class="col text-right">
                                    <span>{{ date('d-m-Y', strtotime($anuncio->created_at)) }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-white">
                            <p>{{ $anuncio->descripcion }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
