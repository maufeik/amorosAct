<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Historial extends Model {
    protected $table = 'lineas_historial';
    public $timestamps = false;
    protected $fillable = ['fecha', 'motivo_visita', 'descripcion', 'mascota_id'];
}