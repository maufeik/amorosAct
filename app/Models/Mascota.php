<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model {
    protected $table = 'mascotas'; 
    public $timestamps = false;

    public function propietario() {
        return $this->belongsTo(Propietario::class, 'propietario_id');
    }

    public function historial() {
        return $this->hasMany(Historial::class, 'mascota_id');
    }
}