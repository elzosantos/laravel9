<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Partner>
 */
class PartnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'razaoSocial' => fake()->name(),
            'description' => fake()->address(),
            'CNPJ' => fake()->numberBetween(100,10000),
            'opening_hours' => '08:00 às 18:00',   
           
        ];
    }
}
