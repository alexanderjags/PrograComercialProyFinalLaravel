@extends('layouts.app')
@section('content')
    <div class="jumbotron text-center">
    <font color="white"><b><h1> Solicitudes de</h1><b></font>
    </div>
    @if(count($registros) > 0)
        @foreach($registros as $registro)
            <div class="media text-muted pt-5">
                <h3 class="media-body pb-3 mb-0 border-bottom border-gray">
                    <strong class="d-block text-gray-dark"> @if(!Auth::guest())<a href="/Adopt/public/registros/{{$registro->id}}">@endif{{$registro->nombre}}</a></strong>
                    <p>Enviado por {{$registro->email}} </p>
                    <p>Razones: {{$registro->solicitud}} </p>
                </h3>
            </div>
        @endforeach  
        {{ $registros -> links() }}
    @else
    <p>No hay solicitudes por el momento... </p>
    @endif
@endsection