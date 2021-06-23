

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
            <?php $__currentLoopData = $jornadas1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jornada1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="<?php echo e($jornada1->pais1); ?>" alt="" class=" img-fluid imagen">   <?php echo e($jornada1->nombrep1); ?></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo e($jornada1->pais2); ?>" alt="" class=" img-fluid imagen">   <?php echo e($jornada1->nombrep2); ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($jornada1->fecha); ?></h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($jornada1->estado); ?></h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5"><?php echo e($jornada1->resultado); ?></h5>
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
            <?php $__currentLoopData = $jornadas2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jornada2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="<?php echo e($jornada2->pais1); ?>" alt="" class=" img-fluid imagen">   <?php echo e($jornada2->nombrep1); ?></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo e($jornada2->pais2); ?>" alt="" class=" img-fluid imagen">   <?php echo e($jornada2->nombrep2); ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($jornada2->fecha); ?></h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($jornada2->estado); ?></h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5"><?php echo e($jornada2->resultado); ?></h5>
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
            <?php $__currentLoopData = $jornadas3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jornada3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="<?php echo e($jornada3->pais1); ?>" alt="" class=" img-fluid imagen">   <?php echo e($jornada3->nombrep1); ?></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo e($jornada3->pais2); ?>" alt="" class=" img-fluid imagen">   <?php echo e($jornada3->nombrep2); ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($jornada3->fecha); ?></h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($jornada3->estado); ?></h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5"><?php echo e($jornada3->resultado); ?></h5>
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
            <?php $__currentLoopData = $jornadas4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jornada4): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="<?php echo e($jornada4->pais1); ?>" alt="" class=" img-fluid imagen">   <?php echo e($jornada4->nombrep1); ?></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo e($jornada4->pais2); ?>" alt="" class=" img-fluid imagen">   <?php echo e($jornada4->nombrep2); ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($jornada4->fecha); ?></h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($jornada4->estado); ?></h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5"><?php echo e($jornada4->resultado); ?></h5>
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
            <?php $__currentLoopData = $jornadas7; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jornada7): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="<?php echo e($jornada7->pais1); ?>" alt="" class=" img-fluid imagen">   <?php echo e($jornada7->nombrep1); ?></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo e($jornada7->pais2); ?>" alt="" class=" img-fluid imagen">   <?php echo e($jornada7->nombrep2); ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($jornada7->fecha); ?></h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($jornada7->estado); ?></h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5"><?php echo e($jornada7->resultado); ?></h5>
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
            <?php $__currentLoopData = $jornadas8; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jornada8): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="<?php echo e($jornada8->pais1); ?>" alt="" class=" img-fluid imagen">   <?php echo e($jornada8->nombrep1); ?></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo e($jornada8->pais2); ?>" alt="" class=" img-fluid imagen">   <?php echo e($jornada8->nombrep2); ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($jornada8->fecha); ?></h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($jornada8->estado); ?></h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5"><?php echo e($jornada8->resultado); ?></h5>
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
            <?php $__currentLoopData = $jornadas9; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jornada9): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="<?php echo e($jornada9->pais1); ?>" alt="" class=" img-fluid imagen">   <?php echo e($jornada9->nombrep1); ?></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo e($jornada9->pais2); ?>" alt="" class=" img-fluid imagen">   <?php echo e($jornada9->nombrep2); ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($jornada9->fecha); ?></h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($jornada9->estado); ?></h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5"><?php echo e($jornada9->resultado); ?></h5>
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
            <?php $__currentLoopData = $jornadas10; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jornada10): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="<?php echo e($jornada10->pais1); ?>" alt="" class=" img-fluid imagen">   <?php echo e($jornada10->nombrep1); ?></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo e($jornada10->pais2); ?>" alt="" class=" img-fluid imagen">   <?php echo e($jornada10->nombrep2); ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($jornada10->fecha); ?></h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($jornada10->estado); ?></h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5"><?php echo e($jornada10->resultado); ?></h5>
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
            <?php $__currentLoopData = $jornadas11; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jornada11): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="<?php echo e($jornada11->pais1); ?>" alt="" class=" img-fluid imagen">   <?php echo e($jornada11->nombrep1); ?></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo e($jornada11->pais2); ?>" alt="" class=" img-fluid imagen">   <?php echo e($jornada11->nombrep2); ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($jornada11->fecha); ?></h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($jornada11->estado); ?></h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5"><?php echo e($jornada11->resultado); ?></h5>
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
            <?php $__currentLoopData = $jornadas12; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jornada12): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="<?php echo e($jornada12->pais1); ?>" alt="" class=" img-fluid imagen">   <?php echo e($jornada12->nombrep1); ?></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo e($jornada12->pais2); ?>" alt="" class=" img-fluid imagen">   <?php echo e($jornada12->nombrep2); ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($jornada12->fecha); ?></h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($jornada12->estado); ?></h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5"><?php echo e($jornada12->resultado); ?></h5>
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
            <?php $__currentLoopData = $jornadas13; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jornada13): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="<?php echo e($jornada13->pais1); ?>" alt="" class=" img-fluid imagen">   <?php echo e($jornada13->nombrep1); ?></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo e($jornada13->pais2); ?>" alt="" class=" img-fluid imagen">   <?php echo e($jornada13->nombrep2); ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($jornada13->fecha); ?></h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($jornada13->estado); ?></h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5"><?php echo e($jornada13->resultado); ?></h5>
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
            <?php $__currentLoopData = $jornadas14; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jornada14): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="<?php echo e($jornada14->pais1); ?>" alt="" class=" img-fluid imagen">   <?php echo e($jornada14->nombrep1); ?></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo e($jornada14->pais2); ?>" alt="" class=" img-fluid imagen">   <?php echo e($jornada14->nombrep2); ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($jornada14->fecha); ?></h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($jornada14->estado); ?></h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5"><?php echo e($jornada14->resultado); ?></h5>
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
            <?php $__currentLoopData = $jornadas15; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jornada15): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="<?php echo e($jornada15->pais1); ?>" alt="" class=" img-fluid imagen">   <?php echo e($jornada15->nombrep1); ?></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo e($jornada15->pais2); ?>" alt="" class=" img-fluid imagen">   <?php echo e($jornada15->nombrep2); ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($jornada15->fecha); ?></h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($jornada15->estado); ?></h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5"><?php echo e($jornada15->resultado); ?></h5>
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
            <?php $__currentLoopData = $jornadas16; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jornada16): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="<?php echo e($jornada16->pais1); ?>" alt="" class=" img-fluid imagen">   <?php echo e($jornada16->nombrep1); ?></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo e($jornada16->pais2); ?>" alt="" class=" img-fluid imagen">   <?php echo e($jornada16->nombrep2); ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($jornada16->fecha); ?></h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($jornada16->estado); ?></h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5"><?php echo e($jornada16->resultado); ?></h5>
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
            <?php $__currentLoopData = $jornadas17; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jornada17): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="<?php echo e($jornada17->pais1); ?>" alt="" class=" img-fluid imagen">   <?php echo e($jornada17->nombrep1); ?></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo e($jornada17->pais2); ?>" alt="" class=" img-fluid imagen">   <?php echo e($jornada17->nombrep2); ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($jornada17->fecha); ?></h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($jornada17->estado); ?></h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5"><?php echo e($jornada17->resultado); ?></h5>
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
            <?php $__currentLoopData = $jornadas18; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jornada18): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 border">
                    <div class="row">
                        <div class="col-4">
                            <table class="">
                                <tr>
                                    <td><img src="<?php echo e($jornada18->pais1); ?>" alt="" class=" img-fluid imagen">   <?php echo e($jornada18->nombrep1); ?></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo e($jornada18->pais2); ?>" alt="" class=" img-fluid imagen">   <?php echo e($jornada18->nombrep2); ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($jornada18->fecha); ?></h5>
                        </div>
                        <div class="col-3">
                            <h5 class="text-center mt-5"><?php echo e($jornada18->estado); ?></h5>
                        </div>
                        <div class="col-2">
                            <h5 class="text-center mt-5"><?php echo e($jornada18->resultado); ?></h5>
                        </div>
                    </div>
                </div>  
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div> 
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project-Conmebol\resources\views/usuario/partidos.blade.php ENDPATH**/ ?>