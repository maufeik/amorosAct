@extends('layouts.app')
@section('content')
<fieldset>
    <legend>Propietarios</legend>
    <table class="table">
        <thead>
            <tr><th>ID</th><th>Nombre</th><th>Email</th><th>Movil</th></tr>
        </thead>
        <tbody>
            @foreach ($propietarios as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->nom }}</td>
                <td>{{ $p->email }}</td>
                <td>{{ $p->movil }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</fieldset>
@endsection