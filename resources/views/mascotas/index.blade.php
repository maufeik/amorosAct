@extends('layouts.app')
@section('content')
<fieldset>
    <legend>Llistat de Mascotes</legend>
    <table class="table">
        <thead>
            <tr><th>ID</th><th>Nom</th><th>ID Propietari</th></tr>
        </thead>
        <tbody>
            @foreach ($mascotas as $m)
                <tr>
                    <td>{{ $m->id }}</td>
                    <td>{{ $m->nom }}</td>
                    <td>{{ $m->propietario_id }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</fieldset>
@endsection