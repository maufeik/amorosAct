<?php
namespace App\Http\Controllers;

use App\Models\Mascota;
use App\Models\Historial;
use Illuminate\Http\Request;

class MascotaController extends Controller {

    public function index() {
        $mascotas = Mascota::all();
        return view('mascotas.index', compact('mascotas'));
    }

    public function create(Request $request) {
        $option = $request->query('option');
        if ($option == 'form_add_historial_mascotes') {
            return view('mascotas.form_add_historial');
        }
        return view('mascotas.search');
    }

    public function store(Request $request) {
        if ($request->has('action') && $request->action == 'add_historial') {
            Historial::create([
                'fecha' => $request->fecha,
                'motivo_visita' => $request->motivo,
                'descripcion' => $request->descripcion,
                'mascota_id' => $request->mascota_id
            ]);
            return redirect()->route('mascotas.show', $request->mascota_id);
        }

        return redirect()->route('mascotas.show', $request->id);
    }

    public function show($id) {
        $mascota = Mascota::with(['propietario', 'historial'])->findOrFail($id);
        return view('mascotas.show', compact('mascota'));
    }
}