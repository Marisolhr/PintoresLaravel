
<?php $__env->startSection('title', 'Sueldo'); ?>
<?php $__env->startSection('navbar'); ?>
<ul>
    <li><a href= "/secuenciales" style="color:black;">Secuenciales</a></li>
    <li><a href= "/decisiones" style="color:black;">Decisiones</a></li>
    <li>Ciclos</li>
</ul
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    2.02. Realice un programa para determinar el sueldo semanal de un trabajador con base en las horas trabajadas y el pago por hora, considerando que después de las 40 horas cada hora se considera como excedente y se paga el doble.
    <br><br>
    <?php 
    $horas = 45;
    $pagoH = 20;
    $horasEx;
    $pagoN;
    $pagoEx;
    $pagoTotal;
    if($horas>40){
        $horasEx=$horas-40;
        $pagoEx=($horasEx*$pagoH)*2; 
        $pagoN=40*$pagoH;
        $pagoTotal=$pagoN+$pagoEx;
    }
    elseif($horas<41){
        $pagoTotal=$horas*$pagoH;
    }
    ?> 
    Las horas trabajadas son <?php echo e($horas); ?><br>
    El sueldo total es de <?php echo e($pagoTotal); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    Derechos reservados ##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ejerciciosRuta\resources\views/decisiones/sueldo.blade.php ENDPATH**/ ?>