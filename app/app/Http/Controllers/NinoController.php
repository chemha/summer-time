<?php

namespace App\Http\Controllers;

use App\Models\Nino;
use Illuminate\Http\Request;

class NinoController extends Controller
{

    //Requerir autenticación para acceder a las páginas
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ninos.index', ['ninos' => Nino::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('viewAny', auth()->user());
        //Redirección al formulario
        return view('ninos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('viewAny', auth()->user());

        $usuario = auth()->user();
        
        //Inserción de datos
        $usuario->ninos()->create([
            "nombre" => $request->nombre,
            "apellidos" => $request->apellidos,
            "edad" => $request->edad,
            "hermanos" => $request->hermanos,

            //En los campos booleanos es necesario usar has(), si no los checkboxes vacios devuelven null
            "medicacion" => $request->has('medicacion'),
            "especial" => $request->has('especial'),
            "observacionesMedicas" => $request->observacionesMedicas,

            "tutor" => $request->tutor,
            "email" => $request->email,
            "telefono1" => $request->telefono1,
            "telefono2" => $request->telefono2,

            "grupo" => $request->grupo,
            "horario" => $request->horario,
            "quincena0" => $request->has('quincena0'),
            "quincena1" => $request->has('quincena1'),
            "quincena2" => $request->has('quincena2'),
            "quincena3" => $request->has('quincena3'),
            "quincena4" => $request->has('quincena4'),

            "datos" => $request->has('datos'),
            "fotos" => $request->has('fotos'),
            "anotaciones" => $request->anotaciones,

            "recibo" => $request->recibo,
            "pago" => $request->pago,
        ]);

        //Vuelta al index con mensaje confirmando la creación
        return redirect()->route('ninos.index')->with('alert', [
            'type' => 'success',
            'message' => "Registro guardado correctamente.",
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nino  $nino
     * @return \Illuminate\Http\Response
     */
    public function show(Nino $nino)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nino  $nino
     * @return \Illuminate\Http\Response
     */
    public function edit(Nino $nino)
    {
        $this->authorize('viewAny', auth()->user());
        return view('ninos.edit', compact('nino'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nino  $nino
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nino $nino)
    {
        $this->authorize('viewAny', auth()->user());

        $nino->update([
            "nombre" => $request->nombre,
            "apellidos" => $request->apellidos,
            "edad" => $request->edad,
            "hermanos" => $request->hermanos,

            //En los campos booleanos es necesario usar has(), si no los checkboxes vacios devuelven null
            "medicacion" => $request->has('medicacion'),
            "especial" => $request->has('especial'),
            "observacionesMedicas" => $request->observacionesMedicas,

            "tutor" => $request->tutor,
            "email" => $request->email,
            "telefono1" => $request->telefono1,
            "telefono2" => $request->telefono2,

            "grupo" => $request->grupo,
            "horario" => $request->horario,
            "quincena0" => $request->has('quincena0'),
            "quincena1" => $request->has('quincena1'),
            "quincena2" => $request->has('quincena2'),
            "quincena3" => $request->has('quincena3'),
            "quincena4" => $request->has('quincena4'),

            "datos" => $request->has('datos'),
            "fotos" => $request->has('fotos'),
            "anotaciones" => $request->anotaciones,

            "recibo" => $request->recibo,
            "pago" => $request->pago,
        ]);

        return redirect()->route('ninos.index')->with('alert', [
            'type' => 'success',
            'message' => "El registro se ha modificado correctamente.",
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nino  $nino
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nino $nino)
    {
        $this->authorize('viewAny', auth()->user());
        
        $nino->delete();
        return redirect()->route('ninos.index')->with('alert', [
            'type' => 'success',
            'message' => "El registro se ha borrado correctamente.",
        ]);
    }
}
