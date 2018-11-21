@extends('layouts.app')
@section('content')
    <h1> Crear Perfil Ahijado</h1>
    {!! Form::open(['action' => 'AhijadoController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('nombre_ni','Nombres')}}
            {{Form::text('nombre_ni','',['class' => 'form-control','placeholder' =>'Nombres'])}}
        </div>
         <div class="form-group">
            {{Form::label('apellido_ni','Apellidos')}}
            {{Form::text('apellido_ni','',['class' => 'form-control','placeholder' =>'Apellidos'])}}
        </div>
         <div class="form-group">
            {{Form::label('fecha__nac_ni','Fecha de Nacimiento')}}
            {{Form::date('fecha__nac_ni','',['class' => 'form-control','placeholder' =>'dd/mm/aa'])}}
        </div>
           <div class="form-group">
            {{Form::label('edad_ni','Edad')}}
            {{Form::number('edad_ni','',['class' => 'form-control','placeholder' =>'Edad'])}}
        </div>
           <div class="form-group">
            {{Form::label('domicilio_ni','Domicilio')}}
            {{Form::text('domicilio_ni','',['class' => 'form-control','placeholder' =>'ingrese el domicilio'])}}
        </div>
        <!--<div class="form-group">
            {{Form::label('ahijado','Ahijados')}}
            {{Form::number('ahijado','',['class' => 'form-control','placeholder' =>'Escoja a sus ahijados...'])}}
        </div>-->
        {{Form::submit('Enviar',['class' => 'btn btn-outline-primary'])}}
         <a href="/Adopt/public/ahijados" class="btn btn-outline-danger">Cancelar</a>
    {!! Form::close() !!}
@endsection