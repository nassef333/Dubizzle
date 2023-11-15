<?php

namespace Database\Seeders;

use App\Models\CarParts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarPartsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CarParts::factory()->count(500)->create();
    }
}
