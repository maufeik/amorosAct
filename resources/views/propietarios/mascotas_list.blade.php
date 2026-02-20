@extends('layouts.app')
@section('content')
<fieldset>
    <legend>Mascotas del propietario</legend>
    <div class="mb-4">
        <p><strong>Propietario:</strong> {{ $propietario->nom }}</p>
        <p><strong>Email:</strong> {{ $propietario->email }}</p>
    </div>

    <table class="table">
        <thead>
            <tr><th>ID Mascota</th><th>Nom Mascota</th></tr>
        </thead>
        <tbody>
            @forelse ($propietario->mascotas as $m)
                <tr>
                    <td>{{ $m->id }}</td>
                    <td>{{ $m->nom }}</td>
                </tr>
            @empty
                <tr><td colspan="2">Aquest propietari no té mascotes.</td></tr>
            @endforelse
        </tbody>
    </table>
</fieldset>
@endsection