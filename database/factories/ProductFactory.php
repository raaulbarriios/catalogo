<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->words(3, true),
            'descripcion' => fake()->paragraph(),
            'precio' => fake()->randomFloat(2, 29, 1999),
            'categoria' => fake()->randomElement(['Smartphones', 'Portátiles', 'Audio', 'Gaming', 'Accesorios', 'Fotografía']),
            'imagen' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=600&auto=format&fit=crop&q=80',
            'stock' => fake()->numberBetween(0, 50),
            'rating' => fake()->randomFloat(1, 3.5, 5.0),
            'destacado' => fake()->boolean(30),
        ];
    }
}
