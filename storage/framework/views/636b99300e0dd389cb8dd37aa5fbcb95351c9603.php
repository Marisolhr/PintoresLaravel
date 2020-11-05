
<?php $__env->startSection('title', 'salario'); ?>
<?php $__env->startSection('navbar'); ?>
<ul>
    <li>Secuenciales</li>
    <li>Decisiones</li>
    <li>Ciclos</li>
</ul
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
Ciclos 3.01. Un profesor tiene un salario inicial de $1500, y recibe un incremento de 10 % anual durante 6 años. ¿Cuál es su salario al cabo de 6 años? ¿Qué salario ha recibido en cada uno de los 6 años? Realice un programa que resuelva el problema. <br><br>
<?php 
$sal = 1500;
$salEx;
$aa=0;
while($aa< 6){
    $salEx=$sal*.10;
    $sal=$sal+$salEx;
    echo "El salario durante el año es de {$sal}";
    echo "<br>";
    $aa=$aa+1;
}
echo "El salario final es de {$sal}";
?> 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    Derechos reservados ##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ejerciciosRuta\resources\views/ciclos/salario.blade.php ENDPATH**/ ?>