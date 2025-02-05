<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory;
    protected function groupes()
    {
        return $this->hasMany(Groupe::class);
    }
    protected function profes()
    {
        return $this->hasMany(Profe::class);
    }

    protected function modules()
    {
        return $this->hasMany(Module::class);
    }
}
