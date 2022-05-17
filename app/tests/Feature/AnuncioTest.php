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
    /**
     * Crea un usuario y crea un anuncio
     *
     * @return void
     */
    public function testCreateAnuncio()
    {
        $user = User::factory()->create();
        $anuncio_test = [
            'titulo' => 'Test anuncio con descripcción',
            'descripcion' => 'Este es un anuncio de prueba',
        ];

        $this->actingAs($user)->post('/anuncios', $anuncio_test);

        $anuncio = Anuncio::where('titulo', $anuncio_test['titulo'])->first();

        $this->assertNotNull($anuncio);
    }

    /**
     * Intenta crear un anuncio sin usuario
     *
     * @return void
     */
    public function testCreateAnuncioNoUser()
    {
        $anuncio_test = [
            'titulo' => 'Test anuncio con descripcción',
            'descripcion' => 'Este es un anuncio de prueba',
        ];

        $this->post('/anuncios', $anuncio_test);

        $anuncio = Anuncio::where('titulo', $anuncio_test['titulo'])->first();

        $this->assertNull($anuncio);
    }
}
