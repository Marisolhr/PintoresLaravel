<div style="background-color:#075F94; padding: 1px;border-style: solid;">
    <?php $__env->startSection('navbar'); ?>
    
    <?php echo $__env->yieldSection(); ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo e(action('App\Http\Controllers\EstructurasDeControl@index')); ?>">Pintores</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link active" href="<?php echo e(action('App\Http\Controllers\EstructurasDeControl@index2')); ?>">Rubens<span class="sr-only">(current)</span></a>
      <a class="nav-link active" href="<?php echo e(action('App\Http\Controllers\EstructurasDeControl@index3')); ?>">Velazquez<span class="sr-only">(current)</span></a>
      <a class="nav-link active" href="<?php echo e(action('App\Http\Controllers\EstructurasDeControl@index4')); ?>">Sanzio<span class="sr-only">(current)</span></a>
      <a class="nav-link active" href="<?php echo e(action('App\Http\Controllers\EstructurasDeControl@index5')); ?>">Tiziano<span class="sr-only">(current)</span></a>
    </div>
  </div>
</nav>
</div><?php /**PATH C:\laragon\www\ejerciciosRuta\resources\views/includes/navbar.blade.php ENDPATH**/ ?>