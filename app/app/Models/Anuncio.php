<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    protected $fillable = [
        'titulo',
        'descripcion',
    ];

    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
