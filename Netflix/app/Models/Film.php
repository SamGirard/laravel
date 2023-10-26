<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    //protected $table = 'films';
    use HasFactory;

    public function realisateur()
    {
        return $this->belongsTo(Personne::class);
        //return $this->belongsTo('App\Models\Personne');
    }

    public function producteur()
    {
        return $this->belongsTo(Personne::class);
    }
}
