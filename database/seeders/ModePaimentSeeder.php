<?php

namespace Database\Seeders;

use App\Models\ModePaiment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModePaimentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModePaiment::create([
            'type' => 'Paiement en liquide'
        ]);

        // ModePaiment::create([
        //     'type' => 'Paiement par cheque'
        // ]);

        // ModePaiment::create([
        //     'type' => 'Paiement par carte de credit'
        // ]);
    }
}
