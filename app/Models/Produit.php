<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = [
        'designation',
        'description',
        'quantite_disponible'
    ];

    public function lignesDemandes()
    {
        return $this->hasMany(LigneDemande::class);
    }
}
