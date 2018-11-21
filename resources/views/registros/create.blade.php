@extends('layouts.app')
@section('content')
    <h1> Enviar Solicitud</h1>
    {!! Form::open(['action' => 'RegistrosController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('nombre','Nombres')}}
            {{Form::text('nombre','',['class' => 'form-control','placeholder' =>'Nombres'])}}
        </div>
         <div class="form-group">
            {{Form::label('apellido','Apellidos')}}
            {{Form::text('apellido','',['class' => 'form-control','placeholder' =>'Apellidos'])}}
        </div>
         <div class="form-group">
            {{Form::label('fecha_nac','Fecha de Nacimiento')}}
            {{Form::date('fecha_nac','',['class' => 'form-control','placeholder' =>'dd/mm/aa'])}}
        </div>
           <div class="form-group">
            {{Form::label('email','Email')}}
            {{Form::email('email','',['class' => 'form-control','placeholder' =>'ejemplo@ejemplo.com'])}}
        </div>
           <div class="form-group">
            {{Form::label('telefono','Teléfono')}}
            {{Form::text('telefono','',['class' => 'form-control','placeholder' =>'ingrese su # tel'])}}
        </div>
           <div class="form-group">
            {{Form::label('domicilio','Domicilio')}}
            {{Form::text('domicilio','',['class' => 'form-control','placeholder' =>'ingrese su domicilio'])}}
        </div>
          <div class="form-group">
            {{Form::label('solicitud','Razón')}}
            {{Form::textarea('solicitud','',['class' => 'form-control','placeholder' =>'Escriba aquí...'])}}
        </div>
        <!--<div class="form-group">
            {{Form::label('ahijado','Ahijados')}}
            {{Form::number('ahijado','',['class' => 'form-control','placeholder' =>'Escoja a sus ahijados...'])}}
        </div>-->
        {{Form::submit('Enviar',['class' => 'btn btn-outline-primary'])}}
         <a href="/adopt/public/registros" class="btn btn-outline-danger">Cancelar</a>
    {!! Form::close() !!}
@endsection