
<?php $__env->startSection('title', 'Ejercicios'); ?>
<?php $__env->startSection('navbar'); ?>
<ul>
    <li><a href= "/secuenciales" style="color:black;">Secuenciales</a></li>
    <li><a href= "/decisiones" style="color:black;">Decisiones</a></li>
    <li><a href= "/ciclos" style="color:black;">Ciclos</a></li>
</ul
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
    <ul>
        <li><a href= "<?php echo e(route('AreaDelTrapecio')); ?>" style="color:black;">1.1. Calcular el área de un trapecio</a></li>
        <li><a href= "<?php echo e(route('Apotema')); ?>" style="color:black;">1.2. Cálcular de la apotema de un cuadrado</a></li>
        <li><a href= "<?php echo e(route('VolumenDelCono')); ?>" style="color:black;">1.3. Calcular el volumen de un cono</a></li>
        <li><a href= "<?php echo e(route('AreaTriangulo')); ?>" style="color:black;">1.4. Cálcular de área de un triángulo</a></li>
        <li><a href= "<?php echo e(route('Circunferencia')); ?>" style="color:black;">1.5. Cálcular de la longitud de una circunferencia de radio r</a></li>
    </ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    Derechos reservados ##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ejerciciosRuta\resources\views/secuen.blade.php ENDPATH**/ ?>