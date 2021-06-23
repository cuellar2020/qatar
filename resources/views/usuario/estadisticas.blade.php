@extends('layouts.app')

@section('content')

<div class="container">
       <h4>Temporada 2020-22</h4>
</div>
<br>
<div class="container">
    <table class="table table-bordered">
        <thead style="background-color: rgb(189, 195, 199);">
            <tr><h5>Goles</h5></tr>
            <tr>
                <th scope="col">Jugador</th>
                <th scope="col">Goles</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($jugadores as $jugador)
            <tr>
                <td><img src="{{$jugador->pais}}" alt="" class=" img-fluid imagen"> {{$jugador->nombre}}</td>
                <td>{{$jugador->goles}}</td>
            </tr>
        @endforeach
        </tbody>
              
    </table>   
</div>
<br>
<div class="container">
    <table class="table table-bordered">
        <thead style="background-color: rgb(189, 195, 199);">
            <tr><h5>Asistencias</h5></tr>
            <tr>
                <th scope="col">Jugador</th>
                <th scope="col">Asistencias</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($jugadoresa as $jugadora)
            <tr>
                <td><img src="{{$jugadora->pais}}" alt="" class=" img-fluid imagen"> {{$jugadora->nombre}}</td>
                <td>{{$jugadora->asistencias}}</td>
            </tr>
        @endforeach
        </tbody>
              
    </table>   
</div>
<br>
<div class="container">
    <table class="table table-bordered">
        <thead style="background-color: rgb(189, 195, 199);">
            <tr><h5>Tarjetas Amarillas</h5></tr>
            <tr>
                <th scope="col">Jugador</th>
                <th scope="col">Tarjetas Amarillas</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($tarjetasA as $tarjetaA)
            <tr>
                <td><img src="{{$tarjetaA->pais}}" alt="" class=" img-fluid imagen"> {{$tarjetaA->nombre}}</td>
                <td>{{$tarjetaA->tarjetasA}}</td>
            </tr>
        @endforeach
        </tbody>
              
    </table>   
</div>
<br>
<div class="container">
    <table class="table table-bordered">
        <thead style="background-color: rgb(189, 195, 199);">
            <tr><h5>Tarjetas Rojas</h5></tr>
            <tr>
                <th scope="col">Jugador</th>
                <th scope="col">Tarjetas Rojas</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($tarjetasR as $tarjetaR)
            <tr>
                <td><img src="{{$tarjetaR->pais}}" alt="" class=" img-fluid imagen"> {{$tarjetaR->nombre}}</td>
                <td>{{$tarjetaR->tarjetasR}}</td>
            </tr>
        @endforeach
        </tbody>
              
    </table>   
</div>
@endsection