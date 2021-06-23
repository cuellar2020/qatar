@extends('layouts.app2')

@section('content')

<br>

<div class="container ">

    <div class="row">
        <div class="col text-center">
            <h1>Administrador</h1>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-2">
        
        </div>
        <div class="col-3">
            <img src="assets/img/conmebol.png" class=" img-fluid rounded float-start" alt="conmebol catar 2022">
        </div>
        <div class="col-5 text-center">
            <p class=" ">
            Las Selecciones que participan del certamen clasificatorio son las diez de siempre: Argentina, Bolivia, Brasil, Chile, Colombia, Ecuador, Paraguay, Perú, Uruguay y Venezuela.
            </p>
            <a href="/posicionesA" class="btn btn-outline-primary boton">Posiciones</a>
        </div>
        <div class="col-2">
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-2">
        
        </div>
        <div class="col-3">
            <img src="assets/img/partidos.png" class=" img-fluid rounded float-start" alt="conmebol catar 2022">
        </div>
        <div class="col-5 text-center">
            <p class=" ">
            Son 18 jornadas durante todo el camino hacia catar 2022
            </p>
            <a href="/partidosA" class="btn btn-outline-primary boton">Partidos</a>
        </div>
        <div class="col-2">
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-2">
        
        </div>
        <div class="col-3">
            <img src="assets/img/messi.jpg" class=" img-fluid rounded float-start" alt="conmebol catar 2022">
        </div>
        <div class="col-5 text-center">
            <p class=" ">
            Jugadores convocados para estas eliminatorias
            </p>
            <a href="/jugadoresA" class="btn btn-outline-primary boton">Jugadores</a>
        </div>
        <div class="col-2">
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-2">
        
        </div>
        <div class="col-3">
            <img src="assets/img/estadio1.jpg" class=" img-fluid rounded float-start" alt="conmebol catar 2022">
        </div>
        <div class="col-5 text-center">
            <p class=" ">
            Lugar donde se juegan los partidos de eliminatorias
            </p>
            <a href="/sedesA" class="btn btn-outline-primary boton">Sedes</a>
        </div>
        <div class="col-2">
        </div>
    </div>




</div>


@endsection