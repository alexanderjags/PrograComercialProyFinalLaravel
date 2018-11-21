@extends('layouts.app')
@section('content')
    <h1> Editar Perfil Ahijado</h1>
    {!! Form::open(['action' => ['AhijadoController@update', $ahijado->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('nombre_ni','Nombres')}}
            {{Form::text('nombre_ni', $ahijado->nombre_ni,['class' => 'form-control','placeholder' =>'Nombres'])}}
        </div>
         <div class="form-group">
            {{Form::label('apellido_ni','Apellidos')}}
            {{Form::text('apellido_ni', $ahijado->apellido_ni,['class' => 'form-control','placeholder' =>'Apellidos'])}}
        </div>
         <div class="form-group">
            {{Form::label('fecha__nac_ni','Fecha de Nacimiento')}}
            {{Form::date('fecha__nac_ni', $ahijado->fecha__nac_ni,['class' => 'form-control','placeholder' =>'dd/mm/aa'])}}
        </div>
           <div class="form-group">
            {{Form::label('edad_ni','Edad')}}
            {{Form::number('edad_ni', $ahijado->edad_ni,['class' => 'form-control','placeholder' =>'Edad'])}}
        </div>
           <div class="form-group">
            {{Form::label('domicilio_ni','Domicilio')}}
            {{Form::text('domicilio_ni', $ahijado->domicilio_ni,['class' => 'form-control','placeholder' =>'ingrese el domicilio'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Actualizar', ['class' => 'btn btn-outline-primary'])}}
        <a href="/Adopt/public/ahijados" class="btn btn-outline-danger">Cancelar</a>
    {!! Form::close() !!}
@endsection