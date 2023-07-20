<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Promotion;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(10)->create();

        $this->call(PlatformSeeder::class);
        $this->call(ShopSeeder::class);
        $this->call(PromotionSeeder::class);
        $this->call(PromotionShopSeeder::class);


        User::factory()->create([
             'name' => 'Admin',
             'email' => 'test@example.com',
         ]);
    }
}
