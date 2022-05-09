@extends('layouts.app')

@section('title')
    <title>Summer Time - users</title>
@endsection

<!-- CSS para datatables -->
@section('css')
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>

    <script src="{{ asset('js/users.js') }}"></script>
@endsection

@section('content')
    <div class="container-fluid">

        <h1>Perfil</h1>

        @if (session('alert'))
            <div class="alert alert-{{ session('alert')['type'] }}" role="alert">
                {{ session('alert')['message'] }}
            </div>
        @endif

        @foreach ($users as $user)
        <ul>
            <li>Imagen: <span>{{-- $user->image --}}</span></li>
            <li>Nombre: <span>{{ $user->name }}</span></li>
            <li>Email: <span>{{ $user->email }}</span></li>
            <li><button>Cambiar contraseña</button></li>
        </ul>
        @endforeach
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalCrear" tabindex="-1" aria-labelledby="modalCrearLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCrearLabel">Crear nuevo user</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="col">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" required autocomplete="off" class="form-control">
                            <label for="email">Email</label>
                            <input type="email" name="email" required autocomplete="off" class="form-control">
                            <label for="password">Contraseña</label>
                            <input type="password" name="password" required autocomplete="off" class="form-control">
                            <label for="admin">Rol</label>
                            <select class="form-select w-50 float-left" name="admin" id="" required autocomplete="off">
                                <option selected disabled value>Elige un rol</option>
                                <option value="1">Administrador</option>
                                <option value="0">Monitor</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Crear usuario</button>
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
                    <h5 class="modal-title" id="modalEditarLabel">Editar usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="modal-body">
                        <div class="col">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" id="name" required autocomplete="off" class="form-control">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" required autocomplete="off" class="form-control">
                            <label for="admin">Rol</label>
                            <select class="form-select w-50 float-left" name="admin" id="admin" required autocomplete="off">
                                <option selected disabled value>Elige un rol</option>
                                <option value="1">Administrador</option>
                                <option value="0">Monitor</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <span class="d-none" id="id"></span>
                        <button id="btnEditar" type="button" class="btn btn-primary">Editar usuario</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalClave" tabindex="-1" aria-labelledby="modalClaveLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalClaveLabel">Cambiar contraseña</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="modal-body">
                        <div class="col">
                            <label for="name">Nueva contraseña</label>
                            <input type="password" name="password" required autocomplete="off" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <span class="d-none" id="id"></span>
                        <button id="btnEditar" type="button" class="btn btn-primary">Cambiar contraseña</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </div>
@endsection
