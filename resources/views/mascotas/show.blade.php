@extends('layouts.app')
@section('content')
<fieldset>
    <legend>Detalls de la Mascota</legend>
    <p><strong>Nom Mascota:</strong> {{ $mascota->nom }} (ID: {{ $mascota->id }})</p>
    <p><strong>Propietari:</strong> {{ $mascota->propietario->nom }} (ID: {{ $mascota->propietario_id }})</p>

    <h4 class="mt-4">Historial Clínic</h4>
    <table class="table">
        <thead>
            <tr><th>Data</th><th>Motiu</th><th>Descripció</th></tr>
        </thead>
        <tbody>
            @forelse ($mascota->historial as $h)
                <tr>
                    <td>{{ $h->fecha }}</td>
                    <td>{{ $h->motivo_visita }}</td>
                    <td>{{ $h->descripcion }}</td>
                </tr>
            @empty
                <tr><td colspan="3">No hi ha historial per aquesta mascota.</td></tr>
            @endforelse
        </tbody>
    </table>
</fieldset>
@endsection