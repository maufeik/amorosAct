<?php
namespace App\Http\Controllers;

use App\Models\Propietario;
use Illuminate\Http\Request;

class PropietarioController extends Controller {

    public function index() {
        $propietarios = Propietario::all();
        return view('propietarios.index', compact('propietarios'));
    }

    public function create(Request $request) {
        // Recibe 'form_search_mascotes' o 'form_search' desde el Dropdown
        $option = $request->query('option');
        return view('propietarios.search', compact('option'));
    }

    public function store(Request $request) {
        // Si el usuario venía de "Buscar mascotas", vamos a la lista de mascotas
        if ($request->option == 'form_search_mascotes') {
            return redirect()->route('propietarios.show', $request->id);
        }
        // Si venía de "Modificar", vamos al formulario de edición
        return redirect()->route('propietarios.edit', $request->id);
    }

    public function show($id) {
        // Carga el propietario y sus mascotas (si no tiene, devuelve colección vacía)
        $propietario = Propietario::with('mascotas')->findOrFail($id);
        return view('propietarios.mascotas_list', compact('propietario'));
    }

    public function edit($id) {
        $propietario = Propietario::findOrFail($id);
        return view('propietarios.edit', compact('propietario'));
    }

    public function update(Request $request, $id) {
        $propietario = Propietario::findOrFail($id);
        // Update de los campos email y movil
        $propietario->update($request->only(['email', 'movil']));
        return redirect()->route('propietarios.index')->with('info', 'Propietario actualizado');
    }
}