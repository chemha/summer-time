@extends('layouts.app')

@section('content')
    <div class="container">
        <form class="row justify-content-lg-evenly" method="POST" action="{{ route('ninos.store') }}">
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
                        <input type="tel" class="form-control @error('telefono1') is-invalid @enderror"
                            name="telefono1" value="{{ old('telefono1') }}" required autocomplete="telefono1" autofocus>
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
                        <input type="tel" class="form-control @error('telefono2') is-invalid @enderror"
                            name="telefono2" value="{{ old('telefono2') }}" required autocomplete="telefono2" autofocus>
                        @error('telefono2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="clase" class="col-md-4 col-form-label text-md-end">
                        Clase
                    </label>

                    <div class="col-md-6">
                        <select class="form-control @error('clase') is-invalid @enderror" name="clase" id="clase"
                            value="{{ old('clase') }}" required autocomplete="clase" autofocus>
                            <option value="barbaro">Barbaro</option>
                            <option value="bardo">Bardo</option>
                            <option value="brujo">Brujo</option>
                            <option value="clérigo">Clérigo</option>
                            <option value="druida">Druida</option>
                            <option value="explorador">Explorador</option>
                            <option value="guerrero">Guerrero</option>
                            <option value="hechicero">Hechicero</option>
                            <option value="mago">Mago</option>
                            <option value="monje">Monje</option>
                            <option value="paladín">Paladín</option>
                            <option value="pícaro">Pícaro</option>
                        </select>

                        @error('clase')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Crear personaje
                        </button>
                    </div>
                </div>
            </div>

            <!-- Panel derecho -->
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
                        <input type="checkbox" class="form-control @error('medicacion') is-invalid @enderror"
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
                        <input type="checkbox" class="form-control @error('especial') is-invalid @enderror" name="especial"
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
                        <input type="checkbox" class="form-control @error('telefono1') is-invalid @enderror"
                            name="telefono1" value="{{ old('telefono1') }}" required autocomplete="telefono1" autofocus>
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
                        <input type="checkbox" class="form-control @error('telefono2') is-invalid @enderror"
                            name="telefono2" value="{{ old('telefono2') }}" required autocomplete="telefono2" autofocus>
                        @error('telefono2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="clase" class="col-md-4 col-form-label text-md-end">
                        Clase
                    </label>

                    <div class="col-md-6">
                        <select class="form-control @error('clase') is-invalid @enderror" name="clase" id="clase"
                            value="{{ old('clase') }}" required autocomplete="clase" autofocus>
                            <option value="barbaro">Barbaro</option>
                            <option value="bardo">Bardo</option>
                            <option value="brujo">Brujo</option>
                            <option value="clérigo">Clérigo</option>
                            <option value="druida">Druida</option>
                            <option value="explorador">Explorador</option>
                            <option value="guerrero">Guerrero</option>
                            <option value="hechicero">Hechicero</option>
                            <option value="mago">Mago</option>
                            <option value="monje">Monje</option>
                            <option value="paladín">Paladín</option>
                            <option value="pícaro">Pícaro</option>
                        </select>

                        @error('clase')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Crear personaje
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
