@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>
            Restaurante
            <small class="text-muted">{{ $restaurant->name }}</small>
        </h3>

        <a href="{{ route('restaurants.edit', $restaurant->id) }}" title="visitar este restaurante" class="btn btn-secondary">MODIFICAR</a>

    </div>

@endsection