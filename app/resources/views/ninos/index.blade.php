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
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Tutor</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ninos as $nino)
                    <tr>
                        <td>{{ $nino->nombre }}</td>
                        <td>{{ $nino->apellidos }}</td>
                        <td>{{ $nino->tutor }}</td>

                        <td>
                            <a href="{{ route('ninos.show', $nino->id) }}" class="btn btn-primary">
                                Ver
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('ninos.edit', $nino->id) }}" class="btn btn-primary">
                                Editar
                            </a>
                        </td>
                        <td>

                            <!--
                                                            <form method="POST" action="{{ route('ninos.destroy', $nino->id) }}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">
                                                                    Eliminar
                                                                </button>
                                                            </form>
                                                        -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal-dialog modal-dialog-centered" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

    <script>
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
            });
        });

        $('.addAttr').click(function() {
            const id = $(this).data('id');
            $('#id').val(id);
        });
    </script>
@endsection
