<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LigneDemande extends Model
{
    use HasFactory;

    protected $table = 'lignes_demandes'; // Nom de la table

    protected $fillable = [
        'demande_id',
        'produit_id',
        'designation',
        'quantite',
        'statut',
    ];

    /**
     * Relation avec la table `demandes`
     * Une ligne de demande appartient à une seule demande
     */
    public function demande()
    {
        return $this->belongsTo(Demande::class, 'demande_id');
    }

    /**
     * Relation avec la table `produits`
     * Une ligne de demande peut être associée à un produit
     */
    public function produit()
    {
        return $this->belongsTo(Produit::class, 'produit_id');
    }
}
