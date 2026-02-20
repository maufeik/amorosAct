@extends('layouts.app')
@section('content')
<fieldset>
    <legend>Cercar Mascota (Dades i Historial)</legend>
    <form method="POST" action="{{ route('mascotas.store') }}">
        @csrf
        <label>ID Mascota:</label>
        <input type="number" name="id" class="form-control" required>
        <button type="submit" class="btn btn-primary mt-2">Continuar</button>
    </form>
</fieldset>
@endsection