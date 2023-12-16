<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;



use App\Models\Product;


class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(2, 0, 1000),
            'image' => 'https://www.lacentrale.fr/static/fragment-landing/media/reco_electriques.968e39af.png',
            'updated_at' => now(),
            'created_at' => now(),
        ];
    }
}
