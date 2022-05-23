@extends('layouts.app')
@section('title')
    <title>Summer Time - Niños - Editar</title>
@endsection
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
                            <input type="text" class=" form-control" name="nombre" value="{{ $nino->nombre }}" required
                                autocomplete="off" autofocus>
                        </div>
                    </div>

                    <!-- Campo de apellidos -->
                    <div class="row my-2">
                        <div class="col">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" class="form-control" name="apellidos" value="{{ $nino->apellidos }}"
                                required autocomplete="off" autofocus>
                        </div>
                    </div>

                    <!-- Campo de edad y hermanos -->
                    <div class="row my-2">
                        <div class="col">
                            <label for="edad">Edad</label>
                            <input type="number" class="form-control w-25" name="edad" value="{{ $nino->edad }}" required
                                autocomplete="off" autofocus min="1" max="18" placeholder="1">
                        </div>

                        <div class="col">
                            <label for="hermanos">Hermanos</label>
                            <input type="number" class="form-control w-25" name="hermanos" value="{{ $nino->hermanos }}"
                                autocomplete="off" autofocus min="0" max="15" placeholder="0">
                        </div>
                    </div>

                    <!-- Checkboxes de medicacion y especial -->
                    <div class="row my-2">
                        <div class="col my-1">
                            <input type="checkbox" class="form-check-input" name="medicacion" autocomplete="off" autofocus
                                {{ $nino->medicacion == 1 ? 'checked' : '' }}>
                            <label for="medicacion" class="form-check-label">Medicación</label>
                        </div>

                        <div class="col my-1">
                            <input type="checkbox" class="form-check-input" name="especial" autocomplete="off" autofocus
                                {{ $nino->especial == 1 ? 'checked' : '' }}>
                            <label for="especial" class="form-check-label">Especial</label>
                        </div>
                    </div>

                    <div class="row my-2">
                        <div class="col">
                            <label for="observacionesMedicas">Observaciones médicas</label>
                            <input type="text" class="form-control" name="observacionesMedicas"
                                value="{{ $nino->observacionesMedicas }}" autocomplete="off" autofocus>
                        </div>
                    </div>

                    <!-- Campo de tutor -->
                    <div class="row my-2">
                        <div class="col">
                            <label for="tutor">Madre / Padre / Tutor</label>
                            <input type="text" class="form-control" name="tutor" value="{{ $nino->tutor }}" required
                                autocomplete="off" autofocus>
                        </div>
                    </div>

                    <!-- Campo de email -->
                    <div class="row my-2">
                        <div class="col">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $nino->email }}"
                                autocomplete="off" autofocus>
                        </div>
                    </div>

                    <!-- Campos de telefonos -->
                    <div class="row my-2">
                        <div class="col">
                            <label for="telefono1">Teléfono 1</label>
                            <input type="tel" class="form-control" name="telefono1" value="{{ $nino->telefono1 }}"
                                required autocomplete="off" autofocus>
                        </div>

                        <div class="col">
                            <label for="telefono2">Teléfono 2</label>
                            <input type="tel" class="form-control" name="telefono2" value="{{ $nino->telefono2 }}"
                                autofocus>
                        </div>
                    </div>
                </div>

                <div class="vr"></div>

                <!-- Panel derecho -->
                <div class="col">

                    <!-- Selects de grupos y horarios -->
                    <div class="row my-2 ">
                        <div class="col">
                            <label for="grupo">Grupo</label>
                            <select class="form-select w-50 float-left" name="grupo" required autocomplete="off" autofocus>
                                <option disabled value>Elige un grupo</option>
                                <option value="1" {{ $nino->grupo == 1 ? 'selected' : '' }}>Grupo 1</option>
                                <option value="2" {{ $nino->grupo == 2 ? 'selected' : '' }}>Grupo 2</option>
                                <option value="3" {{ $nino->grupo == 3 ? 'selected' : '' }}>Grupo 3</option>
                                <option value="4" {{ $nino->grupo == 4 ? 'selected' : '' }}>Grupo 4</option>
                            </select>
                        </div>

                        <div class="col">
                            <label for="horario">Horario</label>
                            <select class="form-select w-50" name="horario" required autocomplete="off" autofocus>
                                <option disabled value>Elige un horario</option>
                                <option value="8:00-14:00" {{ $nino->horario == '8:00-14:00' ? 'selected' : '' }}>
                                    8:00-14:00</option>
                                <option value="8:00-15:00" {{ $nino->horario == '8:00-15:00' ? 'selected' : '' }}>
                                    8:00-15:00</option>
                                <option value="9:00-14:00" {{ $nino->horario == '9:00-14:00' ? 'selected' : '' }}>
                                    9:00-14:00</option>
                                <option value="9:00-15:00" {{ $nino->horario == '9:00-15:00' ? 'selected' : '' }}>
                                    9:00-15:00</option>
                            </select>
                        </div>
                    </div>

                    <!-- Checkboxes de quincenas -->
                    <div class="row row-cols-2 my-2">
                        <div class="col my-1">
                            <input type="checkbox" class="form-check-input" name="quincena0" autocomplete="off" autofocus
                                {{ $nino->quincena0 == 1 ? 'checked' : '' }}>

                            <label for="quincena0" class="form-check-label">
                                Quincena 0
                            </label>
                        </div>

                        <div class="col my-1">
                            <input type="checkbox" class="form-check-input" name="quincena1" autocomplete="off" autofocus
                                {{ $nino->quincena1 == 1 ? 'checked' : '' }}>

                            <label for="quincena1" class="form-check-label">
                                Quincena 1
                            </label>
                        </div>
                        <div class="col my-1">
                            <input type="checkbox" class="form-check-input" name="quincena2" autocomplete="off" autofocus
                                {{ $nino->quincena2 == 1 ? 'checked' : '' }}>

                            <label for="quincena2" class="form-check-label">
                                Quincena 2
                            </label>
                        </div>
                        <div class="col my-1">
                            <input type="checkbox" class="form-check-input" name="quincena3" autocomplete="off" autofocus
                                {{ $nino->quincena3 == 1 ? 'checked' : '' }}>

                            <label for="quincena3" class="form-check-label">
                                Quincena 3
                            </label>
                        </div>
                        <div class="col my-1">
                            <input type="checkbox" class="form-check-input" name="quincena4" autocomplete="off" autofocus
                                {{ $nino->quincena4 == 1 ? 'checked' : '' }}>

                            <label for="quincena4" class="form-check-label">
                                Quincena 4
                            </label>
                        </div>
                    </div>

                    <!-- Checkboxes de autorización de datos y fotos -->
                    <div class="row my-2">
                        <div class="col my-1">
                            <input type="checkbox" class="form-check-input" name="datos" autocomplete="off" autofocus
                                {{ $nino->datos == 1 ? 'checked' : '' }}>

                            <label for="datos" class="form-check-label">
                                Autorización datos
                            </label>
                        </div>

                        <div class="col my-1">
                            <input type="checkbox" class="form-check-input" name="fotos" autocomplete="off" autofocus
                                {{ $nino->fotos == 1 ? 'checked' : '' }}>

                            <label for="fotos" class="form-check-label">
                                Autorización fotos
                            </label>
                        </div>
                    </div>

                    <!-- Campo de anotaciones -->
                    <div class="row">
                        <div class="col">
                            <label for="anotaciones">
                                Anotaciones
                            </label>
                            <textarea name="anotaciones" rows="11" class="form-control" autocomplete="off"
                                autofocus>{{ $nino->anotaciones }}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="hr">

            <!-- Panel inferior -->
            <div class="row">
                <!-- Select de estado del recibo -->
                <div class="col">
                    <label for="recibo">
                        Estado del recibo
                    </label>
                    <select class="form-select" name="recibo" id="recibo" required autocomplete="off" autofocus>
                        <option disabled value>Elige un estado</option>
                        <option value="pagado" {{ $nino->recibo == 'pagado' ? 'selected' : '' }}>Pagado</option>
                        <option value="pendiente" {{ $nino->recibo == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                        <option value="devolución" {{ $nino->recibo == 'devolución' ? 'selected' : '' }}>Devolución
                        </option>
                    </select>
                </div>

                <!-- Campo de pago -->
                <div class="col">
                    <label for="pago">Pago</label>

                    <input type="number" class="form-control" name="pago" value="{{ $nino->pago }}" required
                        autocomplete="off" autofocus step="any" max="999.99" min="-999.99">
                </div>

                <!-- Boton para guardar el registro -->
                <div class="col d-flex align-items-end">
                    <button type="submit" class="btn btn-primary">
                        Editar registro
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
