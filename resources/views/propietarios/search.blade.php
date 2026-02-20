@extends('layouts.app')
@section('content')
<fieldset>
    <legend>Cercar Propietari per ID</legend>
    <form method="POST" action="{{ route('propietarios.store') }}">
        @csrf
        <input type="hidden" name="option" value="{{ $option }}">
        
        <div class="mb-3">
            <label>ID del Propietari:</label>
            <input type="number" name="id" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Continuar</button>
    </form>
</fieldset>
@endsection