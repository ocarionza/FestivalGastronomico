@extends('layouts.app')

@section('content')

<div class="container">
    <h1>CREAR NUEVO RESTAURANTE</h1>

        @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
        @endif
    
        {{ Form::open(['route' => 'restaurants.store', 'method' => 'post']) }}
            @include('restaurants.form_fields')

        {{ Form::submit('CREAR', [ 'class' => 'btn btn-primary' ]) }}
        <a href=" {{ route('home') }}" title="visitar este restaurante" class="btn btn-danger">CANCELAR</a>

    {!! Form::close() !!}

</div>

@endsection