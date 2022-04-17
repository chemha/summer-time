@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl">
                <form enctype="multipart/form-data" method="POST" action="{{ route('ninos.store') }}">
                    @csrf
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

                    <div class="row mb-3">
                        <label for="avatar" class="col-md-4 col-form-label text-md-end">
                            Avatar
                        </label>

                        <div class="col-md-6">
                            <input type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar"
                                value="{{ old('nombre') }}" required autocomplete="avatar" autofocus>

                            @error('avatar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="vidaMaxima" class="col-md-4 col-form-label text-md-end">
                            Vida máxima
                        </label>

                        <div class="col-md-6">
                            <input value="0" type="number" class="form-control @error('vidaMaxima') is-invalid @enderror"
                                name="vidaMaxima" value="{{ old('vidaMaxima') }}" required autocomplete="vidaMaxima"
                                autofocus>

                            @error('vidaMaxima')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="vidaActual" class="col-md-4 col-form-label text-md-end">
                            Vida actual
                        </label>

                        <div class="col-md-6">
                            <input value="0" type="number" class="form-control @error('vidaActual') is-invalid @enderror"
                                name="vidaActual" value="{{ old('vidaActual') }}" required autocomplete="vidaActual"
                                autofocus>

                            @error('vidaActual')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="nivel" class="col-md-4 col-form-label text-md-end">
                            Nivel
                        </label>

                        <div class="col-md-6">
                            <input value="0" type="number" class="form-control @error('nivel') is-invalid @enderror"
                                name="nivel" value="{{ old('nivel') }}" required autocomplete="nivel" autofocus>

                            @error('nivel')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="biografia" class="col-md-4 col-form-label text-md-end">
                            Biografia
                        </label>

                        <div class="col-md-6">
                            <textarea name="biografia" rows="5" cols="52" class="form-control @error('biografia') is-invalid @enderror" required
                                autocomplete="biografia" autofocus></textarea>

                            @error('biografia')
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
                    <div class="row mb-3">
                        <label for="raza" class="col-md-4 col-form-label text-md-end">
                            Raza
                        </label>

                        <div class="col-md-6">
                            <select class="form-control @error('raza') is-invalid @enderror" name="raza"
                                value="{{ old('raza') }}" required autocomplete="raza" autofocus>
                                <option value="dracónido">Dracónido</option>
                                <option value="elfo">Elfo</option>
                                <option value="enano">Enano</option>
                                <option value="gnomo">Gnomo</option>
                                <option value="humano">Humano</option>
                                <option value="mediano">Mediano</option>
                                <option value="semielfo">Semielfo</option>
                                <option value="semiorco">Semiorco</option>
                                <option value="tiflin">Tiflin</option>
                            </select>
                            @error('raza')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="alineamiento" class="col-md-4 col-form-label text-md-end">
                            Alineamiento
                        </label>

                        <div class="col-md-6">
                            <select class="form-control @error('alineamiento') is-invalid @enderror" name="alineamiento"
                                value="{{ old('alineamiento') }}" required autocomplete="alineamiento" autofocus>
                                <option value="bueno">Bueno</option>
                                <option value="neutral">Neutral</option>
                                <option value="caótico">Caotico</option>
                            </select>

                            @error('alineamiento')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>
                    <div class="row mb-3">
                        <label for="puntos" class="col-md-4 col-form-label text-md-end">
                            Puntos
                        </label>

                        <div class="col-md-6">
                            <input value="0" type="number" class="form-control @error('puntos') is-invalid @enderror"
                                name="puntos" value="{{ old('puntos') }}" required autocomplete="puntos" autofocus>

                            @error('puntos')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="armadura" class="col-md-4 col-form-label text-md-end">
                            Armadura
                        </label>

                        <div class="col-md-6">
                            <input value="0" type="number" class="form-control @error('armadura') is-invalid @enderror"
                                name="armadura" value="{{ old('armadura') }}" required autocomplete="armadura" autofocus>

                            @error('armadura')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="iniciativa" class="col-md-4 col-form-label text-md-end">
                            Iniciativa
                        </label>

                        <div class="col-md-6">
                            <input value="0" type="number" class="form-control @error('iniciativa') is-invalid @enderror"
                                name="iniciativa" value="{{ old('iniciativa') }}" required autocomplete="iniciativa"
                                autofocus>

                            @error('iniciativa')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">

                        <label for="velocidad" class="col-md-4 col-form-label text-md-end">
                            Velocidad
                        </label>

                        <div class="col-md-6">
                            <input value="0" type="number" class="form-control @error('velocidad') is-invalid @enderror"
                                name="velocidad" value="{{ old('velocidad') }}" required autocomplete="velocidad"
                                autofocus>

                            @error('velocidad')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="fuerza" class="col-md-4 col-form-label text-md-end">
                            Fuerza
                        </label>

                        <div class="col-md-6">
                            <input value="0" type="number" class="form-control @error('fuerza') is-invalid @enderror"
                                name="fuerza" value="{{ old('fuerza') }}" required autocomplete="fuerza" autofocus>

                            @error('fuerza')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="destreza" class="col-md-4 col-form-label text-md-end">
                            Destreza
                        </label>

                        <div class="col-md-6">
                            <input value="0" type="number" class="form-control @error('destreza') is-invalid @enderror"
                                name="destreza" value="{{ old('destreza') }}" required autocomplete="destreza" autofocus>

                            @error('destreza')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="constitucion" class="col-md-4 col-form-label text-md-end">
                            Constitución
                        </label>

                        <div class="col-md-6">
                            <input value="0" type="number" class="form-control @error('constitucion') is-invalid @enderror"
                                name="constitucion" value="{{ old('constitucion') }}" required
                                autocomplete="constitucion" autofocus>

                            @error('constitucion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inteligencia" class="col-md-4 col-form-label text-md-end">
                            Inteligencia
                        </label>

                        <div class="col-md-6">
                            <input value="0" type="number" class="form-control @error('inteligencia') is-invalid @enderror"
                                name="inteligencia" value="{{ old('inteligencia') }}" required
                                autocomplete="inteligencia" autofocus>

                            @error('inteligencia')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="sabiduria" class="col-md-4 col-form-label text-md-end">
                            Sabiduría
                        </label>

                        <div class="col-md-6">
                            <input value="0" type="number" class="form-control @error('sabiduria') is-invalid @enderror"
                                name="sabiduria" value="{{ old('sabiduria') }}" required autocomplete="sabiduria"
                                autofocus>

                            @error('sabiduria')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="carisma" class="col-md-4 col-form-label text-md-end">
                            Carisma
                        </label>

                        <div class="col-md-6">
                            <input value="0" type="number" class="form-control @error('carisma') is-invalid @enderror"
                                name="carisma" value="{{ old('carisma') }}" required autocomplete="carisma" autofocus>

                            @error('carisma')
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
                </form>
            </div>
            <div class="col-xxl">
                <form enctype="multipart/form-data" method="POST" action="{{ route('ninos.store') }}">
                    @csrf
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

                    <div class="row mb-3">
                        <label for="avatar" class="col-md-4 col-form-label text-md-end">
                            Avatar
                        </label>

                        <div class="col-md-6">
                            <input type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar"
                                value="{{ old('nombre') }}" required autocomplete="avatar" autofocus>

                            @error('avatar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="vidaMaxima" class="col-md-4 col-form-label text-md-end">
                            Vida máxima
                        </label>

                        <div class="col-md-6">
                            <input value="0" type="number" class="form-control @error('vidaMaxima') is-invalid @enderror"
                                name="vidaMaxima" value="{{ old('vidaMaxima') }}" required autocomplete="vidaMaxima"
                                autofocus>

                            @error('vidaMaxima')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="vidaActual" class="col-md-4 col-form-label text-md-end">
                            Vida actual
                        </label>

                        <div class="col-md-6">
                            <input value="0" type="number" class="form-control @error('vidaActual') is-invalid @enderror"
                                name="vidaActual" value="{{ old('vidaActual') }}" required autocomplete="vidaActual"
                                autofocus>

                            @error('vidaActual')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="nivel" class="col-md-4 col-form-label text-md-end">
                            Nivel
                        </label>

                        <div class="col-md-6">
                            <input value="0" type="number" class="form-control @error('nivel') is-invalid @enderror"
                                name="nivel" value="{{ old('nivel') }}" required autocomplete="nivel" autofocus>

                            @error('nivel')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="biografia" class="col-md-4 col-form-label text-md-end">
                            Biografia
                        </label>

                        <div class="col-md-6">
                            <textarea name="biografia" rows="5" cols="52" class="form-control @error('biografia') is-invalid @enderror" required
                                autocomplete="biografia" autofocus></textarea>

                            @error('biografia')
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
                    <div class="row mb-3">
                        <label for="raza" class="col-md-4 col-form-label text-md-end">
                            Raza
                        </label>

                        <div class="col-md-6">
                            <select class="form-control @error('raza') is-invalid @enderror" name="raza"
                                value="{{ old('raza') }}" required autocomplete="raza" autofocus>
                                <option value="dracónido">Dracónido</option>
                                <option value="elfo">Elfo</option>
                                <option value="enano">Enano</option>
                                <option value="gnomo">Gnomo</option>
                                <option value="humano">Humano</option>
                                <option value="mediano">Mediano</option>
                                <option value="semielfo">Semielfo</option>
                                <option value="semiorco">Semiorco</option>
                                <option value="tiflin">Tiflin</option>
                            </select>
                            @error('raza')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="alineamiento" class="col-md-4 col-form-label text-md-end">
                            Alineamiento
                        </label>

                        <div class="col-md-6">
                            <select class="form-control @error('alineamiento') is-invalid @enderror" name="alineamiento"
                                value="{{ old('alineamiento') }}" required autocomplete="alineamiento" autofocus>
                                <option value="bueno">Bueno</option>
                                <option value="neutral">Neutral</option>
                                <option value="caótico">Caotico</option>
                            </select>

                            @error('alineamiento')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>
                    <div class="row mb-3">
                        <label for="puntos" class="col-md-4 col-form-label text-md-end">
                            Puntos
                        </label>

                        <div class="col-md-6">
                            <input value="0" type="number" class="form-control @error('puntos') is-invalid @enderror"
                                name="puntos" value="{{ old('puntos') }}" required autocomplete="puntos" autofocus>

                            @error('puntos')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="armadura" class="col-md-4 col-form-label text-md-end">
                            Armadura
                        </label>

                        <div class="col-md-6">
                            <input value="0" type="number" class="form-control @error('armadura') is-invalid @enderror"
                                name="armadura" value="{{ old('armadura') }}" required autocomplete="armadura" autofocus>

                            @error('armadura')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="iniciativa" class="col-md-4 col-form-label text-md-end">
                            Iniciativa
                        </label>

                        <div class="col-md-6">
                            <input value="0" type="number" class="form-control @error('iniciativa') is-invalid @enderror"
                                name="iniciativa" value="{{ old('iniciativa') }}" required autocomplete="iniciativa"
                                autofocus>

                            @error('iniciativa')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">

                        <label for="velocidad" class="col-md-4 col-form-label text-md-end">
                            Velocidad
                        </label>

                        <div class="col-md-6">
                            <input value="0" type="number" class="form-control @error('velocidad') is-invalid @enderror"
                                name="velocidad" value="{{ old('velocidad') }}" required autocomplete="velocidad"
                                autofocus>

                            @error('velocidad')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="fuerza" class="col-md-4 col-form-label text-md-end">
                            Fuerza
                        </label>

                        <div class="col-md-6">
                            <input value="0" type="number" class="form-control @error('fuerza') is-invalid @enderror"
                                name="fuerza" value="{{ old('fuerza') }}" required autocomplete="fuerza" autofocus>

                            @error('fuerza')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="destreza" class="col-md-4 col-form-label text-md-end">
                            Destreza
                        </label>

                        <div class="col-md-6">
                            <input value="0" type="number" class="form-control @error('destreza') is-invalid @enderror"
                                name="destreza" value="{{ old('destreza') }}" required autocomplete="destreza" autofocus>

                            @error('destreza')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="constitucion" class="col-md-4 col-form-label text-md-end">
                            Constitución
                        </label>

                        <div class="col-md-6">
                            <input value="0" type="number"
                                class="form-control @error('constitucion') is-invalid @enderror" name="constitucion"
                                value="{{ old('constitucion') }}" required autocomplete="constitucion" autofocus>

                            @error('constitucion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inteligencia" class="col-md-4 col-form-label text-md-end">
                            Inteligencia
                        </label>

                        <div class="col-md-6">
                            <input value="0" type="number"
                                class="form-control @error('inteligencia') is-invalid @enderror" name="inteligencia"
                                value="{{ old('inteligencia') }}" required autocomplete="inteligencia" autofocus>

                            @error('inteligencia')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="sabiduria" class="col-md-4 col-form-label text-md-end">
                            Sabiduría
                        </label>

                        <div class="col-md-6">
                            <input value="0" type="number" class="form-control @error('sabiduria') is-invalid @enderror"
                                name="sabiduria" value="{{ old('sabiduria') }}" required autocomplete="sabiduria"
                                autofocus>

                            @error('sabiduria')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="carisma" class="col-md-4 col-form-label text-md-end">
                            Carisma
                        </label>

                        <div class="col-md-6">
                            <input value="0" type="number" class="form-control @error('carisma') is-invalid @enderror"
                                name="carisma" value="{{ old('carisma') }}" required autocomplete="carisma" autofocus>

                            @error('carisma')
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
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
