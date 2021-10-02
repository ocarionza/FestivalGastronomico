@extends('layouts.app')

@section('content')

<div class="container">
    <h1>CREAR NUEVO RESTAURANTE</h1>
    
    {{ Form::open(['route' => 'restaurants.store', 'method' => 'post']) }}
        <div class="mb">
            {{ Form::label('name', 'Nombre', [ 'class' => 'form-label' ]) }}
            {{ Form::text('name', null, [ 'class' => 'form-control', 'maxlength' => 50]) }}
        </div>
        <div class="mb">
            {{ Form::label('description', 'Descripción', [ 'class' => 'form-label' ]) }}
            {{ Form::textarea('description', null, [ 'class' => 'form-control', 'rows' => '4']) }}
        </div>
        <div class="mb">
            {{ Form::label('city', 'Ciudad', [ 'class' => 'form-label' ]) }}
            {{ Form::text('city', null, [ 'class' => 'form-control', 'maxlength' => 30]) }}
        </div>
        <div class="mb">
            {{ Form::label('Phone', 'Teléfono', [ 'class' => 'form-label' ]) }}
            {{ Form::text('Phone', null, [ 'class' => 'form-control', 'maxlength' => 10]) }}
        </div>
        <div class="mb">
            {{ Form::label('delivery', '¿ Tiene domicilio ?', [ 'class' => 'form-label' ]) }}
            {{ Form::select('delivery', ['y' => 'Si', 'n' => 'No'], null , [ 'class' => 'form-control']) }}
        </div>
        <div class="mb mb-3">
            {{ Form::label('category_id', '¿Categoría?', [ 'class' => 'form-label' ]) }}
            {{ Form::select('category_id', $categories, null , [ 'class' => 'form-control']) }}
        </div>

        {{ Form::submit('CREAR', [ 'class' => 'btn btn-primary' ]) }}
        <a href=" {{ route('home') }}" title="visitar este restaurante" class="btn btn-danger">CANCELAR</a>

    {!! Form::close() !!}

</div>

@endsection