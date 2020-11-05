
<?php $__env->startSection('title', 'Votar'); ?>
<?php $__env->startSection('navbar'); ?>
<ul>
    <li><a href= "/secuenciales" style="color:black;">Secuenciales</a></li>
    <li><a href= "/decisiones" style="color:black;">Decisiones</a></li>
    <li>Ciclos</li>
</ul
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    2.01. Realice un programa para determinar si una persona puede votar con base en su edad en las próximas elecciones.
    <br><br>
    <?php 
    $edad = 20; 
    ?> 
    La edad es de <?php echo e($edad); ?><br>
    <?php if($edad>=18): ?> 
    Puedes votar 
    <?php else: ?> 
    No puedes votar 
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    Derechos reservados ##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ejerciciosRuta\resources\views/decisiones/votar.blade.php ENDPATH**/ ?>