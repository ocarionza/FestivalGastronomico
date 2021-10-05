@extends('layouts.app')

@section('content')
<div class="container" .accordion-flush>
    <h1>Mis restaurantes</h1>
    <br>

         <a href="{{ route('restaurants.create') }}" title="visitar este restaurante" class="btn btn-success">CREAR</a>

    <br><br><br>



<div class="accordion" id="accordionExample">
  <div class="card">
@foreach ($restaurants as $restaurant)
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <h3>{{ $restaurant->name }}</h3>
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <!-- TODO: AGREGAR EL ENLACE A VER RESTURANTE DE PROPIETARIO --> 
        <div class="btn-group" role="group" aria-label="Basic example">
         <a href="{{ route('restaurants.show', $restaurant->id)}}" class="btn btn-primary mr-2" title="visitar este restaurante">VER</a>
         <a href="{{ route('restaurants.edit', $restaurant->id) }}" title="visitar este restaurante" class="btn btn-secondary mr-2">MODIFICAR</a>
          {{ Form::open(['route' => [
            'restaurants.destroy', $restaurant->id], 
            'method' => 'delete',
            'onsubmit' => 'return confirm(\'¿Esta seguro que desea remover el restaurante?\n¡Esta acción no se puede deshacer!\')'
          ]) }}
            <button type="submit" class="btn btn-danger mr-2">ELIMINAR</button>
          {!! Form::close() !!}
        </div>
         {{-- <a href="" title="visitar este restaurante" class="btn btn-danger">ELIMINAR</a> --}}
      </div>
    </div>
@endforeach
  </div>
</div>
@endsection
