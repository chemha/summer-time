@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('ninos.store') }}">
            @csrf

            <div class="d-flex gap-5">

                <!-- Panel izquierdo -->
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <label for="nombre">Nombre</label>
                            <input type="text" class=" form-control @error('nombre') is-invalid @enderror" name="nombre"
                                value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>
                            @error('nombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Campo de apellidos -->
                    <div class="row">
                        <div class="col">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" class="form-control @error('apellidos') is-invalid @enderror" name="apellidos"
                                value="{{ old('apellidos') }}" required autocomplete="apellidos" autofocus>
                            @error('apellidos')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Campo de edad y hermanos -->
                    <div class="row">
                        <div class="col">
                            <label for="edad">Edad</label>
                            <input type="number" class="form-control w-25 @error('edad') is-invalid @enderror" name="edad"
                                value="{{ old('edad') }}" required autocomplete="edad" autofocus>
                            @error('edad')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="hermanos">Hermanos</label>
                            <input type="number" class="form-control w-25 @error('hermanos') is-invalid @enderror"
                                name="hermanos" value="{{ old('hermanos') }}" autocomplete="hermanos" autofocus>
                            @error('hermanos')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Checkboxes de medicacion y especial -->
                    <div class="row">

                        <div class="col">

                            <input type="checkbox" class="form-check-input @error('medicacion') is-invalid @enderror"
                                name="medicacion" value="{{ old('medicacion') }}" required autocomplete="medicacion"
                                autofocus>
                            @error('medicacion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="medicacion" class="form-check-label">Medicación</label>
                        </div>

                        <div class="col">

                            <input type="checkbox" class="form-check-input @error('especial') is-invalid @enderror"
                                name="especial" value="{{ old('especial') }}" required autocomplete="especial" autofocus>
                            @error('especial')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="especial" class="form-check-label">Especial</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="observacionesMedicas">Observaciones médicas</label>
                            <input type="text" class="form-control @error('observacionesMedicas') is-invalid @enderror"
                                name="observacionesMedicas" value="{{ old('observacionesMedicas') }}" required
                                autocomplete="observacionesMedicas" autofocus>
                            @error('observacionesMedicas')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Campo de tutor -->
                    <div class="row">
                        <div class="col">
                            <label for="tutor">Tutor</label>
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
                    <div class="row">
                        <div class="col">
                            <label for="email">Email</label>
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
                    <div class="row">
                        <div class="col">
                            <label for="telefono1">Teléfono 1</label>
                            <input type="tel" class="form-control @error('telefono1') is-invalid @enderror" name="telefono1"
                                value="{{ old('telefono1') }}" required autocomplete="telefono1" autofocus>
                            @error('telefono1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="telefono2">Teléfono 2</label>
                            <input type="tel" class="form-control @error('telefono2') is-invalid @enderror"
                                name="telefono2" value="{{ old('telefono2') }}" required autocomplete="telefono2"
                                autofocus>
                            @error('telefono2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="vr"></div>

                <!-- Panel derecho -->
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <label for="grupo">Grupo</label>
                            <select class="form-select w-50 @error('grupo') is-invalid @enderror" name="grupo" id="grupo"
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

                        <div class="col">
                            <label for="horario">Horario</label>
                            <select class="form-select w-50 @error('horario') is-invalid @enderror" name="horario"
                                id="horario" value="{{ old('horario') }}" required autocomplete="horario" autofocus>
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
                    <div class="row row-cols-2">
                        <div class="col my-2">
                            <input type="checkbox" class="form-check-input @error('quincena1') is-invalid @enderror"
                                name="quincena1" value="{{ old('quincena1') }}" required autocomplete="quincena1"
                                autofocus>
                            @error('quincena1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <label for="quincena1" class="form-check-label">
                                Quincena 1
                            </label>
                        </div>
                        <div class="col my-2">
                            <input type="checkbox" class="form-check-input @error('quincena2') is-invalid @enderror"
                                name="quincena2" value="{{ old('quincena2') }}" required autocomplete="quincena2"
                                autofocus>
                            @error('quincena2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <label for="quincena2" class="form-check-label">
                                Quincena 2
                            </label>
                        </div>
                        <div class="col my-2">
                            <input type="checkbox" class="form-check-input @error('quincena3') is-invalid @enderror"
                                name="quincena3" value="{{ old('quincena3') }}" required autocomplete="quincena3"
                                autofocus>
                            @error('quincena3')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <label for="quincena3" class="form-check-label">
                                Quincena 3
                            </label>
                        </div>
                        <div class="col my-2">
                            <input type="checkbox" class="form-check-input @error('quincena4') is-invalid @enderror"
                                name="quincena4" value="{{ old('quincena4') }}" required autocomplete="quincena4"
                                autofocus>
                            @error('quincena4')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <label for="quincena4" class="form-check-label">
                                Quincena 4
                            </label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col my-2">
                            <input type="checkbox" class="form-check-input @error('datos') is-invalid @enderror"
                                name="datos" value="{{ old('datos') }}" required autocomplete="datos" autofocus>
                            @error('datos')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <label for="datos" class="form-check-label">
                                Autorización datos
                            </label>
                        </div>

                        <div class="col my-2">
                            <input type="checkbox" class="form-check-input @error('fotos') is-invalid @enderror"
                                name="fotos" value="{{ old('fotos') }}" required autocomplete="fotos" autofocus>
                            @error('fotos')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <label for="fotos" class="form-check-label">
                                Autorización fotos
                            </label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="anotaciones">
                                Anotaciones
                            </label>
                            <textarea name="anotaciones" rows="5" cols="52" class="form-control @error('anotaciones') is-invalid @enderror"
                                required autocomplete="anotaciones" autofocus></textarea>

                            @error('anotaciones')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <!-- Panel inferior -->
            <div class="row">
                <div class="col">
                    <label for="recibo">
                        Estado del recibo
                    </label>
                    <select class="form-select @error('recibo') is-invalid @enderror" name="recibo" id="recibo"
                        value="{{ old('recibo') }}" required autocomplete="recibo" autofocus>
                        <option value="1">Pagado</option>
                        <option value="2">Pendiente</option>
                    </select>

                    @error('recibo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <!-- Campo de edad y hermanos -->
                <div class="col">
                    <label for="pago">Pago</label>

                    <input value="0" type="number" class="form-control @error('pago') is-invalid @enderror" name="pago"
                        value="{{ old('pago') }}" required autocomplete="pago" autofocus>
                    @error('pago')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary">
                        Crear registro
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
