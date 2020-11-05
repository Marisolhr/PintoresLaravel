
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
        <li><a href= "<?php echo e(action('App\Http\Controllers\EstructurasDeControl@index11')); ?>" style="color:black;">3.01. Un profesor tiene un salario inicial de $1500, y recibe un incremento de 10 % anual durante 6 años. ¿Cuál es su salario al cabo de 6 años? ¿Qué salario ha recibido en cada uno de los 6 años? Realice un programa que resuelva el problema.</a></li>
        <li><a href= "<?php echo e(action('App\Http\Controllers\EstructurasDeControl@index12')); ?>" style="color:black;">3.02. Se requiere un programa para determinar, de N cantidades, cuántas son cero, cuántas son menores a cero, y cuántas son mayores a cero.</a></li>
        <li><a href= "<?php echo e(action('App\Http\Controllers\EstructurasDeControl@index13')); ?>" style="color:black;">3.03. Se desea saber el total de una caja registradora de un almacén, se conoce el número de billetes y monedas, así como su valor. Realice un programa para determinar el total.</a></li>
        <li><a href= "<?php echo e(action('App\Http\Controllers\EstructurasDeControl@index14')); ?>" style="color:black;">3.04. Realice un programa para leer las calificaciones de N alumnos y determine el número de aprobados y reprobados.</a></li>
        <li><a href= "<?php echo e(action('App\Http\Controllers\EstructurasDeControl@index15')); ?>" style="color:black;">3.05. Realice un programa para obtener la tabla de multiplicar de un entero K comenzando desde el 1.

</a></li>
    </ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    Derechos reservados ##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ejerciciosRuta\resources\views/ciclos.blade.php ENDPATH**/ ?>