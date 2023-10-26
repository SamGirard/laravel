<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;
    
    public function filmsRealiser() : HasMany
    {
        //return $this->belongsTo(Film::class);
        return $this->hasMany('App\Models\Film');
    }

    public function filmsProduits() : HasMany
    {
        //return $this->belongsTo(Film::class);
        return $this->hasMany('App\Models\Film');
    }
}
