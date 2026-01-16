<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
    
       // Geramos um ID aleatório para a imagem do Picsum
       $imageId = $this->faker->numberBetween(1, 1000);

       return [
            // Fakes
            'name' => $this->faker->word,
            // 'cover' => $this->faker->imageUrl(),
            // 'cover' => "https://placehold.jp/640x480.png?text=" . $this->faker->word,
            'cover' => "https://picsum.photos/640/480?image=" . $imageId,
            'price' => $this->faker->randomFloat(1, 20, 30),
            'description' => $this->faker->sentence,
            'stock' => $this->faker->randomDigit(),
        ];
    }
}
