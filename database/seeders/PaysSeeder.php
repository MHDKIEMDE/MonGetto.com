<?php

namespace Database\Seeders;

use App\Models\Pays;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaysSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Générer 20 propriétés avec des données aléatoires
        Pays::factory()->count(20)->create();
    }
}
