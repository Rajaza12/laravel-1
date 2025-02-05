<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Groupe extends Model
{
    use HasFactory;

    protected function etudents(){
        return $this->hasMany(Etudent::class);
    } 
    protected function filiere(){
        return $this->belongsTo(Filiere::class);
    }

    protected function salles(): HasMany{
        return $this->hasMany(Salle::class);
    }
}

