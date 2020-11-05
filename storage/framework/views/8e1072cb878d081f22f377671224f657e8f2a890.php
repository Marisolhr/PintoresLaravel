
<?php $__env->startSection('title', 'Circunferencia'); ?>
<?php $__env->startSection('navbar'); ?>
<ul>
    <li><a href= "/secuenciales" style="color:black;">Secuenciales</a></li>
    <li>Decisiones</li>
    <li>Ciclos</li>
</ul
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    1.5. Cálcular de la longitud de una circunferencia de radio r 
    <br><br>
    <?php 
    $radio;
    $circun= 2*3.1416*$radio;
    ?> 
    La radio es de  <?php echo e($radio); ?><br>
    La circunferencia es de <?php echo e($circun); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    Derechos reservados ##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ejerciciosRuta\resources\views/secuenciales/circun.blade.php ENDPATH**/ ?>