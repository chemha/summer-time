@extends('layouts.app')

@section('content')
    <div class="container-fluid ">
        <h1>Editar registro de niño</h1>
        <form method="POST" action="{{ route('ninos.update', $nino->id) }}">
            @csrf
            @method('PUT')

            <div class="d-flex gap-5">
                <!-- Panel izquierdo -->
                <div class="col">
                    <div class="row my-2">
                        <div class="col">
                            <label for="nombre">Nombre</label>
                            <input type="text" class=" form-control @error('nombre') is-invalid @enderror" name="nombre"
                                value="{{ $nino->nombre }}" required autocomplete="off" autofocus>
                            @error('nombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Campo de apellidos -->
                    <div class="row my-2">
                        <div class="col">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" class="form-control @error('apellidos') is-invalid @enderror" name="apellidos"
                                value="{{ $nino->apellidos }}" required autocomplete="off" autofocus>
                            @error('apellidos')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Campo de edad y hermanos -->
                    <div class="row my-2">
                        <div class="col">
                            <label for="edad">Edad</label>
                            <input type="number" class="form-control w-25 @error('edad') is-invalid @enderror" name="edad"
                                value="{{ $nino->edad }}" required autocomplete="off" autofocus>
                            @error('edad')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="hermanos">Hermanos</label>
                            <input type="number" class="form-control w-25 @error('hermanos') is-invalid @enderror"
                                name="hermanos" value="{{ $nino->hermanos }}" autocomplete="off" autofocus>
                            @error('hermanos')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Checkboxes de medicacion y especial -->
                    <div class="row my-2">

                        <div class="col my-1">

                            <input type="checkbox" class="form-check-input @error('medicacion') is-invalid @enderror"
                                name="medicacion" autocomplete="off" autofocus
                                {{ $nino->medicacion == 1 ? 'checked' : '' }}>
                            @error('medicacion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="medicacion" class="form-check-label">Medicación</label>
                        </div>

                        <div class="col my-1">

                            <input type="checkbox" class="form-check-input @error('especial') is-invalid @enderror"
                                name="especial" autocomplete="off" autofocus {{ $nino->especial == 1 ? 'checked' : '' }}>
                            @error('especial')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="especial" class="form-check-label">Especial</label>
                        </div>
                    </div>

                    <div class="row my-2">
                        <div class="col">
                            <label for="observacionesMedicas">Observaciones médicas</label>
                            <input type="text" class="form-control @error('observacionesMedicas') is-invalid @enderror"
                                name="observacionesMedicas" value="{{ $nino->observacionesMedicas }}" autocomplete="off"
                                autofocus>
                            @error('observacionesMedicas')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Campo de tutor -->
                    <div class="row my-2">
                        <div class="col">
                            <label for="tutor">Tutor</label>
                            <input type="text" class="form-control @error('tutor') is-invalid @enderror" name="tutor"
                                value="{{ $nino->tutor }}" required autocomplete="off" autofocus>
                            @error('tutor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Campo de email -->
                    <div class="row my-2">
                        <div class="col">
                            <label for="email">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ $nino->email }}" autocomplete="off" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Campos de telefonos -->
                    <div class="row my-2">
                        <div class="col">
                            <label for="telefono1">Teléfono 1</label>
                            <input type="tel" class="form-control @error('telefono1') is-invalid @enderror" name="telefono1"
                                value="{{ $nino->telefono1 }}" required autocomplete="off" autofocus>
                            @error('telefono1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="telefono2">Teléfono 2</label>
                            <input type="tel" class="form-control @error('telefono2') is-invalid @enderror"
                                name="telefono2" value="{{ $nino->telefono2 }}" autofocus>
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
                    <div class="row my-2 ">
                        <div class="col">
                            <label for="grupo">Grupo</label>
                            <select class="form-select w-50 float-left @error('grupo') is-invalid @enderror" name="grupo"
                                id="grupo" required autocomplete="off" autofocus>
                                <option disabled value>Elige un grupo</option>
                                <option value="1" {{ $nino->grupo == 1 ? 'selected' : '' }}>Grupo 1</option>
                                <option value="2" {{ $nino->grupo == 2 ? 'selected' : '' }}>Grupo 2</option>
                                <option value="3" {{ $nino->grupo == 3 ? 'selected' : '' }}>Grupo 3</option>
                                <option value="4" {{ $nino->grupo == 4 ? 'selected' : '' }}>Grupo 4</option>
                            </select>

                            @error('grupo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="horario">Horario</label>
                            <select class="form-select w-50  @error('horario') is-invalid @enderror" name="horario"
                                id="horario" required autocomplete="off" autofocus>
                                <option disabled value>Elige un horario</option>
                                <option value="1" {{ $nino->horario == 1 ? 'selected' : '' }}>1 - 2</option>
                                <option value="2" {{ $nino->horario == 2 ? 'selected' : '' }}>2 - 3</option>
                                <option value="3" {{ $nino->horario == 3 ? 'selected' : '' }}>3 - 4</option>
                                <option value="4" {{ $nino->horario == 4 ? 'selected' : '' }}>5 - 6</option>
                            </select>

                            @error('horario')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Checkboxes de quincenas -->
                    <div class="row row-cols-2 my-2">
                        <div class="col my-1">
                            <input type="checkbox" class="form-check-input @error('quincena1') is-invalid @enderror"
                                name="quincena1" autocomplete="off" autofocus
                                {{ $nino->quincena1 == 1 ? 'checked' : '' }}>
                            @error('quincena1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <label for="quincena1" class="form-check-label">
                                Quincena 1
                            </label>
                        </div>
                        <div class="col my-1">
                            <input type="checkbox" class="form-check-input @error('quincena2') is-invalid @enderror"
                                name="quincena2" autocomplete="off" autofocus
                                {{ $nino->quincena2 == 1 ? 'checked' : '' }}>
                            @error('quincena1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <label for="quincena2" class="form-check-label">
                                Quincena 2
                            </label>
                        </div>
                        <div class="col my-1">
                            <input type="checkbox" class="form-check-input @error('quincena3') is-invalid @enderror"
                                name="quincena3" autocomplete="off" autofocus
                                {{ $nino->quincena3 == 1 ? 'checked' : '' }}>
                            @error('quincena3')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <label for="quincena3" class="form-check-label">
                                Quincena 3
                            </label>
                        </div>
                        <div class="col my-1">
                            <input type="checkbox" class="form-check-input @error('quincena4') is-invalid @enderror"
                                name="quincena4" autocomplete="off" autofocus
                                {{ $nino->quincena4 == 1 ? 'checked' : '' }}>
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

                    <div class="row my-2">
                        <div class="col my-1">
                            <input type="checkbox" class="form-check-input @error('datos') is-invalid @enderror"
                                name="datos" autocomplete="off" autofocus {{ $nino->datos == 1 ? 'checked' : '' }}>
                            @error('datos')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <label for="datos" class="form-check-label">
                                Autorización datos
                            </label>
                        </div>

                        <div class="col my-1">
                            <input type="checkbox" class="form-check-input @error('fotos') is-invalid @enderror"
                                name="fotos" autocomplete="off" autofocus {{ $nino->fotos == 1 ? 'checked' : '' }}>
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
                                autocomplete="off" autofocus>{{ $nino->anotaciones }}</textarea>

                            @error('anotaciones')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <hr class="hr">

            <!-- Panel inferior -->
            <div class="row">
                <div class="col">
                    <label for="recibo">
                        Estado del recibo
                    </label>
                    <select class="form-select @error('recibo') is-invalid @enderror" name="recibo" id="recibo" required
                        autocomplete="off" autofocus>
                        <option disabled value>Elige un estado</option>
                        <option value="1" {{ $nino->recibo == 1 ? 'selected' : '' }}>Pagado</option>
                        <option value="2" {{ $nino->recibo == 2 ? 'selected' : '' }}>>Pendiente</option>
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
                        value="{{ $nino->pago }}" required autocomplete="off" autofocus>
                    @error('pago')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary">
                        Editar registro
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
