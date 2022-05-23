<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nino>
 */
class NinoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nombre" => $this->faker->firstName,
            "apellidos" => $this->faker->lastName,
            "edad" => $this->faker->numberBetween(0, 17),
            "hermanos" => $this->faker->numberBetween(0, 20),

            //En los campos booleanos es necesario usar has(), si no los checkboxes vacios devuelven null
            "medicacion" => $this->faker->boolean,
            "especial" => $this->faker->boolean,
            "observacionesMedicas" => $this->faker->realText,

            "tutor" => $this->faker->name,
            "email" => $this->faker->email,
            "telefono1" => $this->faker->phoneNumber,
            "telefono2" => $this->faker->phoneNumber,

            "grupo" => $this->faker->numberBetween(1, 4),
            "horario" => $this->faker->randomElement(['8:00-14:00', '8:00-15:00', '9:00-14:00', '9:00-15:00']),
            
            "quincena9" => $this->faker->boolean,
            "quincena1" => $this->faker->boolean,
            "quincena2" => $this->faker->boolean,
            "quincena3" => $this->faker->boolean,
            "quincena4" => $this->faker->boolean,

            "datos" => $this->faker->boolean,
            "fotos" => $this->faker->boolean,
            "anotaciones" => $this->faker->realText,

            "recibo" => $this->faker->randomElement(["pagado", "pendiente"]),
            "pago" => $this->faker->numberBetween(0.00, 999.99),
        ];
    }
}
