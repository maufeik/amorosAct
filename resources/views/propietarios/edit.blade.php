@extends('layouts.app')
@section('content')
<fieldset>
    <legend>Gestió de Propietari (Modificar)</legend>
    <form action="{{ route('propietarios.update', $propietario->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>ID:</label>
        <input type="text" value="{{ $propietario->id }}" class="form-control" disabled>
        
        <label>Nombre:</label>
        <input type="text" value="{{ $propietario->nom }}" class="form-control" disabled>
        
        <label>Email *:</label>
        <input type="text" name="email" value="{{ $propietario->email }}" class="form-control" required>
        
        <label>Móvil *:</label>
        <input type="text" name="movil" value="{{ $propietario->movil }}" class="form-control" required>

        <div class="mt-3">
            <button type="submit" class="btn btn-secondary">Guardar Cambios</button>
        </div>
    </form>
</fieldset>
@endsection