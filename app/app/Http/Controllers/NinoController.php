<?php

namespace App\Http\Controllers;

use App\Models\Nino;
use Illuminate\Http\Request;

class NinoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        Nino::create([
            "nombre" => $request->nombre,
            "apellidos" => $request->apellidos,
            "edad" => $request->edad,
            "hermanos" => $request->hermanos,

            "medicacion" => $request->medicacion,
            "especial" => $request->especial,
            "observacionesMedicas" => $request->observacionesMedicas,

            "tutor" => $request->tutor,
            "email" => $request->email,
            "telefono1" => $request->telefono1,
            "telefono2" => $request->telefono2,

            "grupo" => $request->grupo,
            "horario" => $request->horario,
            "quincena1" => $request->quincena1,
            "quincena2" => $request->quincena2,
            "quincena3" => $request->quincena3,
            "quincena4" => $request->quincena4,

            "datos" => $request->datos,
            "fotos" => $request->fotos,
            "recibo" => $request->recibo,
            "pago" => $request->pago,
        ]);

        return view('ninos.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nino  $nino
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nino $nino)
    {
        //
    }
}
