
<?php $__env->startSection('title', 'calis'); ?>
<?php $__env->startSection('navbar'); ?>
<ul>
    <li><a href= "/secuenciales" style="color:black;">Secuenciales</a></li>
    <li><a href= "/decisiones" style="color:black;">Decisiones</a></li>
    <li><a href= "/ciclos" style="color:black;">Ciclos</a></li>
</ul
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
3.04. Realice un programa para leer las calificaciones de N alumnos y determine el número de aprobados y reprobados. <br><br>
<?php 
$aa=0;
$calif=[7, 8, 4, 5, 9 ,10, 4, 6, 7, 6];
$aprob=0;
$rep=0;
while($aa< count($calif)){
    if($calif[$aa]<6){
        $rep=$rep+1;
    }
    if($calif[$aa]>5){
        $aprob=$aprob+1;
    }
    $aa=$aa+1;
}
echo "Los alumnos aprobados son {$aprob} y los reprobados {$rep}";
?> 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    Derechos reservados ##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ejerciciosRuta\resources\views/ciclos/calis.blade.php ENDPATH**/ ?>