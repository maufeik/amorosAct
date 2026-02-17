<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mascota extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'propietario_id'
    ];

    public function propietario()
    {
        return $this->belongsTo(Propietario::class);
    }

    public function historial()
    {
        return $this->hasMany(LineaHistorial::class);
    }
}