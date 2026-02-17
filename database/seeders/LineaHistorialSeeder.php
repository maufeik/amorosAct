<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LineaHistorial;

class LineaHistorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        LineaHistorial::factory()->count(30)->create(); 
    }
}
