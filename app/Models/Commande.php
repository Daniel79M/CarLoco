<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Car;
use App\Models\ModePaiement;

class Commande extends Model
{
    protected $fillable = ['mode_paiement_id', 'car_id', 'couleur','numeroCommande'];


    public function modePaiement(){
        return $this->hasOne(ModePaiment::class);
    }

    public function car()
    {
        return $this->hasOne(Car::class);
    }
}
