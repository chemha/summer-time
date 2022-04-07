@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xxl">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="https://picsum.photos/1440/450" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="https://picsum.photos/1440/450" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/1440/450" class="d-block w-100" alt="...">
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
        <div class="row justify-content-center">
            <div class="col-sm">
                <div class="card">
                    <div class="card-header">Anuncio 1</div>
                    <div class="card-body">
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <div class="card-header">Anuncio 2</div>
                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
