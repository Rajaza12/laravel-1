<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Post; // Import du modèle Post

class UserCustom extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = 'users_custom'; // Mets le bon nom de ta table ici


    protected $fillable = [
        'nom', 'prenom', 'email', 'telephone', 'password',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

    // Relation avec les posts
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
