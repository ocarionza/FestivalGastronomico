@extends('layouts.app')

@section('content')

    <div class="container">
        <h1 class="mb-4">Nuestros restaurantes</h1>

        {{ Form::open(['url' => route('front_page.index'), 'method' => 'get']) }}
        <div class="input-group mb-3 mt-1">
            {{ Form::select('filter', $categories, $filter, [ 'class' => 'form-control', 'aria-describedby' => 'button-filter']) }}
            {{ Form::button('<i class="fas fa-search"></i>', [ 'class' => 'btn btn-primary', 'id' => 'button-filter', 'type' => 'submit']) }}
        </div>

        <?php 
            $rows = $restaurants->count() / 4;
        ?>

        @for ($i = 0; $i < $rows; $i++)


            <div class="row">

            @for ($j = 0; $j < 4; $j++)

                @if (isset($restaurants[($i*4)+$j]))

                <?php 
                    $restaurant = $restaurants[($i*4)+$j];
                ?> 

                    <div class="col-3 mb-3">
                        <div class="card" style="height: 500px; width: 17rem;">
                            <img src="{{ asset('images/hotdog.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2 class="card-title">{{ $restaurant->name }}</h2>
                                <h5 class="text-muted">{{ $restaurant->category->name }}</h5>
                                <p class="card-text">{{ $restaurant->description }}</p>
                                <a href="{{ route('restaurants.show', $restaurant->id)}}" class="btn btn-primary">Ver más</a>
                            </div>
                            </div>
                    </div>

                @endif
                
            @endfor 
                
            </div>
            
        @endfor

    {{ $restaurants -> Links() }}
    </div>

@endsection