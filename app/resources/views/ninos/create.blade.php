@extends('layouts.app')

@section('content')
    <div class="container">
        <form class="row" method="POST" action="{{ route('ninos.store') }}">
            @csrf

            <!-- Panel izquierdo -->
            <div class="col">
                <div class="row mb-3">
                    <label for="nombre" class="col-md-4 col-form-label text-md-end">
                        Nombre
                    </label>

                    <div class="col-md-6">
                        <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre"
                            value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>
                        @error('nombre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <!-- Campo de apellidos -->
                <div class="row mb-3">
                    <label for="apellidos" class="col-md-4 col-form-label text-md-end">
                        Apellidos
                    </label>

                    <div class="col-md-6">
                        <input type="text" class="form-control @error('apellidos') is-invalid @enderror" name="nombre"
                            value="{{ old('apellidos') }}" required autocomplete="apellidos" autofocus>
                        @error('apellidos')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <!-- Campo de edad y hermanos -->
                <div class="row mb-3">
                    <label for="edad" class="col-md-4 col-form-label text-md-end">
                        Edad
                    </label>

                    <div class="col-md-6">
                        <input value="0" type="number" class="form-control @error('edad') is-invalid @enderror" name="edad"
                            value="{{ old('edad') }}" required autocomplete="edad" autofocus>
                        @error('edad')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <label for="hermanos" class="col-md-4 col-form-label text-md-end">
                        Hermanos
                    </label>

                    <div class="col-md-6">
                        <input value="0" type="number" class="form-control @error('hermanos') is-invalid @enderror"
                            name="hermanos" value="{{ old('hermanos') }}" required autocomplete="hermanos" autofocus>
                        @error('hermanos')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <!-- Checkboxes de medicacion y especial -->
                <div class="row mb-3">
                    <label for="medicacion" class="col-md-4 col-form-label text-md-end">
                        Medicación
                    </label>

                    <div class="col-md-6">
                        <input type="checkbox" class="form-check @error('medicacion') is-invalid @enderror"
                            name="medicacion" value="{{ old('medicacion') }}" required autocomplete="medicacion"
                            autofocus>
                        @error('medicacion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <label for="especial" class="col-md-4 col-form-label text-md-end">
                        Especial
                    </label>

                    <div class="col-md-6">
                        <input type="checkbox" class="form-check @error('especial') is-invalid @enderror" name="especial"
                            value="{{ old('especial') }}" required autocomplete="especial" autofocus>
                        @error('especial')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="observacionesMedicas" class="col-md-4 col-form-label text-md-end">
                        Observaciones médicas
                    </label>

                    <div class="col-md-6">
                        <textarea name="observacionesMedicas" rows="5" cols="52"
                            class="form-control @error('observacionesMedicas') is-invalid @enderror" required
                            autocomplete="observacionesMedicas" autofocus></textarea>

                        @error('observacionesMedicas')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <!-- Campo de tutor -->
                <div class="row mb-3">
                    <label for="tutor" class="col-md-4 col-form-label text-md-end">
                        Tutor
                    </label>

                    <div class="col-md-6">
                        <input type="text" class="form-control @error('tutor') is-invalid @enderror" name="tutor"
                            value="{{ old('tutor') }}" required autocomplete="tutor" autofocus>
                        @error('tutor')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <!-- Campo de email -->
                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">
                        Email
                    </label>

                    <div class="col-md-6">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <!-- Campos de telefonos -->
                <div class="row mb-3">
                    <label for="telefono1" class="col-md-4 col-form-label text-md-end">
                        Telefono 1
                    </label>

                    <div class="col-md-6">
                        <input type="tel" class="form-control @error('telefono1') is-invalid @enderror" name="telefono1"
                            value="{{ old('telefono1') }}" required autocomplete="telefono1" autofocus>
                        @error('telefono1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <label for="telefono2" class="col-md-4 col-form-label text-md-end">
                        Telefono 2
                    </label>

                    <div class="col-md-6">
                        <input type="tel" class="form-control @error('telefono2') is-invalid @enderror" name="telefono2"
                            value="{{ old('telefono2') }}" required autocomplete="telefono2" autofocus>
                        @error('telefono2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Panel derecho -->
            <div class="col border-left">
                <div class="row mb-3">
                    <label for="grupo" class="col-md-4 col-form-label text-md-end">
                        Grupo
                    </label>

                    <div class="col-md-6">
                        <select class="form-control @error('grupo') is-invalid @enderror" name="grupo" id="grupo"
                            value="{{ old('grupo') }}" required autocomplete="grupo" autofocus>
                            <option value="1">Grupo 1</option>
                            <option value="2">Grupo 2</option>
                            <option value="3">Grupo 3</option>
                            <option value="4">Grupo 4</option>
                        </select>

                        @error('grupo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="horario" class="col-md-4 col-form-label text-md-end">
                        Horario
                    </label>

                    <div class="col-md-6">
                        <select class="form-control @error('horario') is-invalid @enderror" name="horario" id="horario"
                            value="{{ old('horario') }}" required autocomplete="horario" autofocus>
                            <option value="1">1 - 2</option>
                            <option value="2">2 - 3</option>
                            <option value="3">3 - 4</option>
                            <option value="4">5 - 6</option>
                        </select>

                        @error('horario')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <!-- Checkboxes de quincenas -->
                <div class="row mb-3">
                    <label for="quincena1" class="col-md-4 col-form-label text-md-end">
                        Quincena 1
                    </label>

                    <div class="col-md-6">
                        <input type="checkbox" class="form-check @error('quincena1') is-invalid @enderror" name="quincena1"
                            value="{{ old('quincena1') }}" required autocomplete="quincena1" autofocus>
                        @error('quincena1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <label for="quincena2" class="col-md-4 col-form-label text-md-end">
                        Quincena 2
                    </label>

                    <div class="col-md-6">
                        <input type="checkbox" class="form-check @error('quincena2') is-invalid @enderror" name="quincena2"
                            value="{{ old('quincena2') }}" required autocomplete="quincena2" autofocus>
                        @error('quincena2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <label for="quincena3" class="col-md-4 col-form-label text-md-end">
                        Quincena 3
                    </label>

                    <div class="col-md-6">
                        <input type="checkbox" class="form-check @error('quincena3') is-invalid @enderror" name="quincena3"
                            value="{{ old('quincena3') }}" required autocomplete="quincena3" autofocus>
                        @error('quincena3')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <label for="quincena4" class="col-md-4 col-form-label text-md-end">
                        Quincena 4
                    </label>
                    <div class="col-md-6">
                        <input type="checkbox" class="form-check @error('quincena4') is-invalid @enderror" name="quincena4"
                            value="{{ old('quincena4') }}" required autocomplete="quincena4" autofocus>
                        @error('quincena4')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="datos" class="col-md-4 col-form-label text-md-end">
                        Autorización datos
                    </label>

                    <div class="col-md-6">
                        <input type="checkbox" class="form-check @error('datos') is-invalid @enderror" name="datos"
                            value="{{ old('datos') }}" required autocomplete="datos" autofocus>
                        @error('datos')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <label for="fotos" class="col-md-4 col-form-label text-md-end">
                        Autorización fotos
                    </label>

                    <div class="col-md-6">
                        <input type="checkbox" class="form-check @error('fotos') is-invalid @enderror" name="fotos"
                            value="{{ old('fotos') }}" required autocomplete="fotos" autofocus>
                        @error('fotos')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="anotaciones" class="col-md-4 col-form-label text-md-end">
                        Anotaciones
                    </label>

                    <div class="col-md-6">
                        <textarea name="anotaciones" rows="5" cols="52" class="form-control @error('anotaciones') is-invalid @enderror"
                            required autocomplete="anotaciones" autofocus></textarea>

                        @error('anotaciones')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-0">

                </div>
            </div>
            <div class="row">
                <div class="row mb-3">
                    <label for="grupo" class="col-md-4 col-form-label text-md-end">
                        Grupo
                    </label>

                    <div class="col-md-6">
                        <select class="form-control @error('grupo') is-invalid @enderror" name="grupo" id="grupo"
                            value="{{ old('grupo') }}" required autocomplete="grupo" autofocus>
                            <option value="1">Grupo 1</option>
                            <option value="2">Grupo 2</option>
                            <option value="3">Grupo 3</option>
                            <option value="4">Grupo 4</option>
                        </select>

                        @error('grupo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <!-- Campo de edad y hermanos -->
                <div class="row mb-3">
                    <label for="edad" class="col-md-4 col-form-label text-md-end">
                        Edad
                    </label>

                    <div class="col-md-6">
                        <input value="0" type="number" class="form-control @error('edad') is-invalid @enderror"
                            name="edad" value="{{ old('edad') }}" required autocomplete="edad" autofocus>
                        @error('edad')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Crear personaje
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
