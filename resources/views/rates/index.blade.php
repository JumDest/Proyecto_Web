@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Calificaciones</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Calificación</th>
                <th>Comentario</th>
                <th>Producto ID</th>
                <th>Usuario ID</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rates as $rate)
                <tr>
                    <td>{{ $rate->id }}</td>
                    <td>{{ $rate->score }}</td>
                    <td>{{ $rate->comment }}</td>
                    <td>{{ $rate->product_id }}</td>
                    <td>{{ $rate->user_id }}</td>
                    <td>
                        <a href="{{ route('rates.edit', $rate->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('rates.destroy', $rate->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
