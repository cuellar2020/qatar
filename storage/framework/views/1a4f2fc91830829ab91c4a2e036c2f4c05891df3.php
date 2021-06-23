

<?php $__env->startSection('content'); ?>

<div class="container mt-4">
	<h2>Editar partido</h2>
	<form action="/partidosA/<?php echo e($partido->id); ?>" method="POST">
	<?php echo csrf_field(); ?>
	<?php echo method_field('PUT'); ?>
		<div class="mb-3">
			<label for="" class="form-label">Fecha</label>
			<input type="date" id="fecha" name="fecha" tabindex="1" class="form-control" value="<?php echo e($partido->fecha); ?>">
		</div>
		<div class="mb-3">
			<label for="" class="form-label">Jornada</label>
			<input type="text" id="jornada" name="jornada" tabindex="2" class="form-control" value="<?php echo e($partido->jornada); ?>">
		</div>
        <div class="mb-3">
			<label for="" class="form-label">País 1</label>
			<input type="number" id="pais" name="pais"  step="any" tabindex="3" class="form-control" value="<?php echo e($partido->pais); ?>">
		</div>
        <div class="mb-3">
			<label for="" class="form-label">País 2</label>
			<input type="number" id="pais2" name="pais2"  step="any" tabindex="4" class="form-control" value="<?php echo e($partido->pais2); ?>">
		</div>
        <div class="mb-3">
			<label for="" class="form-label">Estado</label>
			<input type="text" id="estado" name="estado" tabindex="5" class="form-control" value="<?php echo e($partido->estado); ?>">
		</div>
        <div class="mb-3">
			<label for="" class="form-label">Resultado</label>
			<input type="text" id="resultado" name="resultado" tabindex="6" class="form-control" value="<?php echo e($partido->resultado); ?>">
		</div>
		<a href="/partidosA" class="btn btn-secondary" tabindex="7">Cancelar</a>
		<button type="submit" class="btn btn-primary" tabindex='8'>Guardar</button>
	</form>
</div>
<div class="mt-2">
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project-Conmebol\resources\views/administrador/partido/edit.blade.php ENDPATH**/ ?>