@extends('layouts.app')
@section('content')
<fieldset>
    <legend>Afegir línia d'historial</legend>
    <form method="POST" action="{{ route('mascotas.store') }}">
        @csrf
        <input type="hidden" name="action" value="add_historial">
        <label>ID Mascota:</label>
        <input type="number" name="mascota_id" class="form-control" required>
        <label>Data:</label>
        <input type="date" name="fecha" value="{{ date('Y-m-d') }}" class="form-control" required>
        <label>Motiu:</label>
        <input type="text" name="motivo" class="form-control" required>
        <label>Descripció:</label>
        <textarea name="descripcion" class="form-control" required></textarea>
        <button type="submit" class="btn btn-success mt-2">Guardar</button>
    </form>
</fieldset>
@endsection