<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{

    use HasFactory;

    protected $fillable = [
        'marque', 'description', 'price', 'model', 'make', 'year'
    ];

    public function images()
    {
        return $this->hasMany(CarImage::class);
    }

    public function commande(){
        return $this->belongsTo(Commande::class);
    }
}
