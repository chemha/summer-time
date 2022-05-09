@extends('layouts.app')

@section('title')
    <title>Summer Time - Perfil</title>
@endsection

<!-- CSS para datatables -->
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
@endsection

@section('content')
    <div class="container-fluid">

        <h1>Perfil</h1>

        @if (session('alert'))
            <div class="alert alert-{{ session('alert')['type'] }}" role="alert">
                {{ session('alert')['message'] }}
            </div>
        @endif

        <ul>
            <li>Imagen: <img src="{{ $user->image }}"></li>
            <li>Nombre: <span>{{ $user->name }}</span></li>
            <li>Email: <span>{{ $user->email }}</span></li>
            <li>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalFoto">
                    Cambiar foto de perfil
                </button>
            </li>
            <li>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditar">
                    Modificar datos
                </button>
            </li>
            <li>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalClave">
                    Cambiar contraseña
                </button>
            </li>
        </ul>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditarLabel">Editar usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('users.update', $user->id) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="modal-body">
                        <div class="col">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" id="name" value="{{ $user->name }}" required autocomplete="off"
                                class="form-control">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" value="{{ $user->email }}" required
                                autocomplete="off" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <span class="d-none" id="id"></span>
                        <button id="btnEditar" type="submit" class="btn btn-primary">Editar usuario</button>
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
                <form action="{{ route('users.update', $user->id) }}" method="POST">
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
                        <button id="btnEditar" type="submit" class="btn btn-primary">Cambiar contraseña</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalFoto" tabindex="-1" aria-labelledby="modalFotoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalFotoLabel">Cambiar avatar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="modal-body">
                        <div class="col">
                            <label for="name">Nuevo avatar</label>
                            <input type="file" accept="image/*" name="image" required autocomplete="off" class="form-control-file">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <span class="d-none" id="id"></span>
                        <button id="btnEditar" type="submit" class="btn btn-primary">Cambiar avatar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
