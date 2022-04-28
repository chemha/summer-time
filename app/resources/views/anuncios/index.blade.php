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

    </script>
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

        <table id="anuncios" class="table table-striped table-bordered shadow-lg table-hover">
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
                            <a id="btnEditar" href="{{ route('anuncios.edit', $anuncio->id) }}" class="btn btn-primary">
                                Editar
                            </a>
                        </td>
                        <td>
                            <form method="POST" action="{{ route('anuncios.destroy', $anuncio->id) }}">
                                @csrf
                                @method('DELETE')
                                <button id="btnBorrar" type="submit" class="btn btn-danger">
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
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCrearLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('anuncios.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <label for="titulo">Título</label>
                        <input type="text" name="titulo" required>
                        <label for="descripcion">Descripción</label>
                        <textarea name="descripcion" id="descripcion" cols="30" rows="10" required></textarea>
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
    <div class="modal" id="modalVer" tabindex="-1" aria-labelledby="modalVerLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalVerLabel">Visualizar registro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li>Nombre: <span id="nombre">prueba</span></li>
                                <li>Apellidos: <span id="apellidos">prueba</span></li>
                                <li>Edad: <span id="edad">prueba</span></li>
                                <li>Hermanos: <span id="hermanos">prueba</span></li>
                                <li>¿Medicación?: <span id="medicacion">prueba</span></li>
                                <li>¿Especial?: <span id="especial">prueba</span></li>
                                <li>Observaciones médicas: <span id="observacionesMedicas">prueba</span></li>
                                <li>Tutor: <span id="tutor">prueba</span></li>
                                <li>Email: <span id="email">prueba</span></li>
                                <li>Teléfono 1: <span id="telefono1">prueba</span></li>
                                <li>Teléfono 2: <span id="telefono2">prueba</span></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li>Grupo: <span id="grupo">prueba</span></li>
                                <li>Horario: <span id="horario">prueba</span></li>
                                <li>¿Quincena 1?: <span id="quincena1">prueba</span></li>
                                <li>¿Quincena 2?: <span id="quincena2">prueba</span></li>
                                <li>¿Quincena 3?: <span id="quincena3">prueba</span></li>
                                <li>¿Quincena 4?: <span id="quincena4">prueba</span></li>
                                <li>¿Autorización datos?: <span id="datos">prueba</span></li>
                                <li>¿Autorización fotos?: <span id="fotos">prueba</span></li>
                                <li>Anotaciones: <span id="anotaciones">prueba</span></li>
                                <li>Estado del recibo: <span id="recibo">prueba</span></li>
                                <li>Pago: <span id="pago">prueba</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- Scripts para datatables y modales -->
