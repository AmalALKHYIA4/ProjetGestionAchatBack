<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'chef_id'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function chef()
    {
        return $this->belongsTo(User::class, 'chef_id');
    }
}
