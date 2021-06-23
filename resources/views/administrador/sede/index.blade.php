@extends('layouts.app2')

@section('content')

<div class="container">
  <div class="row">
    @foreach ($sedes as $sede)
    <div class="col-4 mt-3">
        <div class="card" style="width: 18rem;">
            <img src="{{$sede->imagen}}" class="card-img-top" alt="...">
            <div class="card-body">
            <p>{{$sede->nombre}}</p>
                <p class="card-text"><a href="/posiciones"><img src="{{$sede->pais}}" alt="" class=" img-fluid imagen"> </a> {{$sede->nombrep}}</p>
            </div>
            <a href="/sedesA/{{ $sede->id }}/edit" class="btn btn-secondary">Modificar</a>
        </div>
    </div>
    @endforeach
    
  </div>


</div>


@endsection