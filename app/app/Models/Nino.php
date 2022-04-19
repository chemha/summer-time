<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nino extends Model
{

    protected $fillable = [
        'nombre',
        'apellidos',
        'edad',
        'hermanos',

        'medicacion',
        'especial',
        'observacionesMedicas',

        'tutor',
        'email',
        'telefono1',
        'telefono2',

        'grupo',
        'hermanos',
        'horario',
        'quincena1',
        'quincena3',
        'quincena2',
        'quincena4',

        'datos',
        'fotos',
        'anotaciones',

        'recibo',
        'pago',
    ];

    use HasFactory;
}
