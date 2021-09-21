@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Restaurantes pertenecientes a un usuario</h1>


            <div class="row">

            @foreach ($restaurantsuser as $r)


                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('images/hotdog.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2 class="card-title">{{ $r->name }}</h2>
                                <h5 class="text-muted"><strong>Propietario: </strong>{{ $r->owner->name }}</h5>
                                <p class="card-text">{{ $r->description }}</p>
                                <a href="#" class="btn btn-primary">Ver más</a>
                            </div>
                            </div>
                    </div>

                @endforeach
        
                
            </div>

    </div>

@endsection