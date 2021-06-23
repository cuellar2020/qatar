@extends('layouts.app')

@section('content')
<div class="container">
       <h4>Temporada 2020-22</h4>
       <p class="">1-4 Clasifican directo al mundial, el 5 se juega el repechaje</p>
</div>
<div class="container">
    <table class="table table-bordered">
        <thead style="background-color: rgb(189, 195, 199);">
            <tr>
                <th scope="col">País</th>
                <th scope="col">PJ</th>
                <th scope="col">G</th>
                <th scope="col">E</th>
                <th scope="col">P</th>
                <th scope="col">GF</th>
                <th scope="col">GC</th>
                <th scope="col">DG</th>
                <th scope="col">Puntos</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($paises as $pais)
            <tr>
                <td><img src="{{$pais->imagen}}" alt="" class=" img-fluid imagen">   {{$pais->nombre}}</td>
                <td>{{$pais->partidosJ}}</td>
                <td>{{$pais->ganados}}</td>
                <td>{{$pais->empatados}}</td>
                <td>{{$pais->perdidos}}</td>
                <td>{{$pais->golesF}}</td>
                <td>{{$pais->golesC}}</td>
                <td>{{$pais->golesD}}</td>
                <td>{{$pais->puntos}}</td>
            </tr>
        @endforeach
        </tbody>
              
    </table>
</div>
@endsection