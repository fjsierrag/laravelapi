@extends('layouts.main')
@section('content')
    <table class="table table-striped">
        <thead>
          <tr><th>ID</th><th>Nombre</th><th>Acciones</th></tr>
        </thead>
        <tbody>
        @foreach ($productos as $producto)
            <tr>
                <td>{{$producto->idProductos}}</td>
                <td>{{$producto->nombre}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
