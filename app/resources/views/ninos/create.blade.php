@extends('layouts.app')
@section('title')
    <title>Summer Time - Niños - Crear</title>
@endsection

@section('content')
    <div class="container-fluid ">
        <h1>Crear registro de niño</h1>
        <form method="POST" action="{{ route('ninos.store') }}">
            @csrf

            <div class="d-flex gap-5">
                <!-- Panel izquierdo -->
                <div class="col">
                    <div class="row my-2">
                        <div class="col">
                            <label for="nombre">Nombre</label>
                            <input type="text" class=" form-control" name="nombre" value="{{ old('nombre') }}" required
                                autocomplete="off" autofocus>
                        </div>
                    </div>

                    <!-- Campo de apellidos -->
                    <div class="row my-2">
                        <div class="col">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" class="form-control" name="apellidos" value="{{ old('apellidos') }}"
                                required autocomplete="off" autofocus>
                        </div>
                    </div>

                    <!-- Campo de edad y hermanos -->
                    <div class="row my-2">
                        <div class="col">
                            <label for="edad">Edad</label>
                            <input type="number" class="form-control w-25" name="edad" value="1" required autocomplete="off"
                                autofocus min="1" max="18" placeholder="1">
                        </div>

                        <div class="col">
                            <label for="hermanos">Hermanos</label>
                            <input type="number" class="form-control w-25" name="hermanos" value="0" autocomplete="off"
                                autofocus min="0" max="15" placeholder="0">
                        </div>
                    </div>

                    <!-- Checkboxes de medicacion y especial -->
                    <div class="row my-2">

                        <div class="col my-1">

                            <input type="checkbox" class="form-check-input" name="medicacion"
                                value="{{ old('medicacion') }}" autocomplete="off" autofocus>
                            <label for="medicacion" class="form-check-label">Medicación</label>
                        </div>

                        <div class="col my-1">

                            <input type="checkbox" class="form-check-input" name="especial" value="{{ old('especial') }}"
                                autocomplete="off" autofocus>
                            <label for="especial" class="form-check-label">Especial</label>
                        </div>
                    </div>

                    <!-- Campo de observaciones médicas -->
                    <div class="row my-2">
                        <div class="col">
                            <label for="observacionesMedicas">Observaciones médicas</label>
                            <input type="text" class="form-control" name="observacionesMedicas"
                                value="{{ old('observacionesMedicas') }}" autocomplete="off" autofocus>
                        </div>
                    </div>

                    <!-- Campo de tutor -->
                    <div class="row my-2">
                        <div class="col">
                            <label for="tutor">Madre / Padre / Tutor</label>
                            <input type="text" class="form-control" name="tutor" value="{{ old('tutor') }}" required
                                autocomplete="off" autofocus>
                        </div>
                    </div>

                    <!-- Campo de email -->
                    <div class="row my-2">
                        <div class="col">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                autocomplete="off" autofocus>
                        </div>
                    </div>

                    <!-- Campos de telefonos -->
                    <div class="row my-2">
                        <div class="col">
                            <label for="telefono1">Teléfono 1</label>
                            <input type="tel" class="form-control" name="telefono1" value="{{ old('telefono1') }}"
                                required autocomplete="off" autofocus>
                        </div>

                        <div class="col">
                            <label for="telefono2">Teléfono 2</label>
                            <input type="tel" class="form-control" name="telefono2" value="{{ old('telefono2') }}"
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
                            <select class="form-select w-50 float-lef" name="grupo" value="{{ old('grupo') }}" required
                                autocomplete="off" autofocus>
                                <option disabled selected value>Elige un grupo</option>
                                <option value="1">Grupo 1</option>
                                <option value="2">Grupo 2</option>
                                <option value="3">Grupo 3</option>
                                <option value="4">Grupo 4</option>
                            </select>
                        </div>

                        <div class="col">
                            <label for="horario">Horario</label>
                            <select class="form-select w-50" name="horario" value="{{ old('horario') }}" required
                                autocomplete="off" autofocus>
                                <option disabled selected value>Elige un horario</option>
                                <option value="8:00-14:00">8:00-14:00</option>
                                <option value="8:00-15:00">8:00-15:00</option>
                                <option value="9:00-14:00">9:00-14:00</option>
                                <option value="9:00-15:00">9:00-15:00</option>
                            </select>
                        </div>
                    </div>

                    <!-- Checkboxes de quincenas -->
                    <div class="row row-cols-2 my-2">
                        <div class="col my-1">
                            <input type="checkbox" class="form-check-input" name="quincena0"
                                value="{{ old('quincena0') }}" autocomplete="off" autofocus>
                            <label for="quincena1" class="form-check-label">
                                <b>Quincena 0</b> - del 27 de junio al 30 de junio
                            </label>
                        </div>
                        <div class="col my-1">
                            <input type="checkbox" class="form-check-input" name="quincena1"
                                value="{{ old('quincena1') }}" autocomplete="off" autofocus>
                            <label for="quincena1" class="form-check-label">
                                <b>Quincena 1</b> - del 1 de julio al 15 de julio
                            </label>
                        </div>
                        <div class="col my-1">
                            <input type="checkbox" class="form-check-input" name="quincena2"
                                value="{{ old('quincena2') }}" autocomplete="off" autofocus>
                            <label for="quincena2" class="form-check-label">
                                <b>Quincena 2</b> - del 18 de julio al 29 de julio
                            </label>
                        </div>
                        <div class="col my-1">
                            <input type="checkbox" class="form-check-input" name="quincena3"
                                value="{{ old('quincena3') }}" autocomplete="off" autofocus>
                            <label for="quincena3" class="form-check-label">
                                <b>Quincena 3</b> - del 1 de agosto al 15 de agosto
                            </label>
                        </div>
                        <div class="col my-1">
                            <input type="checkbox" class="form-check-input" name="quincena4"
                                value="{{ old('quincena4') }}" autocomplete="off" autofocus>
                            <label for="quincena4" class="form-check-label">
                                <b>Quincena 4</b> - del 16 de agosto al 31 de agosto
                            </label>
                        </div>
                    </div>

                    <!-- Checkboxes de autorización de datos y fotos -->
                    <div class="row my-2">
                        <div class="col my-1">
                            <input type="checkbox" class="form-check-input" name="datos" value="{{ old('datos') }}"
                                autocomplete="off" autofocus>
                            <label for="datos" class="form-check-label">
                                Autorización datos
                            </label>
                        </div>

                        <div class="col my-1">
                            <input type="checkbox" class="form-check-input" name="fotos" value="{{ old('fotos') }}"
                                autocomplete="off" autofocus>
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
                            <textarea name="anotaciones" rows="11" class="form-control" autocomplete="off" autofocus></textarea>
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
                    <select class="form-select" name="recibo" id="recibo" value="{{ old('recibo') }}" required
                        autocomplete="off" autofocus>
                        <option disabled selected value>Elige un estado</option>
                        <option value="pagado">Pagado</option>
                        <option value="pendiente">Pendiente</option>
                        <option value="devolución">Devolución</option>
                    </select>
                </div>

                <!-- Campo de pago -->
                <div class="col">
                    <label for="pago">Pago</label>

                    <input value="0.00" type="number" step="any" placeholder="0.00" max="999.99" min="-999.99"
                        class="form-control" name="pago" value="{{ old('pago') }}" required autocomplete="off"
                        autofocus>
                </div>

                <!-- Boton para guardar el registro -->
                <div class="col d-flex align-items-end">
                    <button type="submit" class="btn btn-primary">
                        Crear registro
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
