
<?php $__env->startSection('title', 'Area'); ?>
<?php $__env->startSection('navbar'); ?>
<ul>
    <li><a href= "/secuenciales" style="color:black;">Secuenciales</a></li>
    <li>Decisiones</li>
    <li>Ciclos</li>
</ul
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    1.4. Cálcular de área de un triángulo
    <br><br>
    <?php 
    $base;
    $altura;
    $area= ($base*$altura)/2;
    ?> 
    La base es de  <?php echo e($base); ?><br>
    La altura es de <?php echo e($altura); ?><br>
    El area del triangulo es de <?php echo e($area); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    Derechos reservados ##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ejerciciosRuta\resources\views/secuenciales/area.blade.php ENDPATH**/ ?>