

<?php $__env->startSection('content'); ?>
<div class="container">
       <h4>Temporada 2020-22</h4>
       <p class="">1-4 Clasifican directo al mundial, el 5 se juega el repechaje</p>
</div>
<div class="container">
    <table class="table table-bordered">
        <thead style="background-color: rgb(189, 195, 199);">
            <tr>
                <th scope="col">País</th>
                <th scope="col">PJ</th>
                <th scope="col">G</th>
                <th scope="col">E</th>
                <th scope="col">P</th>
                <th scope="col">GF</th>
                <th scope="col">GC</th>
                <th scope="col">DG</th>
                <th scope="col">Puntos</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $paises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pais): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><img src="<?php echo e($pais->imagen); ?>" alt="" class=" img-fluid imagen">   <?php echo e($pais->nombre); ?></td>
                <td><?php echo e($pais->partidosJ); ?></td>
                <td><?php echo e($pais->ganados); ?></td>
                <td><?php echo e($pais->empatados); ?></td>
                <td><?php echo e($pais->perdidos); ?></td>
                <td><?php echo e($pais->golesF); ?></td>
                <td><?php echo e($pais->golesC); ?></td>
                <td><?php echo e($pais->golesD); ?></td>
                <td><?php echo e($pais->puntos); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
              
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project-Conmebol\resources\views/usuario/index.blade.php ENDPATH**/ ?>