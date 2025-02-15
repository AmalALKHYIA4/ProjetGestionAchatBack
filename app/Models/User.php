<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory;

    protected $fillable = [
        'nom',
        'email',
        'password',
        'role',
        'departement_id'
    ];

    protected $hidden = [
        'password',
    ];

    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }

    public function demandes()
    {
        return $this->hasMany(Demande::class);
    }
}
