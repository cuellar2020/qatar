@extends('layouts.app2')

@section('content')

<div class="container">
       <h4>Temporada 2020-22</h4>
</div>
<br>
<div class="container">
            <div class="row">
                <div class="col-12 border"> <h4>Frase de grupos - Jornada 1 de 18 </h4> </div>
            </div>
            <div class="row">
            @foreach ($jornadas1 as $partido)
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="{{$partido->pais1}}" alt="" class=" img-fluid imagen">   {{$partido->nombrep1}}</td>
                                </tr>
                                <tr>
                                    <td><img src="{{$partido->pais2}}" alt="" class=" img-fluid imagen">   {{$partido->nombrep2}}</td>
                                </tr>
                                <tr>
                                    <td><a href="/$partidosA/{{ $partido->id }}/edit" class="btn btn-secondary">Modificar</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$partido->fecha}}</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$partido->estado}}</h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5">{{$partido->resultado}}</h5>
                        </div>
                        <div class="col-1">
                        
                        </div>
                    </div>
                </div>  
            @endforeach
                
            </div> 
</div>
<br>
<div class="container">
            <div class="row">
                <div class="col-12 border"> <h4>Frase de grupos - Jornada 2 de 18</h4>  </div>
            </div>
            <div class="row">
            @foreach ($jornadas2 as $partido)
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="{{$partido->pais1}}" alt="" class=" img-fluid imagen">   {{$partido->nombrep1}}</td>
                                </tr>
                                <tr>
                                    <td><img src="{{$partido->pais2}}" alt="" class=" img-fluid imagen">   {{$partido->nombrep2}}</td>
                                </tr>
                                <tr>
                                    <td><a href="/$partidosA/{{ $partido->id }}/edit" class="btn btn-secondary">Modificar</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$partido->fecha}}</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$partido->estado}}</h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5">{{$partido->resultado}}</h5>
                        </div>
                    </div>
                </div>  
            @endforeach
            </div> 
</div>
<br>
<div class="container">
            <div class="row">
                <div class="col-12 border"> <h4>Frase de grupos - Jornada 3 de 18</h4>  </div>
            </div>
            <div class="row">
            @foreach ($jornadas3 as $partido)
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="{{$partido->pais1}}" alt="" class=" img-fluid imagen">   {{$partido->nombrep1}}</td>
                                </tr>
                                <tr>
                                    <td><img src="{{$partido->pais2}}" alt="" class=" img-fluid imagen">   {{$partido->nombrep2}}</td>
                                </tr>
                                <tr>
                                    <td><a href="/$partidosA/{{ $partido->id }}/edit" class="btn btn-secondary">Modificar</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$partido->fecha}}</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$partido->estado}}</h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5">{{$partido->resultado}}</h5>
                        </div>
                    </div>
                </div>  
            @endforeach
            </div> 
</div>
<br>
<div class="container">
            <div class="row">
                <div class="col-12 border"> <h4>Frase de grupos - Jornada 4 de 18</h4>  </div>
            </div>
            <div class="row">
            @foreach ($jornadas4 as $partido)
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="{{$partido->pais1}}" alt="" class=" img-fluid imagen">   {{$partido->nombrep1}}</td>
                                </tr>
                                <tr>
                                    <td><img src="{{$partido->pais2}}" alt="" class=" img-fluid imagen">   {{$partido->nombrep2}}</td>
                                </tr>
                                <tr>
                                    <td><a href="/$partidosA/{{ $partido->id }}/edit" class="btn btn-secondary">Modificar</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$partido->fecha}}</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$partido->estado}}</h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5">{{$partido->resultado}}</h5>
                        </div>
                    </div>
                </div>  
            @endforeach
            </div> 
</div>
<br>
<div class="container">
            <div class="row">
                <div class="col-12 border"> <h4>Frase de grupos - Jornada 7 de 18</h4>  </div>
            </div>
            <div class="row">
            @foreach ($jornadas7 as $partido)
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="{{$partido->pais1}}" alt="" class=" img-fluid imagen">   {{$partido->nombrep1}}</td>
                                </tr>
                                <tr>
                                    <td><img src="{{$partido->pais2}}" alt="" class=" img-fluid imagen">   {{$partido->nombrep2}}</td>
                                </tr>
                                <tr>
                                    <td><a href="/$partidosA/{{ $partido->id }}/edit" class="btn btn-secondary">Modificar</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$partido->fecha}}</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$partido->estado}}</h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5">{{$partido->resultado}}</h5>
                        </div>
                    </div>
                </div>  
            @endforeach
            </div> 
