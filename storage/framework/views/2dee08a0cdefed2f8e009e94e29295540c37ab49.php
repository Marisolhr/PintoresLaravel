
<?php $__env->startSection('title', 'Pintores'); ?>
<?php $__env->startSection('navbar'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
    <center><h3>-Algunos pintores, su historia y sus obras-</h3></center><br>
    <div class="row row-cols-1 row-cols-md-2">
  <div class="col mb-4">
    <div class="card">
      <img src="/images/rubens.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Rubens</h5>
        <p class="card-text">Peter Paul Rubens fue un pintor barroco de la escuela flamenca. Su estilo exuberante enfatiza el dinamismo, el color y la sensualidad.</p>
        <p class="card-text"><a href="<?php echo e(action('App\Http\Controllers\EstructurasDeControl@index2')); ?>">Ver mas</a></p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="/images/velazquez.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Velazquez</h5>
        <p class="card-text">Fue un pintor barroco español considerado uno de los máximos exponentes de la pintura española y maestro de la pintura universal.</p>
        <p class="card-text"><a href="<?php echo e(action('App\Http\Controllers\EstructurasDeControl@index3')); ?>">Ver mas</a></p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="/images/sanzio.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Sanzio</h5>
        <p class="card-text">Raffaello Sanzio, ​también conocido como Rafael de Urbino o simplemente como Rafael, ​​ fue un pintor y arquitecto italiano del Renacimiento.</p>
        <p class="card-text"><a href="<?php echo e(action('App\Http\Controllers\EstructurasDeControl@index4')); ?>">Ver mas</a></p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="/images/tiziano.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Tiziano</h5>
        <p class="card-text">Tiziano, Vecellio di Gregorio fue un pintor italiano del Renacimiento, uno de los mayores exponentes de la Escuela veneciana.</p>
        <p class="card-text"><a href="<?php echo e(action('App\Http\Controllers\EstructurasDeControl@index5')); ?>">Ver mas</a></p>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    Derechos reservados ##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ejerciciosRuta\resources\views/plantilla.blade.php ENDPATH**/ ?>