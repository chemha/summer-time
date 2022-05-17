<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Anuncio;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class AnuncioTest extends TestCase
{
    public function testCreateAnuncio()
    {
        $user = User::factory()->create();
        $anuncio_test = [
            'titulo' => 'Test anuncio con descripcción',
            'descripcion' => 'Este es un anuncio de prueba',
        ];

        $response =  $user->anuncio('/anuncios', $anuncio_test);
        $response->assertSessionHas('status', 'anuncio has been created sucessfully');

        $anuncio = Anuncio::where('titulo', $anuncio_test['titulo'])->first();

        $this->assertNotNull($anuncio);

        $user->anuncio('/logout');

        $response = $this->anuncio('/anuncios');
        $response->assertStatus(403);
    }
}
