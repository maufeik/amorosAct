<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LineaHistorial extends Model
{
    use HasFactory;

    protected $table = 'lineas_historial';

    protected $fillable = [
        'fecha',
        'motivo_visita',
        'descripcion',
        'mascota_id'
    ];

    public function mascota()
    {
        return $this->belongsTo(Mascota::class);
    }
}