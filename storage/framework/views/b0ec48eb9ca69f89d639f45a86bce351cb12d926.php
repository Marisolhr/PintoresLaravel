
<?php $__env->startSection('title', 'ceros'); ?>
<?php $__env->startSection('navbar'); ?>
<ul>
    <li><a href= "/secuenciales" style="color:black;">Secuenciales</a></li>
    <li><a href= "/decisiones" style="color:black;">Decisiones</a></li>
    <li><a href= "/ciclos" style="color:black;">Ciclos</a></li>
</ul
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
3.02. Se requiere un programa para determinar, de N cantidades, cuántas son cero, cuántas son menores a cero, y cuántas son mayores a cero. <br><br>
<?php 
$ceros=0;
$neg=0;
$pos=0;
$aa=0;
$lista=[0, -3, 2,0, 4, -1, 0, -9, 8];
while($aa< count($lista)){
    if($lista[$aa]==0){
        $ceros=$ceros+1;
    }
    if($lista[$aa]<0){
        $neg=$neg+1;
    }
    if($lista[$aa]>0){
        $pos=$pos+1;
    }
    $aa=$aa+1;
}
echo "Los numeros iguales a ceros son {$ceros}";
echo "<br>";
echo "Los numeros mayores a ceros son {$pos}";
echo "<br>";
echo "Los numeros menores a ceros son {$neg}";
echo "<br>";
?> 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    Derechos reservados ##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ejerciciosRuta\resources\views/ciclos/ceros.blade.php ENDPATH**/ ?>