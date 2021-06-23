

<?php $__env->startSection('content'); ?>

<div class="container mt-4">
	<h2>Editar País</h2>
	<form action="/posicionesA/<?php echo e($pais->id); ?>" method="POST">
	<?php echo csrf_field(); ?>
	<?php echo method_field('PUT'); ?>
		<div class="mb-3">
			<label for="" class="form-label">Imagen</label>
			<input type="text" id="imagen" name="imagen" tabindex="1" class="form-control" value="<?php echo e($pais->imagen); ?>">
		</div>
		<div class="mb-3">
			<label for="" class="form-label">Nombre</label>
			<input type="text" id="nombre" name="nombre" tabindex="2" class="form-control" value="<?php echo e($pais->nombre); ?>">
		</div>
        <div class="mb-3">
			<label for="" class="form-label">Partidos Jugados</label>
			<input type="number" id="partidosJ" name="partidosJ"  step="any" tabindex="3" class="form-control" value="<?php echo e($pais->partidosJ); ?>">
		</div>
        <div class="mb-3">
			<label for="" class="form-label">Partidos Ganados</label>
			<input type="number" id="ganados" name="ganados"  step="any" tabindex="4" class="form-control" value="<?php echo e($pais->ganados); ?>">
		</div>
        <div class="mb-3">
			<label for="" class="form-label">Partidos Empatados</label>
			<input type="number" id="empatados" name="empatados"  step="any" tabindex="5" class="form-control" value="<?php echo e($pais->empatados); ?>">
		</div>
        <div class="mb-3">
			<label for="" class="form-label">Perdidos</label>
			<input type="number" id="perdidos" name="perdidos"  step="any" tabindex="6" class="form-control" value="<?php echo e($pais->perdidos); ?>">
		</div>
        <div class="mb-3">
			<label for="" class="form-label">Goles a favor</label>
			<input type="number" id="golesF" name="golesF"  step="any" tabindex="7" class="form-control" value="<?php echo e($pais->golesF); ?>">
		</div>
        <div class="mb-3">
			<label for="" class="form-label">Goles en contra</label>
			<input type="number" id="golesC" name="golesC"  step="any" tabindex="8" class="form-control" value="<?php echo e($pais->golesC); ?>">
		</div>
        <div class="mb-3">
			<label for="" class="form-label">Goles de diferencia</label>
			<input type="number" id="golesD" name="golesD"  step="any" tabindex="9" class="form-control" value="<?php echo e($pais->golesD); ?>">
		</div>
        <div class="mb-3">
			<label for="" class="form-label">Puntos</label>
			<input type="number" id="puntos" name="puntos"  step="any" tabindex="10" class="form-control" value="<?php echo e($pais->puntos); ?>">
		</div>
		<a href="/posicionesA" class="btn btn-secondary" tabindex="11">Cancelar</a>
		<button type="submit" class="btn btn-primary" tabindex='12'>Guardar</button>
	</form>
</div>
<div class="mt-2">
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project-Conmebol\resources\views/administrador/pais/edit.blade.php ENDPATH**/ ?>