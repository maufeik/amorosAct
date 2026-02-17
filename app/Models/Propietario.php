<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Propietario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'email',
        'movil'
    ];

    public function mascotas()
    {
        return $this->hasMany(Mascota::class);
    }
}