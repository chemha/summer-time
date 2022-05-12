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
        @if (session('alert'))
            <div class="alert alert-{{ session('alert')['type'] }}" role="alert">
                {{ session('alert')['message'] }}
            </div>
        @endif
        <div class="row justify-content-center align-content-center">
            <div class="card perfil">
                <div class="card-header">Perfil de usuario</div>
                <div class="card-body">
                    <div class="row">
                        @if ($user->image)
                            <div class="col"><img class="avatar-perfil circulo" src="{{ $user->image }}"></div>
                        @else
                            <div class="col"><img class="avatar-perfil circulo"
                                    src="{{ asset('img/sinavatar.jpg') }}"></div>
                        @endif
                    </div>
                    <div class="row">
                        <h1>{{ $user->name }}</h1>
                    </div>
                    <div class="row">
                        <h3>{{ $user->email }}</h3>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                data-bs-target="#modalFoto">
                                <i class="bi bi-pencil-square"></i>
                                <br>
                                Foto
                            </button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#modalEditar">
                                <i class="bi bi-pencil-square"></i>
                                <br>
                                Datos
                            </button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#modalClave">
                                <i class="bi bi-pencil-square"></i>
                                <br>
                                Contraseña
                            </button>
                        </div>
                    </div>
                </div>
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
                            <label for="image">Nuevo avatar</label>
                            <input type="file" accept="image/*" name="image" required autocomplete="off"
                                class="form-control">
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
