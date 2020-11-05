
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
        <li><a href= "<?php echo e(action('App\Http\Controllers\EstructurasDeControl@index6')); ?>" style="color:black;">2.01. Realice un programa para determinar si una persona puede votar con base en su edad en las próximas elecciones.</a></li>
        <li><a href= "<?php echo e(action('App\Http\Controllers\EstructurasDeControl@index7')); ?>" style="color:black;">2.02. Realice un programa para determinar el sueldo semanal de un trabajador con base en las horas trabajadas y el pago por hora, considerando que después de las 40 horas cada hora se considera como excedente y se paga el doble.</a></li>
        <li><a href= "<?php echo e(action('App\Http\Controllers\EstructurasDeControl@index8')); ?>" style="color:black;">2.03. El 14 de febrero una persona desea comprarle un regalo al ser querido que más aprecia en ese momento, su dilema radica en qué regalo puede hacerle, las alternativas que tiene son las siguientes: • Tarjeta $10.00 o menos • Chocolates $11.00 a $100.00 • Flores $101.00 a $250.00 • Joyas más de $251.00 Se requiere un programa que ayude a determinar qué regalo se le puede comprar a ese ser tan especial por el día del amor y la amistad.</a></li>
        <li><a href= "<?php echo e(action('App\Http\Controllers\EstructurasDeControl@index9')); ?>" style="color:black;">2.04. El dueño de un estacionamiento requiere un programa que le permita determinar cuánto debe cobrar por el uso del estacionamiento a sus clientes. Las tarifas que se tienen son las siguientes: • Las dos primeras horas a $5.00 c/u. • Las siguientes tres a $4.00 c/u. • Las cinco siguientes a $3.00 c/u. • Después de diez horas el costo por cada una es de $2.0</a></li>
        <li><a href= "<?php echo e(action('App\Http\Controllers\EstructurasDeControl@index10')); ?>" style="color:black;">2.05. Realice un programa que, con base en una calificación proporcionada (0-10), indique con letra la calificación que le corresponde: • 10 es “A” • 9 es “B” • 8 es “C” • 7 y 6 son “D” • 5 a 0 son “F</a></li>
    </ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    Derechos reservados ##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ejerciciosRuta\resources\views/deci.blade.php ENDPATH**/ ?>