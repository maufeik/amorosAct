<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Propietario extends Model {
    protected $table = 'propietarios';
    public $timestamps = false;
    protected $fillable = ['email', 'movil'];

    public function mascotas() {
        return $this->hasMany(Mascota::class, 'propietario_id');
    }
}