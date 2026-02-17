<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Propietario;

class PropietarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void {
        Propietario::factory()->count(10)->create(); 
    }
}
