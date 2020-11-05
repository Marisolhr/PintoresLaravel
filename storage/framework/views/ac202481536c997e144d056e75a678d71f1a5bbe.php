
<?php $__env->startSection('title', 'Estacionamiento'); ?>
<?php $__env->startSection('navbar'); ?>
<ul>
    <li>Secuenciales</li>
    <li>Decisiones</li>
    <li>Ciclos</li>
</ul
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    2.04. El dueño de un estacionamiento requiere un programa que le permita determinar cuánto debe cobrar por el uso del estacionamiento a sus clientes. Las tarifas que se tienen son las siguientes: • Las dos primeras horas a $5.00 c/u. • Las siguientes tres a $4.00 c/u. • Las cinco siguientes a $3.00 c/u. • Después de diez horas el costo por cada una es de $2.0  <br>  
    <?php 
    $horas = 11; 
    $total;
    echo "<br>"; 
    echo "Las horas son {$horas}";
    if($horas<=2){
        $total=$horas*5;
    }
    elseif($horas<=5){
        $horas=$horas-2;
        $total=($horas*4)+10;
    }
    elseif($horas<=10){
        $horas=$horas-5;
        $total=($horas*3)+22;
    }
    elseif($horas>10){
        $horas=$horas-10;
        $total=($horas*2)+37;
    }
    echo "<br>";
    echo "El total a pagar es de {$total}";
    ?>  
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    Derechos reservados ##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ejerciciosRuta\resources\views/decisiones/estacionamiento.blade.php ENDPATH**/ ?>