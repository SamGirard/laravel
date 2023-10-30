<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;
    
    public function filmsRealises() : HasMany
    {
        //return $this->belongsTo(Film::class);
        return $this->hasMany(Film::class, 'realisateur_id');
    }

    public function filmsProduits() : HasMany
    {
        //return $this->belongsTo(Film::class);
        return $this->hasMany(Film::class, 'producteur_id');
    }
}
