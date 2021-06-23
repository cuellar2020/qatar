@extends('layouts.app2')

@section('content')

<div class="container mt-4">
	<h2>Editar Sede</h2>
	<form action="/sedesA/{{$sede->id}}" method="POST">
	@csrf
	@method('PUT')
		<div class="mb-3">
			<label for="" class="form-label">Imagen</label>
			<input type="text" id="imagen" name="imagen" tabindex="1" class="form-control" value="{{$sede->imagen}}">
		</div>
		<div class="mb-3">
			<label for="" class="form-label">Nombre</label>
			<input type="text" id="nombre" name="nombre" tabindex="2" class="form-control" value="{{$sede->nombre}}">
		</div>
        <div class="mb-3">
			<label for="" class="form-label">País</label>
			<input type="number" id="pais" name="pais"  step="any" tabindex="3" class="form-control" value="{{$sede->pais}}">
		</div>
		<a href="/sedesA" class="btn btn-secondary" tabindex="4">Cancelar</a>
		<button type="submit" class="btn btn-primary" tabindex='5'>Guardar</button>
	</form>
</div>
<div class="mt-2">
</div>


@endsection
