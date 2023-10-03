<?php

namespace Database\Seeders;

use App\Models\CarStock;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarStockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CarStock::factory()->count(5000)->create();
    }
}
