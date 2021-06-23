

<?php $__env->startSection('content'); ?>

<div class="container mt-4">
	<h2>Editar jugador</h2>
	<form action="/jugadoresA/<?php echo e($jugador->id); ?>" method="POST">
	<?php echo csrf_field(); ?>
	<?php echo method_field('PUT'); ?>
		<div class="mb-3">
			<label for="" class="form-label">Nombre</label>
			<input type="text" id="nombre" name="nombre" tabindex="1" class="form-control" value="<?php echo e($jugador->nombre); ?>">
		</div>
        <div class="mb-3">
			<label for="" class="form-label">Posición</label>
			<input type="text" id="posicion" name="posicion"   tabindex="2" class="form-control" value="<?php echo e($jugador->posicion); ?>">
		</div>
        <div class="mb-3">
			<label for="" class="form-label">País</label>
			<input type="number" id="pais" name="pais"  step="any" tabindex="3" class="form-control" value="<?php echo e($jugador->pais); ?>">
		</div>
        <div class="mb-3">
			<label for="" class="form-label">Goles</label>
			<input type="number" id="goles" name="goles"  step="any" tabindex="4" class="form-control" value="<?php echo e($jugador->goles); ?>">
		</div>
        <div class="mb-3">
			<label for="" class="form-label">Asistencias</label>
			<input type="number" id="asistencias" name="asistencias"  step="any" tabindex="5" class="form-control" value="<?php echo e($jugador->asistencias); ?>">
		</div>
        <div class="mb-3">
			<label for="" class="form-label">Tarjetas Amarillas</label>
			<input type="number" id="tarjetasA" name="tarjetasA"  step="any" tabindex="6" class="form-control" value="<?php echo e($jugador->tarjetasA); ?>">
		</div>
        <div class="mb-3">
			<label for="" class="form-label">Tarjetas Rojas</label>
			<input type="number" id="tarjetasR" name="tarjetasR"  step="any" tabindex="7" class="form-control" value="<?php echo e($jugador->tarjetasR); ?>">
		</div>
		<a href="/jugadoresA" class="btn btn-secondary" tabindex="8">Cancelar</a>
		<button type="submit" class="btn btn-primary" tabindex='9'>Guardar</button>
	</form>
</div>
<div class="mt-2">
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project-Conmebol\resources\views/administrador/jugador/edit.blade.php ENDPATH**/ ?>