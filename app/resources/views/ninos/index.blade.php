@extends('layouts.app')

@section('title')
    <title>Summer Time - Niños</title>
@endsection

<!-- CSS para datatables -->
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
@endsection

<!-- Scripts para datatables y modales -->
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>

    <script src="{{ asset('js/ninos.js') }}"></script>
@endsection

@section('content')
    <div class="container-fluid">

        <h1>Listado de registros de niños</h1>

        @if (session('alert'))
            <div class="alert alert-{{ session('alert')['type'] }}" role="alert">
                {{ session('alert')['message'] }}
            </div>
        @endif

        <a href="{{ route('ninos.create') }}" class="btn btn-secondary mb-2">Crear nuevo registro</a>

        <table id="tabla-ninos" class="table table-bordered table-striped shadow-lg w-100">
            <thead class="">
                <tr>
                    <!-- Campos ocultos -->
                    <!-- 0 -->
                    <th class="d-none">Edad</th>
                    <!-- 1 -->
                    <th class="d-none">Hermanos</th>
                    <!-- 2 -->
                    <th class="d-none">Medicacion</th>
                    <!-- 3 -->
                    <th class="d-none">Especial</th>
                    <!-- 4 -->
                    <th class="d-none">Observaciones Medicas</th>
                    <!-- 5 -->
                    <th class="d-none">Email</th>
                    <!-- 6 -->
                    <th class="d-none">Telefono 2</th>
                    <!-- 7 -->
                    <th class="d-none">Pago</th>
                    <!-- 8 -->
                    <th class="d-none">Autorizacion datos</th>
                    <!-- 9 -->
                    <th class="d-none">Autorizacion fotos</th>
                    <!-- 10 -->
                    <th class="d-none">Anotaciones</th>

                    <!-- Campos visibles -->
                    <!-- 11 -->
                    <th>Nombre</th>
                    <!-- 12 -->
                    <th>Apellidos</th>
                    <!-- 13 -->
                    <th>Madre / Padre / Tutor</th>
                    <!-- 14 -->
                    <th>Telefono 1</th>
                    <!-- 15 -->
                    <th>Estado del recibo</th>
                    <!-- 16 -->
                    <th>Grupo</th>
                    <!-- 17 -->
                    <th>Horario</th>
                    <!-- 18 -->
                    <th>Q1</th>
                    <!-- 19 -->
                    <th>Q2</th>
                    <!-- 20 -->
                    <th>Q3</th>
                    <!-- 21 -->
                    <th>Q4</th>

                    <th class="sm">Acción</th>
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
                        <td class="text-center">{{ $nino->nombre }}</td>
                        <td class="text-center">{{ $nino->apellidos }}</td>
                        <td class="text-center">{{ $nino->tutor }}</td>
                        <td class="text-center">{{ $nino->telefono1 }}</td>
                        <td class="text-center">{{ $nino->recibo }}</td>
                        <td class="text-center">Grupo {{ $nino->grupo }}</td>
                        <td class="text-center">{{ $nino->horario }}</td>
                        <td class="text-center">
                            <span class="d-none">{{ $nino->quincena1 }}</span>
                            @if ($nino->quincena1 == 1)
                                <i class="bi bi-check-square-fill"></i>
                            @else
                                <i class="bi bi-x-square-fill"></i>
                            @endif
                        </td>
                        <td class="text-center">
                            <span class="d-none">{{ $nino->quincena2 }}</span>
                            @if ($nino->quincena2 == 1)
                                <i class="bi bi-check-square-fill"></i>
                            @else
                                <i class="bi bi-x-square-fill"></i>
                            @endif
                        </td>
                        <td class="text-center">
                            <span class="d-none">{{ $nino->quincena3 }}</span>
                            @if ($nino->quincena3 == 1)
                                <i class="bi bi-check-square-fill"></i>
                            @else
                                <i class="bi bi-x-square-fill"></i>
                            @endif
                        </td>
                        <td class="text-center">
                            <span class="d-none">{{ $nino->quincena4 }}</span>
                            @if ($nino->quincena4 == 1)
                                <i class="bi bi-check-square-fill"></i>
                            @else
                                <i class="bi bi-x-square-fill"></i>
                            @endif
                        </td>

                        <td>
                            <div class="row">
                                <div class="col">
                                    <button id="btnVer" class="btn btn-primary">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                                <div class="col">
                                    <a id="btnEditar" href="{{ route('ninos.edit', $nino->id) }}"
                                        class="btn btn-warning">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                </div>
                                <div class="col">
                                    <form method="POST" action="{{ route('ninos.destroy', $nino->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button id="btnBorrar" type="button" class="btn btn-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
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
                            <h5>Datos identificativos</h5>
                            <ul class="list-unstyled">
                                <li>Nombre: <span id="nombre"></span></li>
                                <li>Apellidos: <span id="apellidos"></span></li>
                                <li>Edad: <span id="edad"></span></li>
                                <li>Hermanos: <span id="hermanos"></span></li>
                                <li>Tutor: <span id="tutor"></span></li>
                            </ul>
                            <h5>Datos de contacto</h5>
                            <ul class="list-unstyled">
                                <li>Email: <span id="email"></span></li>
                                <li>Teléfono 1: <span id="telefono1"></span></li>
                                <li>Teléfono 2: <span id="telefono2"></span></li>
                            </ul>
                            <h5>Datos médicos</h5>
                            <ul class="list-unstyled">
                                <li>¿Medicación?: <span id="medicacion"></span></li>
                                <li>¿Especial?: <span id="especial"></span></li>
                                <li>Observaciones médicas: <span id="observacionesMedicas"></span></li>
                            </ul>
                        </div>
                        <div class="col">
                            <h5>Datos de la escuela</h5>
                            <ul class="list-unstyled">
                                <li>Grupo: <span id="grupo"></span></li>
                                <li>Horario: <span id="horario"></span></li>
                                <li>¿Quincena 1?: <span id="quincena1"></span></li>
                                <li>¿Quincena 2?: <span id="quincena2"></span></li>
                                <li>¿Quincena 3?: <span id="quincena3"></span></li>
                                <li>¿Quincena 4?: <span id="quincena4"></span></li>
                                <li>¿Autorización datos?: <span id="datos"></span></li>
                                <li>¿Autorización fotos?: <span id="fotos"></span></li>
                                <li>Anotaciones: <span id="anotaciones"></span></li>
                                <li>Estado del recibo: <span id="recibo"></span></li>
                                <li>Pago: <span id="pago"></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
