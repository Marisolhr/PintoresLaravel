
<?php $__env->startSection('title', 'calif'); ?>
<?php $__env->startSection('navbar'); ?>
<ul>
    <li><a href= "/secuenciales" style="color:black;">Secuenciales</a></li>
    <li><a href= "/decisiones" style="color:black;">Decisiones</a></li>
    <li>Ciclos</li>
</ul
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
2.05. Realice un programa que, con base en una calificación proporcionada (0-10), indique con letra la calificación que le corresponde: • 10 es “A” • 9 es “B” • 8 es “C” • 7 y 6 son “D” • 5 a 0 son “F”
<?php 
$cali = 9; 
?> 
<br><br>
La califcacion es <?php echo e($cali); ?> por lo tanto la letra es
<?php switch($cali): 
case (10): ?> 
A 
<?php break; ?> 
<?php case (9): ?> 
B 
<?php break; ?> 
<?php case (8): ?> 
C <?php break; ?> 
<?php case (7): ?> 
D 
<?php break; ?> 
<?php case (6): ?> 
D 
<?php break; ?> 
<?php default: ?>
F 
<?php endswitch; ?> 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    Derechos reservados ##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ejerciciosRuta\resources\views/decisiones/calif.blade.php ENDPATH**/ ?>