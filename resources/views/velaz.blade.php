@extends('layouts.master')
@section('title', 'Velazquez')
@section('navbar')
@stop

@section('contenido')
    <br><h2><center>V E L A Z Q U E Z</center></h2><br><br>
    <h3 style="color: #9C0901; padding-left:25px">Biografia</h3><hr><br>
    <img src="/images/velazquez.jpg" style="float:right; width:600px; height:450px; padding:30px">
    <p style="text-align: justify; size: 10%; padding:2%">Diego Velázquez fue el pintor barroco español más importante del grupo porque trató con igual excelencia todos los géneros: religiosos, mitológicos, retratos, históricos, paisajes, bodegones, etc. Además de ser, indiscutiblemente, uno de los mejores artistas de todos los tiempos. Velázquez nace en 1599 en Sevilla y muere en Madrid en 1660, realizando sus obras en la primera mitad del siglo XVII. En España todavía continúa reinando la Casa de los Austrias. De hecho, Velázquez será pintor de cámara de Felipe IV. Se trata de una época en la que el estilo artístico que reina es el Barroco, que ha llegado a España desde Italia.
            <br><br>Las características más peculiares y representativas de la pintura de Velázquez son:
            <ul>
                <li>Empleo de la perspectiva aérea.</li>
                <li>Profundidad.</li>
                <li>Pintura "alla prima", es decir, sin realización de bocetos. Por ello, las correcciones las hacía sobre la marcha y se nota en los numerosos "arrepentimientos" en sus cuadros.</li>
            </ul><br>
            <i style="text-align: justify; size: 10%; padding-left:2%">La obra de Diego Velázquez es divisible en dos etapas: la sevillana y la madrileña.</i>
            <br><br><div class="fuerte" style="text-align: justify; size: 10%; padding-left:2%">Etapa Sevillana (1599-1623)</div>
            <p style="text-align: justify; size: 10%; padding:2%">En esta fase, Velázquez tuvo como maestro a Pacheco. Con él aprendió a ser un gran dibujante y a organizar las composiciones. Las primeras obras que realizó pertenecen al tenebrismo (tendencia italiana que procede de Caravaggio). Las características de esta corriente son:</p>
            <ul>
                <li>Realismo.</li>
                <li>Contrastes de luz.</li>
                <li>Composición diagonal.</li>
            </ul>
            <p style="text-align: justify; size: 10%; padding-left:2%">Los temas que Velázquez pintó en esta primera etapa son religiosos y también populares, extraídos de la vida cotidiana.</p>
            <br><div class="fuerte" style="text-align: justify; size: 10%; padding-left:2%;">Etapa madrilena (1623- 1660)</div><br>
            <p style="text-align: justify; size: 10%; padding-left:2%"> Se trata de la etapa más amplia de la vida y obra de Velázquez que a su vez tiene distintas fases. Inicialmente, desde 1623 a 1629 se emplea como pintor de cámara de Felipe IV y a medida que pasa el tiempo consigue mejores trabajos. En este periodo continúa su formación como pintor, tomando como referencia las galerías pictóricas de la Corte madrileña. Además, en esta etapa conoce al genio flamenco Rubens.
     </h4><br></p>
     <h3 style="color: #9C0901; padding-left:25px">Obras</h3><hr><br>
    <div class="row row-cols-1 row-cols-md-2">
  <div class="col mb-4">
    <div class="card">
      <img src="/images/fuente.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">La Fuente de los Tritones en el Jardín de la Isla de Aranjuez</h5>
        <p class="card-text">1657</p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="/images/meninas.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Las Meninas</h5>
        <p class="card-text">1656</p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="/images/vulcano.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">La Fragua de Vulcano</h5>
        <p class="card-text">1629 - 1630</p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="/images/aracne.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">La Fabula de Aracne</h5>
        <p class="card-text">1657</p>
      </div>
    </div>
  </div>
</div>
@stop
@section('footer')
    Derechos reservados @parent
@stop