@extends('layouts.app')
@section('content')
     <a href="/Adopt/public/ahijados" class="btn btn-secondary">← Regresar</a>
     <br>
     <br>
        <h1> Ahijado :  <b>{{$ahijado->id}}</b> </h1>
        <hr>
    <h5>perfil creado: {{$ahijado->created_at}}</h5>
    <hr>
    <div>
        <h4><b>nombres:</b> {{$ahijado->nombre_ni}}</h4>
        <h4><b>apellidos:</b> {{$ahijado->apellido_ni}}</h4>
        <h4><b>fecha de nacimiento:</b> {{$ahijado->fecha__nac_ni}}</h4>
        <h4><b>edad:</b> {{$ahijado->edad_ni}}</h4>
        <h4><b>domicilio: </b>{{$ahijado->domicilio_ni}}</h4>
      
        @if(!Auth::guest())
            @if(Auth::user()->id == '1')
            <a href="/Adopt/public/ahijados/{{$ahijado->id}}/edit" class="btn btn-outline-primary">Editar</a>
            <br>
            <br> 
            {!!Form::open(['action' => ['AhijadoController@destroy', $ahijado->id], 'method' => 'POST', 'class' => 'pull - right'])!!}
                {{Form::hidden('_method', 'DELETE')}} 
                {{Form::submit('Eliminar', ['class' => 'btn btn-outline-danger'])}}
            {!!Form::close()!!}
            @endif
        @endif
        <hr>
    </div>
@endsection
