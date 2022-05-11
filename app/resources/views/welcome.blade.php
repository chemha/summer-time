@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner  mh-100">
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
        <div class="row justify-content-center mt-3">
            <div class="col-sm">
                <div class="card bg-dark min-vh-20">
                    <div class="card-header text-white">¡Vuelve la Escuela de Verano!</div>
                    <div class="card-body text-white">
                        Vuelve la Escuela de Verano Time Centro Deportivo. Amigos, actividades, piscina, diversión,
                        aprendizaje. ¡Reserva tus plazas antes de que se agoten! En recepción o llamando al 958 82 29 25

                    </div>
                </div>
            </div>
            <div class="col-sm ">
                <div class="card bg-dark min-vh-20">
                    <div class="card-header text-white">Información</div>
                    <div class="card-body text-white">
                        ¡ATENCIÓN!
                        Este miércoles día 4 de Mayo abrimos plazo de inscripción para nuestra escuela de verano. Plazas
                        limitadas.
                        Para más información les atenderemos en nuestras instalaciones y mandanos un contacto desde esta web
                        #TimeCentroDeportivo
                        #escueladeverano
                        #deporteydiversión
                    </div>
                </div>
            </div>
            @foreach ($anuncios = DB::table('anuncios')->select()->get as $anuncio)
                <div class="col-sm ">
                    <div class="card bg-dark min-vh-20">
                        <div class="card-header text-white">
                            <div class="row">
                                <div class="col">
                                    <img class="avatar-nav circulo" src="{{ asset('img/sinavatar.jpg') }}">
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
