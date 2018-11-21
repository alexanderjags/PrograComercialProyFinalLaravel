@extends('layouts.app')
@section('content')
    <div class="jumbotron text-center">
    <font color="white"><b><h1> Ellos necesitan de nuestra ayuda</h1><b></font>
    </div>
         @if(!Auth::guest())
            @if(Auth::user()->id == '1')
                <a href="/Adopt/public/ahijados/create" class="btn btn-secondary">Agregar Nuevo</a>
            @endif
        @endif
   
    @if(count($ahijados) > 0)
        @foreach($ahijados as $ahijado)
            <div class="media text-muted pt-5">
                <h3 class="media-body pb-3 mb-0 border-bottom border-gray">
                    <strong class="d-block text-gray-dark"> @if(!Auth::guest())<a href="/Adopt/public/ahijados/{{$ahijado->id}}">@endif{{$ahijado->nombre_ni}}</a></strong>
                    <p>Apellidos {{$ahijado->apellido_ni}} </p>
                    <p>Edad: {{$ahijado->edad_ni}} </p>
                </h3>
            </div>
        @endforeach  
        {{ $ahijados -> links() }}
    @else
    <p>No hay ahijados por el momento... </p>
    @endif
@endsection