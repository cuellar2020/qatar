@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    @foreach ($jugadores as $jugador)
    <div class="col-3">
      <div class="card border-secondary mb-3" style="max-width: 18rem;">
        <div class="card-header">{{$jugador->nombre}}</div>
        <div class="card-body text-secondary">
          <h5 class="card-title">Posición: {{$jugador->posicion}}</h5>
          <p class="card-text"> <a href="/posiciones"><img src="{{$jugador->pais}}" alt="" class=" img-fluid imagen"> </a> {{$jugador->nombrep}}</p>
        </div>
      </div>
    </div>
    @endforeach
    
  </div>


</div>


@endsection