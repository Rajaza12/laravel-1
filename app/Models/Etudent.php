<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudent extends Model
{
    use HasFactory;

    protected function notes()
    {
        return $this->hasMany(Note::class);
    }
    protected function groupe()
    {
        return $this->belongsTo(Groupe::class);
    }
}
