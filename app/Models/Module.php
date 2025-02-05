<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected function examens()
    {
        return $this->hasMany(Examen::class);
    }

    protected function filieres()
    {
        return $this->hasMany(Filiere::class);
    }
}
