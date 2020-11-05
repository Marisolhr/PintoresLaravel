
<?php $__env->startSection('title', 'Volumen'); ?>
<?php $__env->startSection('navbar'); ?>
<ul>
    <li><a href= "/secuenciales" style="color:black;">Secuenciales</a></li>
    <li><a href= "/decisiones" style="color:black;">Decisiones</a></li>
    <li>Ciclos</li>
</ul
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    1.3. Calcular el volumen de un cono 
    <br><br>
    <?php 
    $radio;
    $h;
    $vol=(3.1416*($radio^2)*$h)/3;
    ?> 
    El radio es de  <?php echo e($radio); ?><br>
    La altura es de <?php echo e($h); ?><br>
    El volumen del cono es de <?php echo e($vol); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    Derechos reservados ##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ejerciciosRuta\resources\views/secuenciales/volumen.blade.php ENDPATH**/ ?>