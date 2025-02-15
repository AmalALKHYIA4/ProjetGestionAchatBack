<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'departement_id',
        'description',
        'justification',
        'pdf',
        'statut'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }

    public function lignesDemandes()
    {
        return $this->hasMany(LigneDemande::class);
    }
}
