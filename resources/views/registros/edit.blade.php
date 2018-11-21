@extends('layouts.app')
@section('content')
    <h1> Editar Solicitud</h1>
    {!! Form::open(['action' => ['RegistrosController@update', $registro->id] , 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('nombre','Nombres')}}
            {{Form::text('nombre', $registro->nombre,['class' => 'form-control','placeholder' =>'Nombres'])}}
        </div>
         <div class="form-group">
            {{Form::label('apellido','Apellidos')}}
            {{Form::text('apellido', $registro->apellido,['class' => 'form-control','placeholder' =>'Apellidos'])}}
        </div>
         <div class="form-group">
            {{Form::label('fecha_nac','Fecha de Nacimiento')}}
            {{Form::date('fecha_nac', $registro->fecha_nac,['class' => 'form-control','placeholder' =>'dd/mm/aa'])}}
        </div>
           <div class="form-group">
            {{Form::label('email','Email')}}
            {{Form::email('email', $registro->email,['class' => 'form-control','placeholder' =>'ejemplo@ejemplo.com'])}}
        </div>
           <div class="form-group">
            {{Form::label('telefono','Teléfono')}}
            {{Form::text('telefono', $registro->telefono,['class' => 'form-control','placeholder' =>'ingrese su # tel'])}}
        </div>
           <div class="form-group">
            {{Form::label('domicilio','Domicilio')}}
            {{Form::text('domicilio', $registro->domicilio,['class' => 'form-control','placeholder' =>'ingrese su domicilio'])}}
        </div>
          <div class="form-group">
            {{Form::label('solicitud','Razón')}}
            {{Form::textarea('solicitud', $registro->solicitud,['class' => 'form-control','placeholder' =>'Escriba aquí...'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Actualizar', ['class' => 'btn btn-outline-primary'])}}
        <a href="/Adopt/public/registros" class="btn btn-outline-danger">Cancelar</a>
    {!! Form::close() !!}
@endsection