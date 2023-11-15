<?php

namespace Database\Seeders;

use App\Models\CarSeries;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CarSeries::factory()->count(1000)->create();
    }
}
