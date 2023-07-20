<?php

namespace Database\Factories;

use App\Models\Platform;
use App\Models\Promotion;
use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop>
 */
class ShopFactory extends Factory
{

    protected $model = Shop::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'       => $this->faker->title,
            'logo'        => $this->faker->imageUrl(640, 480, 'business', TRUE, 'Shop Logo'),
            'description' => $this->faker->paragraph,
            'platform_id' => Platform::query()->inRandomOrder()->first()->id,
        ];
    }
}
