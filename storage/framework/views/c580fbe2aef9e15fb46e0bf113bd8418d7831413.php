
<?php $__env->startSection('title', 'Febrero'); ?>
<?php $__env->startSection('navbar'); ?>
<ul>
    <li>Secuenciales</li>
    <li>Decisiones</li>
    <li>Ciclos</li>
</ul
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    2.03. El 14 de febrero una persona desea comprarle un regalo al ser querido que más aprecia en ese momento, su dilema radica en qué regalo puede hacerle, las alternativas que tiene son las siguientes: • Tarjeta $10.00 o menos • Chocolates $11.00 a $100.00 • Flores $101.00 a $250.00 • Joyas más de $251.00 Se requiere un programa que ayude a determinar qué regalo se le puede comprar a ese ser tan especial por el día del amor y la amistad.    <br><br>
    <?php 
    $dinero = 15;  
    ?>  
    Son $<?php echo e($dinero); ?><br>
    <?php if($dinero<=10): ?> 
    Compra una tarjeta 
    <?php elseif($dinero<=100): ?> 
    Compra chocolates 
    <?php elseif($dinero<=250): ?> 
    Compra flores 
    <?php elseif($dinero>=251): ?> 
    Compra joyas 
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    Derechos reservados ##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ejerciciosRuta\resources\views/decisiones/febrero.blade.php ENDPATH**/ ?>