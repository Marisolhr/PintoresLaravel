
<?php $__env->startSection('title', 'caja'); ?>
<?php $__env->startSection('navbar'); ?>
<ul>
    <li><a href= "/secuenciales" style="color:black;">Secuenciales</a></li>
    <li><a href= "/decisiones" style="color:black;">Decisiones</a></li>
    <li><a href= "/ciclos" style="color:black;">Ciclos</a></li>
</ul
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    3.03. Se desea saber el total de una caja registradora de un almacén, se conoce el número de billetes y monedas, así como su valor. Realice un programa para determinar el total. <br><br>
<?php 
$aa=0;
$monedas=[5, 5, 10, 2, 1, 10, 5, 5, 2, 1, 10, 10, 2, 2, 1, 10];
$billetes=[100, 500, 20, 20 , 20, 200, 100, 100];
$valorM=0;
$valorB=0;
$total=0;
while($aa< count($billetes)){
    $valorB=$valorB + $billetes[$aa];
    $aa=$aa+1;
}
while($aa< count($monedas)){
    $valorM=$valorM + $monedas[$aa];
    $aa=$aa+1;
}
$total=$valorB+$valorM;
echo "El total de la caja es de {$total} pesos";
?> 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    Derechos reservados ##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ejerciciosRuta\resources\views/ciclos/caja.blade.php ENDPATH**/ ?>