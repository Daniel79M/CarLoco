<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModePaiment extends Model
{
    protected $fillable = [
        'type',
        'description'
    ];


    public function commande(){
        return $this->belongsTo(Commande::class);
    }
}
