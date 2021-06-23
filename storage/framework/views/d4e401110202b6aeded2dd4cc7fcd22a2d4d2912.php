

<?php $__env->startSection('content'); ?>

<div class="container">
  <div class="row">
    <?php $__currentLoopData = $sedes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sede): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-4 mt-3">
        <div class="card" style="width: 18rem;">
            <img src="<?php echo e($sede->imagen); ?>" class="card-img-top" alt="...">
            <div class="card-body">
            <p><?php echo e($sede->nombre); ?></p>
                <p class="card-text"><a href="/posiciones"><img src="<?php echo e($sede->pais); ?>" alt="" class=" img-fluid imagen"> </a> <?php echo e($sede->nombrep); ?></p>
            </div>
            <a href="/sedesA/<?php echo e($sede->id); ?>/edit" class="btn btn-secondary">Modificar</a>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
  </div>


</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project-Conmebol\resources\views/administrador/sede/index.blade.php ENDPATH**/ ?>