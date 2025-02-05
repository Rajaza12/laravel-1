<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected function etudaint()
    {
        return $this->belongsTo(Etudent::class);
    }

    protected function examen()
    {
        return $this->belongsTo(related: Examen::class);
    }
}
