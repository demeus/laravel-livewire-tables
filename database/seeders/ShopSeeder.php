<?php

namespace Database\Seeders;

use App\Models\Platform;
use App\Models\Shop;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Shop::factory()
            ->count(10)
            ->create();
    }
}
