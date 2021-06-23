

<?php $__env->startSection('content'); ?>

<div class="container">
  <div class="row">
    <?php $__currentLoopData = $jugadores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jugador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-3">
      <div class="card border-secondary mb-3" style="max-width: 18rem;">
        <div class="card-header"><?php echo e($jugador->nombre); ?></div>
        <div class="card-body text-secondary">
          <h5 class="card-title">Posición: <?php echo e($jugador->posicion); ?></h5>
          <p class="card-text"> <a href="/posiciones"><img src="<?php echo e($jugador->pais); ?>" alt="" class=" img-fluid imagen"> </a> <?php echo e($jugador->nombrep); ?></p>
        </div>
        <a href="/jugadoresA/<?php echo e($jugador->id); ?>/edit" class="btn btn-secondary">Modificar</a>
      </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
  </div>


</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project-Conmebol\resources\views/administrador/jugador/index.blade.php ENDPATH**/ ?>