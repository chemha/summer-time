@extends('layouts.app')

<!-- CSS para datatables -->
@section('css')
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
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
                    <th scope="col">Edad</th>
                    <!-- 1 -->
                    <th scope="col">Hermanos</th>
                    <!-- 2 -->
                    <th scope="col">Medicacion</th>
                    <!-- 3 -->
                    <th scope="col">Especial</th>
                    <!-- 4 -->
                    <th scope="col">Observaciones Medicas</th>
                    <!-- 5 -->
                    <th scope="col">Email</th>
                    <!-- 6 -->
                    <th scope="col">Telefono 2</th>
                    <!-- 7 -->
                    <th scope="col">Grupo</th>
                    <!-- 8 -->
                    <th scope="col">Horario</th>
                    <!-- 9 -->
                    <th scope="col">Quincena 1</th>
                    <!-- 10 -->
                    <th scope="col">Quincena 2</th>
                    <!-- 11 -->
                    <th scope="col">Quincena 3</th>
                    <!-- 12 -->
                    <th scope="col">Quincena 4</th>
                    <!-- 13 -->
                    <th scope="col">Autorizacion datos</th>
                    <!-- 14 -->
                    <th scope="col">Autorizacion fotos</th>
                    <!-- 15 -->
                    <th scope="col">Anotaciones</th>

                    <!-- Campos visibles -->
                    <!-- 16 -->
                    <th scope="col">Nombre</th>
                    <!-- 17 -->
                    <th scope="col">Apellidos</th>
                    <!-- 18 -->
                    <th scope="col">Tutor</th>
                    <!-- 19 -->
                    <th scope="col">Telefono 1</th>
                    <!-- 20 -->
                    <th scope="col">Estado del recibo</th>
                    <!-- 21 -->
                    <th scope="col">Pago</th>

                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ninos as $nino)
                    <tr>
                        <!-- Campos ocultos -->
                        <td>{{ $nino->edad }}</td>
                        <td>{{ $nino->hermanos }}</td>
                        <td>{{ $nino->medicacion }}</td>
                        <td>{{ $nino->especial }}</td>
                        <td>{{ $nino->observacionesMedicas }}</td>
                        <td>{{ $nino->email }}</td>
                        <td>{{ $nino->telefono2 }}</td>
                        <td>{{ $nino->grupo }}</td>
                        <td>{{ $nino->horario }}</td>
                        <td>{{ $nino->quincena1 }}</td>
                        <td>{{ $nino->quincena2 }}</td>
                        <td>{{ $nino->quincena3 }}</td>
                        <td>{{ $nino->quincena4 }}</td>
                        <td>{{ $nino->datos }}</td>
                        <td>{{ $nino->fotos }}</td>
                        <td>{{ $nino->anotaciones }}</td>

                        <!-- Campos visibles -->
                        <td>{{ $nino->nombre }}</td>
                        <td>{{ $nino->apellidos }}</td>
                        <td>{{ $nino->tutor }}</td>
                        <td>{{ $nino->telefono1 }}</td>
                        <td>{{ $nino->recibo }}</td>
                        <td>{{ $nino->pago }}</td>

                        <td>
                            <a id="btnEditar" href="{{ route('ninos.edit', $nino->id) }}" class="btn btn-primary">
                                Editar
                            </a>
                        </td>
                        <td>
                            <form method="POST" action="{{ route('ninos.destroy', $nino->id) }}">
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
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

    <script type="text/javascript">
        //Preparaciones despues de cargar el HTML
        $(document).ready(() => {
            //Preparación de datatable
            const tabla = $('#ninos').DataTable({
                //Traducciones al español
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json"
                },

                //Opciones para cuantos registros mostar
                lengthMenu: [
                    [7, 12, 50, -1],
                    [7, 12, 50, "Mostrar todo"]
                ],

                columnDefs: [{
                    targets: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15],
                    visible: false,
                    searchable: false,
                }],
            });

            //Preparacion del evento para mostra los datos en el modal
            $("#ninos tbody").on("click", "tr", function() {
                const fila = tabla.row(this).data();
                const nino = {
                    nombre: fila[16],
                    apellidos: fila[17],
                    edad: fila[0],
                    hermanos: fila[1],
                    medicacion: fila[2],
                    especial: fila[3],
                    observacionesMedicas: fila[4],
                    tutor: fila[18],
                    email: fila[5],
                    telefono1: fila[19],
                    telefono2: fila[6],

                    grupo: fila[7],
                    horario: fila[8],
                    quincena1: fila[9],
                    quincena2: fila[10],
                    quincena3: fila[11],
                    quincena4: fila[12],
                    datos: fila[13],
                    fotos: fila[14],
                    anotaciones: fila[15],
                    recibo: fila[20],
                    pago: fila[21],
                }

                console.log(nino);

                $("#modalVer #nombre").text(nino.nombre);
                $("#modalVer #apellidos").text(nino.apellidos);
                $("#modalVer #edad").text(nino.edad);
                $("#modalVer #hermanos").text(nino.hermanos);

                if (nino.medicacion == 1) $("#modalVer #medicacion").text("sí");
                else $("#modalVer #medicacion").text("no");
                if (nino.especial == 1) $("#modalVer #especial").text("sí");
                else $("#modalVer #especial").text("no");

                $("#modalVer #observacionesMedicas").text(nino.observacionesMedicas);
                $("#modalVer #tutor").text(nino.tutor);
                $("#modalVer #email").text(nino.email);
                $("#modalVer #telefono1").text(nino.telefono1);
                $("#modalVer #telefono2").text(nino.telefono2);
                $("#modalVer #grupo").text(nino.grupo);
                $("#modalVer #horario").text(nino.horario);

                if (nino.quincena1 == 1) $("#modalVer #quincena1").text("sí");
                else $("#modalVer #quincena1").text("no");
                if (nino.quincena2 == 1) $("#modalVer #quincena2").text("sí");
                else $("#modalVer #quincena2").text("no");
                if (nino.quincena3 == 1) $("#modalVer #quincena3").text("sí");
                else $("#modalVer #quincena3").text("no");
                if (nino.quincena4 == 1) $("#modalVer #quincena4").text("sí");
                else $("#modalVer #quincena4").text("no");

                if (nino.datos == 1) $("#modalVer #datos").text("sí");
                else $("#modalVer #datos").text("no");
                if (nino.fotos == 1) $("#modalVer #fotos").text("sí");
                else $("#modalVer #fotos").text("no");

                $("#modalVer #anotaciones").text(nino.anotaciones);
                $("#modalVer #recibo").text(nino.recibo);
                $("#modalVer #pago").text(nino.pago);

                $("#modalVer").modal("show");
            });

            //Preparación de evento para el boton de edición
            $("#btnEditar").click((e) => e.stopPropagation());

            //Preparación de evento para el modal de eliminación
            $("#btnBorrar").click((e) => {
                e.stopPropagation();
                e.preventDefault();
                const form = $(this).closest("form");

                swal({
                    title: "¿Estás seguro de que quieres eliminar este registro?",
                    text: "Estos cambios no pueden deshacerse",
                    icon: "warning",
                    buttons: ["Cancelar", "Eliminar"],
                    dangerMode: true,
                }).then((confimado) => {
                    if (confimado) form.submit();
                });
            });
        });
    </script>
@endsection
