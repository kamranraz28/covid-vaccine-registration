<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VaccineCenter;

class VaccineCenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        VaccineCenter::create(['name' => 'Center 1', 'location' => 'Location 1', 'capacity' => 2]);
        VaccineCenter::create(['name' => 'Center 2', 'location' => 'Location 2', 'capacity' => 5]);
        VaccineCenter::create(['name' => 'Center 3', 'location' => 'Location 3', 'capacity' => 10]);
        VaccineCenter::create(['name' => 'Center 4', 'location' => 'Location 4', 'capacity' => 2]);
        VaccineCenter::create(['name' => 'Center 5', 'location' => 'Location 5', 'capacity' => 2]);
        VaccineCenter::create(['name' => 'Center 6', 'location' => 'Location 6', 'capacity' => 5]);
        VaccineCenter::create(['name' => 'Center 7', 'location' => 'Location 7', 'capacity' => 2]);
        VaccineCenter::create(['name' => 'Center 8', 'location' => 'Location 8', 'capacity' => 5]);
        VaccineCenter::create(['name' => 'Center 9', 'location' => 'Location 9', 'capacity' => 2]);
        VaccineCenter::create(['name' => 'Center 10', 'location' => 'Location 10', 'capacity' => 5]);
    }
}
