<?php

namespace Database\Factories;

use App\Models\Promotion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Promotion>
 */
class PromotionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Promotion::class;

    public function definition(): array
    {
        return [
            'title'  => $this->faker->sentence(),
            'image'  => $this->faker->imageUrl(),
            'text'   => $this->faker->paragraph(),
            'custom_promo' => $this->faker->boolean,
            'status' => $this->faker->randomElement([Promotion::STATUS_LIVE, Promotion::STATUS_UPCOMING, Promotion::STATUS_ARCHIVED]),
        ];
    }
}
