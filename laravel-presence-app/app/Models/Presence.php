<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    //
    protected $fillable = [
        'user_id', 'nom', 'prenom', 'date', 'statut'
    ];
}
