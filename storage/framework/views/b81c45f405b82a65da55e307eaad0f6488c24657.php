
<?php $__env->startSection('title', 'multi'); ?>
<?php $__env->startSection('navbar'); ?>
<ul>
    <li>Secuenciales</li>
    <li>Decisiones</li>
    <li>Ciclos</li>
</ul
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    3.05. Realice un programa para obtener la tabla de multiplicar de un entero K comenzando desde el 1. <br><br>
<?php 
$aa=1;
$num=5;
$mul=0;
while($aa<=10){
    $mul=$aa*$num;
    echo "{$num} x {$aa} = {$mul}";
    echo "<br>";
    $aa=$aa+1;
}
?> 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    Derechos reservados ##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ejerciciosRuta\resources\views/ciclos/multi.blade.php ENDPATH**/ ?>