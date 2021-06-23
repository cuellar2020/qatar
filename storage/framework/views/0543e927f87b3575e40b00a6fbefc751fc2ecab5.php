

<?php $__env->startSection('content'); ?>

<div class="container">
       <h4>Temporada 2020-22</h4>
</div>
<br>
<div class="container">
            <div class="row">
                <div class="col-12 border"> <h4>Frase de grupos - Jornada 1 de 18 </h4> </div>
            </div>
            <div class="row">
            <?php $__currentLoopData = $jornadas1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="<?php echo e($partido->pais1); ?>" alt="" class=" img-fluid imagen">   <?php echo e($partido->nombrep1); ?></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo e($partido->pais2); ?>" alt="" class=" img-fluid imagen">   <?php echo e($partido->nombrep2); ?></td>
                                </tr>
                                <tr>
                                    <td><a href="/$partidosA/<?php echo e($partido->id); ?>/edit" class="btn btn-secondary">Modificar</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($partido->fecha); ?></h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($partido->estado); ?></h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5"><?php echo e($partido->resultado); ?></h5>
                        </div>
                        <div class="col-1">
                        
                        </div>
                    </div>
                </div>  
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </div> 
</div>
<br>
<div class="container">
            <div class="row">
                <div class="col-12 border"> <h4>Frase de grupos - Jornada 2 de 18</h4>  </div>
            </div>
            <div class="row">
            <?php $__currentLoopData = $jornadas2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="<?php echo e($partido->pais1); ?>" alt="" class=" img-fluid imagen">   <?php echo e($partido->nombrep1); ?></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo e($partido->pais2); ?>" alt="" class=" img-fluid imagen">   <?php echo e($partido->nombrep2); ?></td>
                                </tr>
                                <tr>
                                    <td><a href="/$partidosA/<?php echo e($partido->id); ?>/edit" class="btn btn-secondary">Modificar</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($partido->fecha); ?></h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($partido->estado); ?></h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5"><?php echo e($partido->resultado); ?></h5>
                        </div>
                    </div>
                </div>  
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div> 
</div>
<br>
<div class="container">
            <div class="row">
                <div class="col-12 border"> <h4>Frase de grupos - Jornada 3 de 18</h4>  </div>
            </div>
            <div class="row">
            <?php $__currentLoopData = $jornadas3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="<?php echo e($partido->pais1); ?>" alt="" class=" img-fluid imagen">   <?php echo e($partido->nombrep1); ?></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo e($partido->pais2); ?>" alt="" class=" img-fluid imagen">   <?php echo e($partido->nombrep2); ?></td>
                                </tr>
                                <tr>
                                    <td><a href="/$partidosA/<?php echo e($partido->id); ?>/edit" class="btn btn-secondary">Modificar</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($partido->fecha); ?></h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($partido->estado); ?></h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5"><?php echo e($partido->resultado); ?></h5>
                        </div>
                    </div>
                </div>  
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div> 
</div>
<br>
<div class="container">
            <div class="row">
                <div class="col-12 border"> <h4>Frase de grupos - Jornada 4 de 18</h4>  </div>
            </div>
            <div class="row">
            <?php $__currentLoopData = $jornadas4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="<?php echo e($partido->pais1); ?>" alt="" class=" img-fluid imagen">   <?php echo e($partido->nombrep1); ?></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo e($partido->pais2); ?>" alt="" class=" img-fluid imagen">   <?php echo e($partido->nombrep2); ?></td>
                                </tr>
                                <tr>
                                    <td><a href="/$partidosA/<?php echo e($partido->id); ?>/edit" class="btn btn-secondary">Modificar</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($partido->fecha); ?></h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($partido->estado); ?></h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5"><?php echo e($partido->resultado); ?></h5>
                        </div>
                    </div>
                </div>  
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div> 
</div>
<br>
<div class="container">
            <div class="row">
                <div class="col-12 border"> <h4>Frase de grupos - Jornada 7 de 18</h4>  </div>
            </div>
            <div class="row">
            <?php $__currentLoopData = $jornadas7; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="<?php echo e($partido->pais1); ?>" alt="" class=" img-fluid imagen">   <?php echo e($partido->nombrep1); ?></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo e($partido->pais2); ?>" alt="" class=" img-fluid imagen">   <?php echo e($partido->nombrep2); ?></td>
                                </tr>
                                <tr>
                                    <td><a href="/$partidosA/<?php echo e($partido->id); ?>/edit" class="btn btn-secondary">Modificar</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($partido->fecha); ?></h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($partido->estado); ?></h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5"><?php echo e($partido->resultado); ?></h5>
                        </div>
                    </div>
                </div>  
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div> 
</div>
<br>
<div class="container">
            <div class="row">
                <div class="col-12 border"> <h4>Frase de grupos - Jornada 8 de 18</h4>  </div>
            </div>
            <div class="row">
            <?php $__currentLoopData = $jornadas8; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="<?php echo e($partido->pais1); ?>" alt="" class=" img-fluid imagen">   <?php echo e($partido->nombrep1); ?></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo e($partido->pais2); ?>" alt="" class=" img-fluid imagen">   <?php echo e($partido->nombrep2); ?></td>
                                </tr>
                                <tr>
                                    <td><a href="/partidosA/<?php echo e($partido->id); ?>/edit" class="btn btn-secondary">Modificar</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($partido->fecha); ?></h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($partido->estado); ?></h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5"><?php echo e($partido->resultado); ?></h5>
                        </div>
                    </div>
                </div>  
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div> 
</div>
<br>
<div class="container">
            <div class="row">
                <div class="col-12 border"> <h4>Frase de grupos - Jornada 9 de 18</h4>  </div>
            </div>
            <div class="row">
            <?php $__currentLoopData = $jornadas9; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="<?php echo e($partido->pais1); ?>" alt="" class=" img-fluid imagen">   <?php echo e($partido->nombrep1); ?></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo e($partido->pais2); ?>" alt="" class=" img-fluid imagen">   <?php echo e($partido->nombrep2); ?></td>
                                </tr>
                                <tr>
                                    <td><a href="/partidosA/<?php echo e($partido->id); ?>/edit" class="btn btn-secondary">Modificar</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($partido->fecha); ?></h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($partido->estado); ?></h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5"><?php echo e($partido->resultado); ?></h5>
                        </div>
                    </div>
                </div>  
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div> 
</div>
<br>
<div class="container">
            <div class="row">
                <div class="col-12 border"> <h4>Frase de grupos - Jornada 10 de 18</h4>  </div>
            </div>
            <div class="row">
            <?php $__currentLoopData = $jornadas10; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="<?php echo e($partido->pais1); ?>" alt="" class=" img-fluid imagen">   <?php echo e($partido->nombrep1); ?></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo e($partido->pais2); ?>" alt="" class=" img-fluid imagen">   <?php echo e($partido->nombrep2); ?></td>
                                </tr>
                                <tr>
                                    <td><a href="/partidosA/<?php echo e($partido->id); ?>/edit" class="btn btn-secondary">Modificar</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($partido->fecha); ?></h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($partido->estado); ?></h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5"><?php echo e($partido->resultado); ?></h5>
                        </div>
                    </div>
                </div>  
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div> 
</div>
<br>
<div class="container">
            <div class="row">
                <div class="col-12 border"> <h4>Frase de grupos - Jornada 11 de 18</h4>  </div>
            </div>
            <div class="row">
            <?php $__currentLoopData = $jornadas11; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="<?php echo e($partido->pais1); ?>" alt="" class=" img-fluid imagen">   <?php echo e($partido->nombrep1); ?></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo e($partido->pais2); ?>" alt="" class=" img-fluid imagen">   <?php echo e($partido->nombrep2); ?></td>
                                </tr>
                                <tr>
                                    <td><a href="/partidosA/<?php echo e($partido->id); ?>/edit" class="btn btn-secondary">Modificar</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($partido->fecha); ?></h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($partido->estado); ?></h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5"><?php echo e($partido->resultado); ?></h5>
                        </div>
                    </div>
                </div>  
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div> 
</div>
<br>
<div class="container">
            <div class="row">
                <div class="col-12 border"> <h4>Frase de grupos - Jornada 12 de 18</h4>  </div>
            </div>
            <div class="row">
            <?php $__currentLoopData = $jornadas12; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="<?php echo e($partido->pais1); ?>" alt="" class=" img-fluid imagen">   <?php echo e($partido->nombrep1); ?></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo e($partido->pais2); ?>" alt="" class=" img-fluid imagen">   <?php echo e($partido->nombrep2); ?></td>
                                </tr>
                                <tr>
                                    <td><a href="/partidosA/<?php echo e($partido->id); ?>/edit" class="btn btn-secondary">Modificar</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($partido->fecha); ?></h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($partido->estado); ?></h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5"><?php echo e($partido->resultado); ?></h5>
                        </div>
                    </div>
                </div>  
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div> 
</div>
<br>
<div class="container">
            <div class="row">
                <div class="col-12 border"> <h4>Frase de grupos - Jornada 13 de 18</h4>  </div>
            </div>
            <div class="row">
            <?php $__currentLoopData = $jornadas13; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="<?php echo e($partido->pais1); ?>" alt="" class=" img-fluid imagen">   <?php echo e($partido->nombrep1); ?></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo e($partido->pais2); ?>" alt="" class=" img-fluid imagen">   <?php echo e($partido->nombrep2); ?></td>
                                </tr>
                                <tr>
                                    <td><a href="/partidosA/<?php echo e($partido->id); ?>/edit" class="btn btn-secondary">Modificar</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($partido->fecha); ?></h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($partido->estado); ?></h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5"><?php echo e($partido->resultado); ?></h5>
                        </div>
                    </div>
                </div>  
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div> 
</div>
<br>
<div class="container">
            <div class="row">
                <div class="col-12 border"> <h4>Frase de grupos - Jornada 14 de 18</h4>  </div>
            </div>
            <div class="row">
            <?php $__currentLoopData = $jornadas14; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="<?php echo e($partido->pais1); ?>" alt="" class=" img-fluid imagen">   <?php echo e($partido->nombrep1); ?></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo e($partido->pais2); ?>" alt="" class=" img-fluid imagen">   <?php echo e($partido->nombrep2); ?></td>
                                </tr>
                                <tr>
                                    <td><a href="/partidosA/<?php echo e($partido->id); ?>/edit" class="btn btn-secondary">Modificar</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($partido->fecha); ?></h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($partido->estado); ?></h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5"><?php echo e($partido->resultado); ?></h5>
                        </div>
                    </div>
                </div>  
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div> 
</div>
<br>
<div class="container">
            <div class="row">
                <div class="col-12 border"> <h4>Frase de grupos - Jornada 15 de 18</h4>  </div>
            </div>
            <div class="row">
            <?php $__currentLoopData = $jornadas15; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="<?php echo e($partido->pais1); ?>" alt="" class=" img-fluid imagen">   <?php echo e($partido->nombrep1); ?></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo e($partido->pais2); ?>" alt="" class=" img-fluid imagen">   <?php echo e($partido->nombrep2); ?></td>
                                </tr>
                                <tr>
                                    <td><a href="/partidosA/<?php echo e($partido->id); ?>/edit" class="btn btn-secondary">Modificar</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($partido->fecha); ?></h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($partido->estado); ?></h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5"><?php echo e($partido->resultado); ?></h5>
                        </div>
                    </div>
                </div>  
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div> 
</div>
<br>
<div class="container">
            <div class="row">
                <div class="col-12 border"> <h4>Frase de grupos - Jornada 16 de 18</h4>  </div>
            </div>
            <div class="row">
            <?php $__currentLoopData = $jornadas16; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="<?php echo e($partido->pais1); ?>" alt="" class=" img-fluid imagen">   <?php echo e($partido->nombrep1); ?></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo e($partido->pais2); ?>" alt="" class=" img-fluid imagen">   <?php echo e($partido->nombrep2); ?></td>
                                </tr>
                                <tr>
                                    <td><a href="/partidosA/<?php echo e($partido->id); ?>/edit" class="btn btn-secondary">Modificar</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($partido->fecha); ?></h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($partido->estado); ?></h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5"><?php echo e($partido->resultado); ?></h5>
                        </div>
                    </div>
                </div>  
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div> 
</div>
<br>
<div class="container">
            <div class="row">
                <div class="col-12 border"> <h4>Frase de grupos - Jornada 17 de 18</h4>  </div>
            </div>
            <div class="row">
            <?php $__currentLoopData = $jornadas17; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="<?php echo e($partido->pais1); ?>" alt="" class=" img-fluid imagen">   <?php echo e($partido->nombrep1); ?></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo e($partido->pais2); ?>" alt="" class=" img-fluid imagen">   <?php echo e($partido->nombrep2); ?></td>
                                </tr>
                                <tr>
                                    <td><a href="/partidosA/<?php echo e($partido->id); ?>/edit" class="btn btn-secondary">Modificar</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($partido->fecha); ?></h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($partido->estado); ?></h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5"><?php echo e($partido->resultado); ?></h5>
                        </div>
                    </div>
                </div>  
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div> 
</div>
<br>
<div class="container">
            <div class="row">
                <div class="col-12 border"> <h4>Frase de grupos - Jornada 18 de 18</h4>  </div>
            </div>
            <div class="row">
            <?php $__currentLoopData = $jornadas18; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="<?php echo e($partido->pais1); ?>" alt="" class=" img-fluid imagen">   <?php echo e($partido->nombrep1); ?></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo e($partido->pais2); ?>" alt="" class=" img-fluid imagen">   <?php echo e($partido->nombrep2); ?></td>
                                </tr>
                                <tr>
                                    <td><a href="/partidosA/<?php echo e($partido->id); ?>/edit" class="btn btn-secondary">Modificar</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($partido->fecha); ?></h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($partido->estado); ?></h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5"><?php echo e($partido->resultado); ?></h5>
                        </div>
                    </div>
                </div>  
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div> 
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project-Conmebol\resources\views/administrador/partido/index.blade.php ENDPATH**/ ?>