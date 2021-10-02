@extends('layouts.app')

@section('content')
<div class="container" .accordion-flush>
    <h1>Mis restaurantes</h1>
    <br>

         <a href="{{ route('restaurants.create') }}" title="visitar este restaurante" class="btn btn-success">CREAR</a>

    <br><br><br>


@foreach ($restaurants as $restaurant)
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <h3>{{ $restaurant->name }}</h3>
        </button>
      </h2>
    </div>
    {{-- <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample"> --}}
      <div class="card-body">
        <!-- TODO: AGREGAR EL ENLACE A VER RESTURANTE DE PROPIETARIO --> 
         <a href="" class="btn btn-primary" title="visitar este restaurante">VER</a>
         <a href="" title="visitar este restaurante" class="btn btn-secondary">MODIFICAR</a>
         <a href="" title="visitar este restaurante" class="btn btn-danger">ELIMINAR</a>
      </div>
    {{-- </div> --}}
@endforeach

  </div>
</div>
@endsection
