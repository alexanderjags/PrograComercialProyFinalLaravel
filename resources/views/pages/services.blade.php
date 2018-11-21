@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <font color="white"><b><h1> Servicios</h1><b></font>

    </div>
     <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
        <h1>Adopciones</h1>
         <img class="d-block w-100" src="http://conteudo.pucrs.br/wp-content/uploads/2017/09/2017_09_18-aplicativo_adocao_criancasgeralt_pixabay907x520.png" alt="First slide">
        </div>
        <div class="carousel-item">
        <h1>Donaciones</h1>
        <img class="d-block w-100" src="https://static1.squarespace.com/static/593eef52e6f2e1fc18ca6dd9/5a697fc5085229668122b54c/5af0936e88251b9fb6033f15/1528269447578/Nattu+-+Creative+Independence.jpg?format=1500w" alt="Second slide">
        </div>
        <div class="carousel-item">
        <h1>Padrinación</h1>       
        <img class="d-block w-100" src="http://www.yocreo.com/noticiasimg/201211191831544e35ff.jpg" alt="Third slide">
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
        </a>
        </div>
@endsection