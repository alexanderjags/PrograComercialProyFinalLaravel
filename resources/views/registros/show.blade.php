@extends('layouts.app')
@section('content')
     <a href="/Adopt/public/registros" class="btn btn-secondary">← Regresar</a>
     <br>
     <br>
        <h1> Solicitud de:  <b>{{$registro->email}}</b> </h1>
        <hr>
    <h5>enviado: {{$registro->created_at}}</h5>
    <hr>
    <div>
        <h4><b>nombres:</b> {{$registro->nombre}}</h4>
        <h4><b>apellidos:</b> {{$registro->apellido}}</h4>
        <h4><b>fecha de nacimiento:</b> {{$registro->fecha_nac}}</h4>
        <h4><b>téfono:</b> {{$registro->telefono}}</h4>
        <h4><b>domicilio: </b>{{$registro->domicilio}}</h4>
        <h3><b>Razones para adoptar:</b></h3>
            <h3>{{$registro->solicitud}}</h3>
        
       
        @if(!Auth::guest())
            @if(Auth::user()->id == '1')
            <a href="/Adopt/public/registros/{{$registro->id}}/edit" class="btn btn-outline-primary">Editar</a>
            <br>
            <br> 
            {!!Form::open(['action' => ['RegistrosController@destroy', $registro->id], 'method' => 'POST', 'class' => 'pull - right'])!!}
                {{Form::hidden('_method', 'DELETE')}} 
                {{Form::submit('Eliminar', ['class' => 'btn btn-outline-danger'])}}
            {!!Form::close()!!}
            @endif
        @endif
        <hr>
    </div>
@endsection
