@extends('layouts.app')

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
            @foreach ($jornadas1 as $jornada1)
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="{{$jornada1->pais1}}" alt="" class=" img-fluid imagen">   {{$jornada1->nombrep1}}</td>
                                </tr>
                                <tr>
                                    <td><img src="{{$jornada1->pais2}}" alt="" class=" img-fluid imagen">   {{$jornada1->nombrep2}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$jornada1->fecha}}</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$jornada1->estado}}</h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5">{{$jornada1->resultado}}</h5>
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
            @foreach ($jornadas2 as $jornada2)
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="{{$jornada2->pais1}}" alt="" class=" img-fluid imagen">   {{$jornada2->nombrep1}}</td>
                                </tr>
                                <tr>
                                    <td><img src="{{$jornada2->pais2}}" alt="" class=" img-fluid imagen">   {{$jornada2->nombrep2}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$jornada2->fecha}}</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$jornada2->estado}}</h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5">{{$jornada2->resultado}}</h5>
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
            @foreach ($jornadas3 as $jornada3)
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="{{$jornada3->pais1}}" alt="" class=" img-fluid imagen">   {{$jornada3->nombrep1}}</td>
                                </tr>
                                <tr>
                                    <td><img src="{{$jornada3->pais2}}" alt="" class=" img-fluid imagen">   {{$jornada3->nombrep2}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$jornada3->fecha}}</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$jornada3->estado}}</h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5">{{$jornada3->resultado}}</h5>
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
            @foreach ($jornadas4 as $jornada4)
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="{{$jornada4->pais1}}" alt="" class=" img-fluid imagen">   {{$jornada4->nombrep1}}</td>
                                </tr>
                                <tr>
                                    <td><img src="{{$jornada4->pais2}}" alt="" class=" img-fluid imagen">   {{$jornada4->nombrep2}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$jornada4->fecha}}</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$jornada4->estado}}</h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5">{{$jornada4->resultado}}</h5>
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
            @foreach ($jornadas7 as $jornada7)
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="{{$jornada7->pais1}}" alt="" class=" img-fluid imagen">   {{$jornada7->nombrep1}}</td>
                                </tr>
                                <tr>
                                    <td><img src="{{$jornada7->pais2}}" alt="" class=" img-fluid imagen">   {{$jornada7->nombrep2}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$jornada7->fecha}}</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$jornada7->estado}}</h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5">{{$jornada7->resultado}}</h5>
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
            @foreach ($jornadas8 as $jornada8)
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="{{$jornada8->pais1}}" alt="" class=" img-fluid imagen">   {{$jornada8->nombrep1}}</td>
                                </tr>
                                <tr>
                                    <td><img src="{{$jornada8->pais2}}" alt="" class=" img-fluid imagen">   {{$jornada8->nombrep2}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$jornada8->fecha}}</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$jornada8->estado}}</h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5">{{$jornada8->resultado}}</h5>
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
            @foreach ($jornadas9 as $jornada9)
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="{{$jornada9->pais1}}" alt="" class=" img-fluid imagen">   {{$jornada9->nombrep1}}</td>
                                </tr>
                                <tr>
                                    <td><img src="{{$jornada9->pais2}}" alt="" class=" img-fluid imagen">   {{$jornada9->nombrep2}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$jornada9->fecha}}</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$jornada9->estado}}</h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5">{{$jornada9->resultado}}</h5>
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
            @foreach ($jornadas10 as $jornada10)
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="{{$jornada10->pais1}}" alt="" class=" img-fluid imagen">   {{$jornada10->nombrep1}}</td>
                                </tr>
                                <tr>
                                    <td><img src="{{$jornada10->pais2}}" alt="" class=" img-fluid imagen">   {{$jornada10->nombrep2}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$jornada10->fecha}}</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$jornada10->estado}}</h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5">{{$jornada10->resultado}}</h5>
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
            @foreach ($jornadas11 as $jornada11)
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="{{$jornada11->pais1}}" alt="" class=" img-fluid imagen">   {{$jornada11->nombrep1}}</td>
                                </tr>
                                <tr>
                                    <td><img src="{{$jornada11->pais2}}" alt="" class=" img-fluid imagen">   {{$jornada11->nombrep2}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$jornada11->fecha}}</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$jornada11->estado}}</h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5">{{$jornada11->resultado}}</h5>
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
            @foreach ($jornadas12 as $jornada12)
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="{{$jornada12->pais1}}" alt="" class=" img-fluid imagen">   {{$jornada12->nombrep1}}</td>
                                </tr>
                                <tr>
                                    <td><img src="{{$jornada12->pais2}}" alt="" class=" img-fluid imagen">   {{$jornada12->nombrep2}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$jornada12->fecha}}</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$jornada12->estado}}</h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5">{{$jornada12->resultado}}</h5>
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
            @foreach ($jornadas13 as $jornada13)
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="{{$jornada13->pais1}}" alt="" class=" img-fluid imagen">   {{$jornada13->nombrep1}}</td>
                                </tr>
                                <tr>
                                    <td><img src="{{$jornada13->pais2}}" alt="" class=" img-fluid imagen">   {{$jornada13->nombrep2}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$jornada13->fecha}}</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$jornada13->estado}}</h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5">{{$jornada13->resultado}}</h5>
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
            @foreach ($jornadas14 as $jornada14)
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="{{$jornada14->pais1}}" alt="" class=" img-fluid imagen">   {{$jornada14->nombrep1}}</td>
                                </tr>
                                <tr>
                                    <td><img src="{{$jornada14->pais2}}" alt="" class=" img-fluid imagen">   {{$jornada14->nombrep2}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$jornada14->fecha}}</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$jornada14->estado}}</h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5">{{$jornada14->resultado}}</h5>
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
            @foreach ($jornadas15 as $jornada15)
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="{{$jornada15->pais1}}" alt="" class=" img-fluid imagen">   {{$jornada15->nombrep1}}</td>
                                </tr>
                                <tr>
                                    <td><img src="{{$jornada15->pais2}}" alt="" class=" img-fluid imagen">   {{$jornada15->nombrep2}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$jornada15->fecha}}</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$jornada15->estado}}</h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5">{{$jornada15->resultado}}</h5>
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
            @foreach ($jornadas16 as $jornada16)
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="{{$jornada16->pais1}}" alt="" class=" img-fluid imagen">   {{$jornada16->nombrep1}}</td>
                                </tr>
                                <tr>
                                    <td><img src="{{$jornada16->pais2}}" alt="" class=" img-fluid imagen">   {{$jornada16->nombrep2}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$jornada16->fecha}}</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$jornada16->estado}}</h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5">{{$jornada16->resultado}}</h5>
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
            @foreach ($jornadas17 as $jornada17)
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="{{$jornada17->pais1}}" alt="" class=" img-fluid imagen">   {{$jornada17->nombrep1}}</td>
                                </tr>
                                <tr>
                                    <td><img src="{{$jornada17->pais2}}" alt="" class=" img-fluid imagen">   {{$jornada17->nombrep2}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$jornada17->fecha}}</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$jornada17->estado}}</h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5">{{$jornada17->resultado}}</h5>
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
            @foreach ($jornadas18 as $jornada18)
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="{{$jornada18->pais1}}" alt="" class=" img-fluid imagen">   {{$jornada18->nombrep1}}</td>
                                </tr>
                                <tr>
                                    <td><img src="{{$jornada18->pais2}}" alt="" class=" img-fluid imagen">   {{$jornada18->nombrep2}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$jornada18->fecha}}</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5">{{$jornada18->estado}}</h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5">{{$jornada18->resultado}}</h5>
                        </div>
                    </div>
                </div>  
            @endforeach
            </div> 
</div>

@endsection