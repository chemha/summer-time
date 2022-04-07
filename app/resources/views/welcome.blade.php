@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100"
                                src="https://i.picsum.photos/id/1016/536/354.jpg?hmac=m5FsN3bOtgjqQ29t20Rdjqeew6k7yyxOiEk2D5mycTA"
                                alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100"
                                src="https://i.picsum.photos/id/264/536/354.jpg?hmac=Kw8G_8RzbNOCCkkTOSRjpvdK7rk1ApMcWlkJW7OuRVk"
                                alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100"
                                src="https://i.picsum.photos/id/348/536/354.jpg?hmac=Klqfo5P01TNScuZ8e8j2qJeO_xdd3MB_QA5mJ-MxI7U"
                                alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">

                        <script>
                            $('.carousel').carousel();
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
