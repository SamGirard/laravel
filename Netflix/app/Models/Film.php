<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    //protected $table = 'films';
    use HasFactory;

    protected $fillable = ['titre', 'resume', 'affiche', 'duree', 'realisateur_id', 'producteur_id', 'annee', 'cote', 'categorie', 'bandeAnnonce'];

    public function realisateur()
    {
        return $this->belongsTo(Personne::class);
    }

    public function producteur()
    {
        return $this->belongsTo(Personne::class);
    }
}
