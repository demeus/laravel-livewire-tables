<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Shop;
use App\Models\Promotion;

class PromotionShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $shops = Shop::all();
        $promotions = Promotion::all();

        if ($shops->isEmpty() || $promotions->isEmpty()) {
            echo "No shops or promotions are available. Skipping seeder.";
            return;
        }

        foreach ($shops as $shop) {
            $shop->promotions()->attach(
                $promotions->random(rand(1, 3))->pluck('id')->toArray() // Attach 1 to 3 random promotions to each shop
            );
        }
    }
}
