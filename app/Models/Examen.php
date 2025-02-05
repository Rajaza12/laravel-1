<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    use HasFactory;

    protected function modules()
    {
        return $this->hasMany(Module::class);
    }

    protected function notes()
    {
        return $this->hasMany(Note::class);
    }
}
