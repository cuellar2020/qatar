

<?php $__env->startSection('content'); ?>

<div class="container">
       <h4>Temporada 2020-22</h4>
</div>
<br>
<div class="container">
    <table class="table table-bordered">
        <thead style="background-color: rgb(189, 195, 199);">
            <tr><h5>Goles</h5></tr>
            <tr>
                <th scope="col">Jugador</th>
                <th scope="col">Goles</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $jugadores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jugador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><img src="<?php echo e($jugador->pais); ?>" alt="" class=" img-fluid imagen"> <?php echo e($jugador->nombre); ?></td>
                <td><?php echo e($jugador->goles); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
              
    </table>   
</div>
<br>
<div class="container">
    <table class="table table-bordered">
        <thead style="background-color: rgb(189, 195, 199);">
            <tr><h5>Asistencias</h5></tr>
            <tr>
                <th scope="col">Jugador</th>
                <th scope="col">Asistencias</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $jugadoresa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jugadora): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><img src="<?php echo e($jugadora->pais); ?>" alt="" class=" img-fluid imagen"> <?php echo e($jugadora->nombre); ?></td>
                <td><?php echo e($jugadora->asistencias); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
              
    </table>   
</div>
<br>
<div class="container">
    <table class="table table-bordered">
        <thead style="background-color: rgb(189, 195, 199);">
            <tr><h5>Tarjetas Amarillas</h5></tr>
            <tr>
                <th scope="col">Jugador</th>
                <th scope="col">Tarjetas Amarillas</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $tarjetasA; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tarjetaA): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><img src="<?php echo e($tarjetaA->pais); ?>" alt="" class=" img-fluid imagen"> <?php echo e($tarjetaA->nombre); ?></td>
                <td><?php echo e($tarjetaA->tarjetasA); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
              
    </table>   
</div>
<br>
<div class="container">
    <table class="table table-bordered">
        <thead style="background-color: rgb(189, 195, 199);">
            <tr><h5>Tarjetas Rojas</h5></tr>
            <tr>
                <th scope="col">Jugador</th>
                <th scope="col">Tarjetas Rojas</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $tarjetasR; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tarjetaR): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><img src="<?php echo e($tarjetaR->pais); ?>" alt="" class=" img-fluid imagen"> <?php echo e($tarjetaR->nombre); ?></td>
                <td><?php echo e($tarjetaR->tarjetasR); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
              
    </table>   
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project-Conmebol\resources\views/usuario/estadisticas.blade.php ENDPATH**/ ?>