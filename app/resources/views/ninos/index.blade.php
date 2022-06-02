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

        <table id="tabla-ninos" class="table table-bordered table-striped shadow-lg w-100 text-nowrap text-center">
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
                    <!-- 11 -->
                    <th scope="col" class="d-none">Recibo</th>
                    <!-- 12 -->
                    <th scope="col" class="d-none">Autor</th>

                    <!-- Campos visibles -->
                    <!-- 13 -->
                    <th scope="col">ID</th>
                    <!-- 14 -->
                    <th scope="col">Nombre</th>
                    <!-- 15 -->
                    <th scope="col">Apellidos</th>
                    <!-- 16 -->
                    <th scope="col">Madre / Padre / Tutor</th>
                    <!-- 17 -->
                    <th scope="col">Telefono 1</th>
                    <!-- 18 -->
                    <th scope="col">Grupo</th>
                    <!-- 19 -->
                    <th scope="col">Horario</th>
                    <!-- 20 -->
                    <th scope="col">Q0</th>
                    <!-- 21 -->
                    <th scope="col">Q1</th>
                    <!-- 22 -->
                    <th scope="col">Q2</th>
                    <!-- 23 -->
                    <th scope="col">Q3</th>
                    <!-- 24 -->
                    <th scope="col">Q4</th>

                    <th class="sm">Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ninos as $nino)
                    <tr>
                        <!-- Campos ocultos -->
                        <td class="d-none">{{ $nino->edad }}</td>
                        <td class="d-none">{{ $nino->hermanos }}</td>
                        <td class="d-none">
                            @if ($nino->medicacion == 1)
                                <span class="d-none">ms</span>
                                <i class="bi bi-check-square-fill"></i>
                            @else
                                <span class="d-none">mn</span>
                                <i class="bi bi-x-square-fill"></i>
                            @endif
                        </td>
                        <td class="d-none">
                            @if ($nino->especial == 1)
                                <span class="d-none">especial</span>
                                <i class="bi bi-check-square-fill"></i>
                            @else
                                <i class="bi bi-x-square-fill"></i>
                            @endif
                        </td>
                        <td class="d-none">{{ $nino->observacionesMedicas }}</td>
                        <td class="d-none">{{ $nino->email }}</td>
                        <td class="d-none">{{ $nino->telefono2 }}</td>
                        <td class="d-none">{{ $nino->pago }}</td>
                        <td class="d-none">
                            @if ($nino->datos == 1)
                                <span class="d-none">ds</span>
                                <i class="bi bi-check-square-fill"></i>
                            @else
                                <span class="d-none">dn</span>
                                <i class="bi bi-x-square-fill"></i>
                            @endif
                        </td>
                        <td class="d-none">
                            @if ($nino->fotos == 1)
                                <span class="d-none">fs</span>
                                <i class="bi bi-check-square-fill"></i>
                            @else
                                <span class="d-none">fn</span>
                                <i class="bi bi-x-square-fill"></i>
                            @endif
                        </td>
                        <td class="d-none">{{ $nino->anotaciones }}</td>
                        <td class="d-none">{{ $nino->recibo }}</td>
                        <td class="d-none">{{ App\Models\User::find($nino->user_id)->name }}</td>

                        <!-- Campos visibles -->
                        <td>{{ $nino->id }}</td>
                        <td>{{ $nino->nombre }}</td>
                        <td>{{ $nino->apellidos }}</td>
                        <td>{{ $nino->tutor }}</td>
                        <td>{{ $nino->telefono1 }}</td>
                        <td>
                            <span class="d-none">grupo{{ $nino->grupo }}</span>
                            grupo {{ $nino->grupo }}
                        </td>
                        <td>{{ $nino->horario }}</td>
                        <td>
                            @if ($nino->quincena0 == 1)
                                <span class="d-none">q0</span>
                                <i class="bi bi-check-square-fill"></i>
                            @else
                                <i class="bi bi-x-square-fill"></i>
                            @endif
                        </td>
                        <td>
                            @if ($nino->quincena1 == 1)
                                <span class="d-none">q1</span>
                                <i class="bi bi-check-square-fill"></i>
                            @else
                                <i class="bi bi-x-square-fill"></i>
                            @endif
                        </td>
                        <td>

                            @if ($nino->quincena2 == 1)
                                <span class="d-none">q2</span>
                                <i class="bi bi-check-square-fill"></i>
                            @else
                                <i class="bi bi-x-square-fill"></i>
                            @endif
                        </td>
                        <td>
                            @if ($nino->quincena3 == 1)
                                <span class="d-none">q3</span>
                                <i class="bi bi-check-square-fill"></i>
                            @else
                                <i class="bi bi-x-square-fill"></i>
                            @endif
                        </td>
                        <td>
                            @if ($nino->quincena4 == 1)
                                <span class="d-none">q4</span>
                                <i class="bi bi-check-square-fill"></i>
                            @else
                                <i class="bi bi-x-square-fill"></i>
                            @endif
                        </td>

                        <td>
                            <div class="row">
                                <div class="col">
                                    <button id="btnVer" class="btn btn-primary btn-sm">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                                @if (Auth::user()->admin == 1)
                                    <div class="col">
                                        <a id="btnEditar" href="{{ route('ninos.edit', $nino->id) }}"
                                            class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil-square btn-sm"></i>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <form method="POST" action="{{ route('ninos.destroy', $nino->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button id="btnBorrar" type="button" class="btn btn-danger btn-sm">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal para visualizar los datos -->
    <div class="modal" id="modalVer" tabindex="-1" aria-labelledby="modalVerLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalVerLabel">Visualizar datos del registro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <h5>Datos identificativos</h5>
                            <ul class="list-unstyled">
                                <li><b>Nombre: </b><span id="nombre"></span></li>
                                <li><b>Apellidos: </b><span id="apellidos"></span></li>
                                <li><b>Edad: </b><span id="edad"></span></li>
                                <li><b>Hermanos: </b><span id="hermanos"></span></li>
                                <li><b>Tutor: </b><span id="tutor"></span></li>
                            </ul>
                            <h5>Datos de contacto</h5>
                            <ul class="list-unstyled">
                                <li><b>Email: </b><span id="email"></span></li>
                                <li><b>Teléfono 1: </b><span id="telefono1"></span></li>
                                <li><b>Teléfono 2: </b><span id="telefono2"></span></li>
                            </ul>
                            <h5>Datos médicos</h5>
                            <ul class="list-unstyled">
                                <li><b>¿Medicación?: </b><span id="medicacion"></span></li>
                                <li><b>¿Especial?: </b><span id="especial"></span></li>
                                <li><b>Observaciones médicas: </b><span id="observacionesMedicas"></span></li>
                            </ul>
                        </div>
                        <div class="col">
                            <h5>Datos de la escuela</h5>
                            <ul class="list-unstyled">
                                <li><b>Grupo: </b><span id="grupo"></span></li>
                                <li><b>Horario: </b><span id="horario"></span></li>
                                <li><b>¿Quincena 1?: </b><span id="quincena1"></span></li>
                                <li><b>¿Quincena 2?: </b><span id="quincena2"></span></li>
                                <li><b>¿Quincena 3?: </b><span id="quincena3"></span></li>
                                <li><b>¿Quincena 4?: </b><span id="quincena4"></span></li>
                                <li><b>¿Autorización datos?: </b><span id="datos"></span></li>
                                <li><b>¿Autorización fotos?: </b><span id="fotos"></span></li>
                                <li><b>Anotaciones: </b><span id="anotaciones"></span></li>
                                <li><b>Estado del recibo: </b><span id="recibo"></span></li>
                                <li><b>Pago: </b><span id="pago"></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <h6 class="modal-title" id="modalVerLabel">Registro creado por: <span id="autor"></span></h6>
                </div>
            </div>
        </div>
    </div>
@endsection
