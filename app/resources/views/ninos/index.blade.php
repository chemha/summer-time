@extends('layouts.app')

@section('title')
    <title>Summer Time - Niños</title>
@endsection

<!-- CSS para datatables -->
@section('css')
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

<!-- Scripts para datatables y modales -->
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

    <script src="{{ asset('js/ninos.js') }}"></script>

    </script>
@endsection

@section('content')
    <div class="container-fluid">

        <h1>Listado de registros de niños</h1>

        @if (session('alert'))
            <div class="alert alert-{{ session('alert')['type'] }}" role="alert">
                {{ session('alert')['message'] }}
            </div>
        @endif

        <a href="{{ route('ninos.create') }}" class="btn btn-primary">Crear nino</a>

        <table id="ninos" class="table table-striped table-bordered shadow-lg table-hover">
            <thead class="">
                <tr>

                    <!-- Campos ocultos -->
                    <!-- 0 -->
                    <th class="d-none" scope="col">Edad</th>
                    <!-- 1 -->
                    <th class="d-none" scope="col">Hermanos</th>
                    <!-- 2 -->
                    <th class="d-none" scope="col">Medicacion</th>
                    <!-- 3 -->
                    <th class="d-none" scope="col">Especial</th>
                    <!-- 4 -->
                    <th class="d-none" scope="col">Observaciones Medicas</th>
                    <!-- 5 -->
                    <th class="d-none" scope="col">Email</th>
                    <!-- 6 -->
                    <th class="d-none" scope="col">Telefono 2</th>
                    <!-- 7 -->
                    <th class="d-none" scope="col">Pago</th>
                    <!-- 8 -->
                    <th class="d-none" scope="col">Autorizacion datos</th>
                    <!-- 9 -->
                    <th class="d-none" scope="col">Autorizacion fotos</th>
                    <!-- 10 -->
                    <th class="d-none" scope="col">Anotaciones</th>

                    <!-- Campos visibles -->
                    <!-- 11 -->
                    <th scope="col">Nombre</th>
                    <!-- 12 -->
                    <th scope="col">Apellidos</th>
                    <!-- 13 -->
                    <th scope="col">Tutor</th>
                    <!-- 14 -->
                    <th scope="col">Telefono 1</th>
                    <!-- 15 -->
                    <th scope="col">Estado del recibo</th>
                    <!-- 16 -->
                    <th scope="col">Grupo</th>
                    <!-- 17 -->
                    <th scope="col">Horario</th>
                    <!-- 18 -->
                    <th scope="col">Quincena 1</th>
                    <!-- 19 -->
                    <th scope="col">Quincena 2</th>
                    <!-- 20 -->
                    <th scope="col">Quincena 3</th>
                    <!-- 21 -->
                    <th scope="col">Quincena 4</th>

                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($ninos as $nino)
                    <tr>
                        <!-- Campos ocultos -->
                        <td class="d-none">{{ $nino->edad }}</td>
                        <td class="d-none">{{ $nino->hermanos }}</td>
                        <td class="d-none">{{ $nino->medicacion }}</td>
                        <td class="d-none">{{ $nino->especial }}</td>
                        <td class="d-none">{{ $nino->observacionesMedicas }}</td>
                        <td class="d-none">{{ $nino->email }}</td>
                        <td class="d-none">{{ $nino->telefono2 }}</td>
                        <td class="d-none">{{ $nino->pago }}</td>
                        <td class="d-none">{{ $nino->datos }}</td>
                        <td class="d-none">{{ $nino->fotos }}</td>
                        <td class="d-none">{{ $nino->anotaciones }}</td>

                        <!-- Campos visibles -->
                        <td>{{ $nino->nombre }}</td>
                        <td>{{ $nino->apellidos }}</td>
                        <td>{{ $nino->tutor }}</td>
                        <td>{{ $nino->telefono1 }}</td>
                        <td>{{ $nino->recibo }}</td>
                        <td>Grupo {{ $nino->grupo }}</td>
                        <td>{{ $nino->horario }}</td>
                        <td>{{ $nino->quincena1 }}</td>
                        <td>{{ $nino->quincena2 }}</td>
                        <td>{{ $nino->quincena3 }}</td>
                        <td>{{ $nino->quincena4 }}</td>

                        <td>
                            <a id="btnEditar" href="{{ route('ninos.edit', $nino->id) }}" class="btn btn-primary">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>
                        <td>
                            <form method="POST" action="{{ route('ninos.destroy', $nino->id) }}">
                                @csrf
                                @method('DELETE')
                                <button id="btnBorrar" type="button" class="btn btn-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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
