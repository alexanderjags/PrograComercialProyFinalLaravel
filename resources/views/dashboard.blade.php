@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido</div>

                <div class="card-body">
                    <a href="/Adopt/public/registros/create" class="btn btn-secondary">Crear Solicitud</a>
                    <br>
                    <br>
                       @if(count($registros) > 0)
                        <h1>Tus solicitides</h1>
                            <table>
                                    <tr>
                                        <th>
                                            <h3>Enviados</h3>
                                            <hr>
                                        </th>
                                        <th></th>
                                    </tr>

                                    @foreach($registros as $registro)
                                    <tr>
                                        <td>
                                            {{$registro->solicitud}} 
                                            <hr>
                                        </td>
                                        <td>
                                            <a href="/adopt/public/registros/{{$registro->id}}/edit" class="btn btn-outline-primary">Editar</a>
                                        </td>
                                        <td>
                                              {!!Form::open(['action' => ['RegistrosController@destroy', $registro->id], 'method' => 'POST', 'class' => 'pull - right'])!!}
                                                {{Form::hidden('_method', 'DELETE')}}
                                                {{Form::submit('Eliminar', ['class' => 'btn btn-outline-danger'])}}
                                             {!!Form::close()!!}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <h2>Tú no tienes solicitudes enviadas  :'(</h2>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