</div>
<br>
<div class="container">
            <div class="row">
                <div class="col-12 border"> <h4>Frase de grupos - Jornada 8 de 18</h4>  </div>
            </div>
            <div class="row">
            @foreach ($jornadas8 as $partido)
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="{{$partido->pais1}}" alt="" class=" img-fluid imagen">   {{$partido->nombrep1}}</td>
                                </tr>
                                <tr>
                                    <td><img src="{{$partido->pais2}}" alt="" class=" img-fluid imagen">   {{$partido->nombrep2}}</td>
                                </tr>
                                <tr>
                                    <td><a href="/partidosA/{{ $partido->id }}/edit" class="btn btn-secondary">Modificar</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$partido->fecha}}</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$partido->estado}}</h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5">{{$partido->resultado}}</h5>
                        </div>
                    </div>
                </div>  
            @endforeach
            </div> 
</div>
<br>
<div class="container">
            <div class="row">
                <div class="col-12 border"> <h4>Frase de grupos - Jornada 9 de 18</h4>  </div>
            </div>
            <div class="row">
            @foreach ($jornadas9 as $partido)
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="{{$partido->pais1}}" alt="" class=" img-fluid imagen">   {{$partido->nombrep1}}</td>
                                </tr>
                                <tr>
                                    <td><img src="{{$partido->pais2}}" alt="" class=" img-fluid imagen">   {{$partido->nombrep2}}</td>
                                </tr>
                                <tr>
                                    <td><a href="/partidosA/{{ $partido->id }}/edit" class="btn btn-secondary">Modificar</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$partido->fecha}}</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$partido->estado}}</h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5">{{$partido->resultado}}</h5>
                        </div>
                    </div>
                </div>  
            @endforeach
            </div> 
</div>
<br>
<div class="container">
            <div class="row">
                <div class="col-12 border"> <h4>Frase de grupos - Jornada 10 de 18</h4>  </div>
            </div>
            <div class="row">
            @foreach ($jornadas10 as $partido)
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="{{$partido->pais1}}" alt="" class=" img-fluid imagen">   {{$partido->nombrep1}}</td>
                                </tr>
                                <tr>
                                    <td><img src="{{$partido->pais2}}" alt="" class=" img-fluid imagen">   {{$partido->nombrep2}}</td>
                                </tr>
                                <tr>
                                    <td><a href="/partidosA/{{ $partido->id }}/edit" class="btn btn-secondary">Modificar</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$partido->fecha}}</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$partido->estado}}</h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5">{{$partido->resultado}}</h5>
                        </div>
                    </div>
                </div>  
            @endforeach
            </div> 
</div>
<br>
<div class="container">
            <div class="row">
                <div class="col-12 border"> <h4>Frase de grupos - Jornada 11 de 18</h4>  </div>
            </div>
            <div class="row">
            @foreach ($jornadas11 as $partido)
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="{{$partido->pais1}}" alt="" class=" img-fluid imagen">   {{$partido->nombrep1}}</td>
                                </tr>
                                <tr>
                                    <td><img src="{{$partido->pais2}}" alt="" class=" img-fluid imagen">   {{$partido->nombrep2}}</td>
                                </tr>
                                <tr>
                                    <td><a href="/partidosA/{{ $partido->id }}/edit" class="btn btn-secondary">Modificar</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$partido->fecha}}</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$partido->estado}}</h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5">{{$partido->resultado}}</h5>
                        </div>
                    </div>
                </div>  
            @endforeach
            </div> 
</div>
<br>
<div class="container">
            <div class="row">
                <div class="col-12 border"> <h4>Frase de grupos - Jornada 12 de 18</h4>  </div>
            </div>
            <div class="row">
            @foreach ($jornadas12 as $partido)
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="{{$partido->pais1}}" alt="" class=" img-fluid imagen">   {{$partido->nombrep1}}</td>
                                </tr>
                                <tr>
                                    <td><img src="{{$partido->pais2}}" alt="" class=" img-fluid imagen">   {{$partido->nombrep2}}</td>
                                </tr>
                                <tr>
                                    <td><a href="/partidosA/{{ $partido->id }}/edit" class="btn btn-secondary">Modificar</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$partido->fecha}}</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$partido->estado}}</h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5">{{$partido->resultado}}</h5>
                        </div>
                    </div>
                </div>  
            @endforeach
            </div> 
</div>
<br>
<div class="container">
            <div class="row">
                <div class="col-12 border"> <h4>Frase de grupos - Jornada 13 de 18</h4>  </div>
            </div>
            <div class="row">
            @foreach ($jornadas13 as $partido)
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="{{$partido->pais1}}" alt="" class=" img-fluid imagen">   {{$partido->nombrep1}}</td>
                                </tr>
                                <tr>
                                    <td><img src="{{$partido->pais2}}" alt="" class=" img-fluid imagen">   {{$partido->nombrep2}}</td>
                                </tr>
                                <tr>
                                    <td><a href="/partidosA/{{ $partido->id }}/edit" class="btn btn-secondary">Modificar</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$partido->fecha}}</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$partido->estado}}</h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5">{{$partido->resultado}}</h5>
                        </div>
                    </div>
                </div>  
            @endforeach
            </div> 
