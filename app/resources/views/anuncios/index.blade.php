@extends('layouts.app')

@section('title')
    <title>Summer Time - Anuncios</title>
@endsection

<!-- CSS para datatables -->
@section('css')
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

    <script src="{{ asset('js/anuncios.js') }}"></script>
@endsection

@section('content')
    <div class="container-fluid">

        <h1>Listado de anuncios</h1>

        @if (session('alert'))
            <div class="alert alert-{{ session('alert')['type'] }}" role="alert">
                {{ session('alert')['message'] }}
            </div>
        @endif

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCrear">
            Crear anuncio
        </button>

        <table id="tabla-anuncios" class="table table-striped table-bordered shadow-lg table-hover">
            <thead class="">
                <tr>
                    <th scope="col">Título</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($anuncios as $anuncio)
                    <tr>
                        <td>{{ $anuncio->titulo }}</td>
                        <td>{{ $anuncio->descripcion }}</td>

                        <td>
                            <button id="btnEditar" type="button" class="btn btn-primary">
                                Editar
                            </button>
                        </td>
                        <td>
                            <form method="POST" action="{{ route('anuncios.destroy', $anuncio->id) }}">
                                @csrf
                                @method('DELETE')
                                <button id="btnBorrar" type="button" class="btn btn-danger">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalCrear" tabindex="-1" aria-labelledby="modalCrearLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCrearLabel">Crear nuevo anuncio</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('anuncios.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="col">
                            <label for="titulo">Título</label>
                            <input type="text" name="titulo" required autocomplete="off" class="form-control">
                            <label for="descripcion">Descripción</label>
                            <textarea name="descripcion" id="descripcion" cols="30" rows="10" autocomplete="off" required
                                class=" form-control"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Crear anuncio</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditarLabel">Crear nuevo anuncio</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('anuncios.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="col">
                            <label for="titulo">Título</label>
                            <input type="text" name="titulo" required autocomplete="off" class="form-control">
                            <label for="descripcion">Descripción</label>
                            <textarea name="descripcion" id="descripcion" cols="30" rows="10" autocomplete="off" required
                                class=" form-control"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Crear anuncio</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </div>
@endsection

<!-- Scripts para datatables y modales -->
