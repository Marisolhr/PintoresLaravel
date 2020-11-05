@extends('layouts.master')
@section('title', 'Sanzio')
@section('navbar')
@stop

@section('contenido')
    <br><h2><center>S A N Z I O</center></h2><br><br>
    <h3 style="color: #9C0901; padding-left:25px">Biografia</h3><hr><br>
    <img src="/images/sanzio.jpg" style="float:right; width:400; height:430; padding:30px">
    <p style="text-align: justify; size: 10%; padding:2%">Rafael ha sido considerado históricamente, junto con Leonardo y Miguel Ángel, como uno de los pilares del Cinquecento italiano, además de uno de los grandes genios de la pintura de todos los tiempos. Deudor en sus inicios de influencias quattrocentistas, se erigirá en representante perfecto del arte clasicista antes de que éste entre en su etapa de "decadencia" (y Rafael con él en sus últimos años, arrastrado por el potente manierismo miguelangelesco).<br><br>
        Hay que señalar también que en su haber contará con una carrera como arquitecto, no excesivamente conocida ni determinante para la historia del arte (si se exceptúa el encargo de continuación de las obras de la basílica de San Pedro, de las que se hará brevemente cargo a la muerte de su amigo Bramante).<br><br>
        Rafael Sanzio nace en Urbino en 1483, hijo de un pintor no demasiado excelente, Giovanni de Santi, pero que tuvo el buen criterio de encaminar los pasos de su vástago hacia el mundo del arte. Será con el padre con quien inicie Rafael su aprendizaje, ayudándolo en el desarrollo de algunas de las obras que tenía encargadas en Urbino, pasando posteriormente a conocer los rudimentos de la pintura de manos de Timoteo Viti antes de ser enviado a Perugia a formarse en compañía de Pietro Vannucci, más conocido como El Perugino.<br><br>
        Rafael muere en 1520, cuando estaba pintando la que será su última e inconclusa obra, la Transfiguración, dejando tras de sí un buen número de seguidores que tratarán de imitar su estilo en los años venideros.</p>
        <h3 style="color: #9C0901; padding-left:25px">Obras</h3><hr><br>
    <div class="row row-cols-1 row-cols-md-2">
  <div class="col mb-4">
    <div class="card">
      <img src="/images/miguel.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">San Miguel</h5>
        <p class="card-text">1518</p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="/images/atenas.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">La Escuela de Atenas</h5>
        <p class="card-text">1512</p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="/images/figura.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">San Jorge y el Dragón</h5>
        <p class="card-text">1516 - 1520</p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="/images/galatea.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">La Transfiguracion</h5>
        <p class="card-text">1511</p>
      </div>
    </div>
  </div>
</div>
@stop
@section('footer')
    Derechos reservados @parent
@stop