</div>
<br>
<div class="container">
            <div class="row">
                <div class="col-12 border"> <h4>Frase de grupos - Jornada 14 de 18</h4>  </div>
            </div>
            <div class="row">
            @foreach ($jornadas14 as $partido)
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="{{$partido->pais1}}" alt="" class=" img-fluid imagen">   {{$partido->nombrep1}}</td>
                                </tr>
                                <tr>
                                    <td><img src="{{$partido->pais2}}" alt="" class=" img-fluid imagen">   {{$partido->nombrep2}}</td>
                                </tr>
                                <tr>
                                    <td><a href="/partidosA/{{ $partido->id }}/edit" class="btn btn-secondary">Modificar</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$partido->fecha}}</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$partido->estado}}</h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5">{{$partido->resultado}}</h5>
                        </div>
                    </div>
                </div>  
            @endforeach
            </div> 
</div>
<br>
<div class="container">
            <div class="row">
                <div class="col-12 border"> <h4>Frase de grupos - Jornada 15 de 18</h4>  </div>
            </div>
            <div class="row">
            @foreach ($jornadas15 as $partido)
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="{{$partido->pais1}}" alt="" class=" img-fluid imagen">   {{$partido->nombrep1}}</td>
                                </tr>
                                <tr>
                                    <td><img src="{{$partido->pais2}}" alt="" class=" img-fluid imagen">   {{$partido->nombrep2}}</td>
                                </tr>
                                <tr>
                                    <td><a href="/partidosA/{{ $partido->id }}/edit" class="btn btn-secondary">Modificar</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$partido->fecha}}</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$partido->estado}}</h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5">{{$partido->resultado}}</h5>
                        </div>
                    </div>
                </div>  
            @endforeach
            </div> 
</div>
<br>
<div class="container">
            <div class="row">
                <div class="col-12 border"> <h4>Frase de grupos - Jornada 16 de 18</h4>  </div>
            </div>
            <div class="row">
            @foreach ($jornadas16 as $partido)
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="{{$partido->pais1}}" alt="" class=" img-fluid imagen">   {{$partido->nombrep1}}</td>
                                </tr>
                                <tr>
                                    <td><img src="{{$partido->pais2}}" alt="" class=" img-fluid imagen">   {{$partido->nombrep2}}</td>
                                </tr>
                                <tr>
                                    <td><a href="/partidosA/{{ $partido->id }}/edit" class="btn btn-secondary">Modificar</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$partido->fecha}}</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$partido->estado}}</h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5">{{$partido->resultado}}</h5>
                        </div>
                    </div>
                </div>  
            @endforeach
            </div> 
</div>
<br>
<div class="container">
            <div class="row">
                <div class="col-12 border"> <h4>Frase de grupos - Jornada 17 de 18</h4>  </div>
            </div>
            <div class="row">
            @foreach ($jornadas17 as $partido)
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="{{$partido->pais1}}" alt="" class=" img-fluid imagen">   {{$partido->nombrep1}}</td>
                                </tr>
                                <tr>
                                    <td><img src="{{$partido->pais2}}" alt="" class=" img-fluid imagen">   {{$partido->nombrep2}}</td>
                                </tr>
                                <tr>
                                    <td><a href="/partidosA/{{ $partido->id }}/edit" class="btn btn-secondary">Modificar</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$partido->fecha}}</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$partido->estado}}</h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5">{{$partido->resultado}}</h5>
                        </div>
                    </div>
                </div>  
            @endforeach
            </div> 
</div>
<br>
<div class="container">
            <div class="row">
                <div class="col-12 border"> <h4>Frase de grupos - Jornada 18 de 18</h4>  </div>
            </div>
            <div class="row">
            @foreach ($jornadas18 as $partido)
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="{{$partido->pais1}}" alt="" class=" img-fluid imagen">   {{$partido->nombrep1}}</td>
                                </tr>
                                <tr>
                                    <td><img src="{{$partido->pais2}}" alt="" class=" img-fluid imagen">   {{$partido->nombrep2}}</td>
                                </tr>
                                <tr>
                                    <td><a href="/partidosA/{{ $partido->id }}/edit" class="btn btn-secondary">Modificar</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$partido->fecha}}</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$partido->estado}}</h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5">{{$partido->resultado}}</h5>
                        </div>
                    </div>
                </div>  
            @endforeach
            </div> 
</div>

@endsection