<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LineaHistorial>
 */
class LineaHistorialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'fecha' => $this->faker->date(),
            'motivo_visita' => $this->faker->sentence(3),
            'descripcion' => $this->faker->paragraph(),
            'mascota_id' => \App\Models\Mascota::factory(),
        ];
    }
}
