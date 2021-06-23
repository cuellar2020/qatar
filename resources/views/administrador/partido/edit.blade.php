@extends('layouts.app2')

@section('content')

<div class="container mt-4">
	<h2>Editar partido</h2>
	<form action="/partidosA/{{$partido->id}}" method="POST">
	@csrf
	@method('PUT')
		<div class="mb-3">
			<label for="" class="form-label">Fecha</label>
			<input type="date" id="fecha" name="fecha" tabindex="1" class="form-control" value="{{$partido->fecha}}">
		</div>
		<div class="mb-3">
			<label for="" class="form-label">Jornada</label>
			<input type="text" id="jornada" name="jornada" tabindex="2" class="form-control" value="{{$partido->jornada}}">
		</div>
        <div class="mb-3">
			<label for="" class="form-label">País 1</label>
			<input type="number" id="pais" name="pais"  step="any" tabindex="3" class="form-control" value="{{$partido->pais}}">
		</div>
        <div class="mb-3">
			<label for="" class="form-label">País 2</label>
			<input type="number" id="pais2" name="pais2"  step="any" tabindex="4" class="form-control" value="{{$partido->pais2}}">
		</div>
        <div class="mb-3">
			<label for="" class="form-label">Estado</label>
			<input type="text" id="estado" name="estado" tabindex="5" class="form-control" value="{{$partido->estado}}">
		</div>
        <div class="mb-3">
			<label for="" class="form-label">Resultado</label>
			<input type="text" id="resultado" name="resultado" tabindex="6" class="form-control" value="{{$partido->resultado}}">
		</div>
		<a href="/partidosA" class="btn btn-secondary" tabindex="7">Cancelar</a>
		<button type="submit" class="btn btn-primary" tabindex='8'>Guardar</button>
	</form>
</div>
<div class="mt-2">
</div>


@endsection