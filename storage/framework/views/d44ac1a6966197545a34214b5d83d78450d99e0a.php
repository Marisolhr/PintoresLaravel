
<?php $__env->startSection('title', 'Apotema'); ?>
<?php $__env->startSection('navbar'); ?>
<ul>
    <li><a href= "/secuenciales" style="color:black;">Secuenciales</a></li>
    <li>Decisiones</li>
    <li>Ciclos</li>
</ul
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    1.2. Cálcular de la apotema de un cuadrado 
    <br><br>
    <?php 
    $lado;
    $apo=$lado/2;
    ?> 
    El lado es de  <?php echo e($lado); ?><br>
    El apotema del cuadrado es de <?php echo e($apo); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    Derechos reservados ##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ejerciciosRuta\resources\views/secuenciales/apotema.blade.php ENDPATH**/ ?>