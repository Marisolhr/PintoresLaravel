
<?php $__env->startSection('title', 'Trapecio'); ?>
<?php $__env->startSection('navbar'); ?>
<ul>
    <li><a href= "/secuenciales" style="color:black;">Secuenciales</a></li>
    <li><a href= "/decisiones" style="color:black;">Decisiones</a></li>
    <li>Ciclos</li>
</ul
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    1.1. Calcular el área de un trapecio 
    <br><br>
    <?php 
    $bMayor;
    $bMenor;
    $h;
    $area=(($bMayor+$bMenor)/2)*$h;
    ?> 
    La base mayor es de <?php echo e($bMayor); ?><br>
    La base menor es de <?php echo e($bMenor); ?><br>
    La altura es de <?php echo e($h); ?><br>
    El area del trapecio es de <?php echo e($area); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    Derechos reservados ##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ejerciciosRuta\resources\views/secuenciales/trapecio.blade.php ENDPATH**/ ?>