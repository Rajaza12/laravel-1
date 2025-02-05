<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profe extends Model
{
    use HasFactory;

    protected function filieres()
    {
        return $this->hasMany(Filiere::class);
    }
}
