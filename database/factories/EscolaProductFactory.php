<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AdminProduct>
 */
class EscolaProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'produto' => $this->faker->word,
            'categoria' => $this->faker->word,
            'descricao' => $this->faker->sentence(),
            'quantidade' => $this->faker->randomFloat(1,3,5),
            'fornecedor' => $this->faker->company(),


        ];
    }
}