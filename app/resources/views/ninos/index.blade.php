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

        <table id="ninos" class="table table-striped table-bordered shadow-lg">
            <thead class="">
                <tr>

                    <!-- Campos ocultos -->
                    <th scope="col">Hermanos</th>
                    <th scope="col">Medicacion</th>
                    <th scope="col">Especial</th>
                    <th scope="col">Observaciones Medicas</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefono 2</th>
                    <th scope="col">Grupo</th>
                    <th scope="col">Horario</th>
                    <th scope="col">Quincena 1</th>
                    <th scope="col">Quincena 2</th>
                    <th scope="col">Quincena 3</th>
                    <th scope="col">Quincena 4</th>
                    <th scope="col">Autorizacion datos</th>
                    <th scope="col">Autorizacion fotos</th>
                    <th scope="col">Anotaciones</th>
                    
                    <!-- Campos visibles -->
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Tutor</th>
                    <th scope="col">Telefono 1</th>
                    <th scope="col">Estado del recibo</th>
                    <th scope="col">Pago</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ninos as $nino)
                    <tr>
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

                        <td>{{ $nino->nombre }}</td>
                        <td>{{ $nino->apellidos }}</td>
                        <td>{{ $nino->tutor }}</td>
                        <td>{{ $nino->telefono1 }}</td>
                        <td>{{ $nino->recibo }}</td>
                        <td>{{ $nino->pago }}</td>

                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalVer">
                                Ver
                            </button>
                        </td>
                        <td>
                            <a href="{{ route('ninos.edit', $nino->id) }}" class="btn btn-primary">
                                Editar
                            </a>
                        </td>
                        <td>
                            <form method="POST" action="{{ route('ninos.destroy', $nino->id) }}">
                                @csrf
                                @method('DELETE')
                                <button id="btnBorrar" type="submit" class="btn btn-danger show_confirm">
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
    <div class="modal fade" id="modalVer" tabindex="-1" aria-labelledby="modalVerLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalVerLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
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
        //Preparación de datatables
        $(document).ready(() => {
            $('#ninos').DataTable({
                //Traducciones al español
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json"
                },

                //Opciones para cuantos registros mostar
                lengthMenu: [
                    [7, 12, 50, -1],
                    [7, 12, 50, "Mostrar todo"]
                ],

                columndefs: {
                    targets: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14],
                    visible: false;
                    searchable: false;
                }
            });
        });

        //Preparación de evento para el modal de eliminación
        $('.show_confirm').click(function(event) {
            event.preventDefault();

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
    </script>
@endsection
