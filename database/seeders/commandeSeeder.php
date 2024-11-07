<?php

namespace Database\Seeders;

use App\Models\ModePaiment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class commandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModePaiment::create([
            'type' => 'Paiement par carte de credit'
        ]);
         // ModePaiment::create([
        //     'type' => 'Paiement par cheque'
        // ]);

        // ModePaiment::create([
        //     'type' => 'Paiement par carte de credit'
        // ]);
    }
}
