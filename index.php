<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

<?php
include_once(
"plantilla/carga.php"

  )


 ?>
 <link rel="stylesheet" href="/inicio/css/inicio.css">
    <title>Robocorp</title>
  </head>








  <body >
    <div id="particles-js" >

  </div>
    <!--    CARGA LA ANIMACIÓN DE FONDO-->
    <script src="/js/jquery-3.3.1.min.js"></script>

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="/js/particles.js"></script>
    <script src="/js/particulas.js"></script>

    <script type="text/javascript">
    $('#myCarouselCustom').carousel();
    $("#prevBtn").click(function(){
      $("myCarouselCustom").carousel("prev");
    });
    $("nextBtn").click(function(){
      $("myCarouselCustom").carousel("next");
    });
    </script>


    <script type="text/javascript">
    $('.carousel').carousel({
      interval: 2000,
      pause:true,
      wrap:false
    });
    </script>



  <?php
  include_once(

    "plantilla/menu.php" //incluye el menú que debe aparecer en todas las secciones

  );
   ?>


<div class="alpha">

<div class="contenido">



  <div id="my" class="carousel slide" data-ride="carousel">


    <div class="carousel-inner img">

      <div class="item active">
        <img src="inicio/img/slider1.png" class="imagecarousel">
        <img src="inicio/img/25.png" style="position:absolute; top:9%; height:80%; left:2%;"   class="animated  tada">
        <div class=carousel-caption>
          <h3></h3>
          <p></p>
        </div>
      </div>

      <div class="item">
        <img src="inicio/img/azul.png" class="imagecarousel">

        <img class="animated  rollIn" src=" inicio/img/logosbonitos/pololu.png" style="position:absolute; top:5%; left:3%; width:15%;">
        <img class="animated  jackInTheBox" src=" inicio/img/logosbonitos/arduino.png" style="position:absolute; top:5%; left:23%; width:15%;">
        <img class="animated  rollIn"  src=" inicio/img/logosbonitos/raspberry-pi.png" style="position:absolute; top:5%; left:43%; width:15%;">
        <img class="animated jackInTheBox" src=" inicio/img/logosbonitos/adafruit.png" style="position:absolute; top:5%; left:63%; width:15%;">
        <img class="animated  rollIn" src=" inicio/img/logosbonitos/monkits.png" style="position:absolute; top:5%; left:83%; width:15%;">
        <div class="carousel-caption">
          <h3> </h3>
          <p>  </p>
        </div>
      </div>

      <div class="item">
        <img src="inicio/img/azul.png" class="imagecarousel">

        <img class="animated  rollIn" src=" inicio/img/logosbonitos/herramientas-1.png" style="position:absolute; top:5%; left:3%; width:15%;">
        <img class="animated  jackInTheBox" src=" inicio/img/logosbonitos/partes-y-componentes.png" style="position:absolute; top:5%; left:23%; width:15%;">
        <img class="animated  rollIn"  src=" inicio/img/logosbonitos/motores.png" style="position:absolute; top:5%; left:43%; width:15%;">
        <img class="animated jackInTheBox" src=" inicio/img/logosbonitos/energia.png" style="position:absolute; top:5%; left:63%; width:15%;">
        <img class="animated  rollIn" src=" inicio/img/logosbonitos/cables-y-conectores.png" style="position:absolute; top:5%; left:83%; width:15%;">
        <div class="carousel-caption">
          <h3> </h3>
          <p>  </p>
        </div>
      </div>

      <div class="item">
        <img src="inicio/img/azul.png" class="imagecarousel">

        <img class="animated  rollIn" src=" inicio/img/logosbonitos/comunicacion.png" style="position:absolute; top:5%; left:3%; width:15%;">
        <img class="animated  jackInTheBox" src=" inicio/img/logosbonitos/kits-y-proyectos-1.png" style="position:absolute; top:5%; left:23%; width:15%;">
        <img class="animated  rollIn"  src=" inicio/img/logosbonitos/pantallas-lcd.png" style="position:absolute; top:5%; left:43%; width:15%;">
        <img class="animated jackInTheBox" src=" inicio/img/logosbonitos/drones.png" style="position:absolute; top:5%; left:63%; width:15%;">
        <a href="/promociones/promociones.php"><img  class="animated  infinite bounceIn" src=" inicio/img/logosbonitos/oferta.png" style="position:absolute; top:5%; left:83%; width:15%;"></a> 
        <div class="carousel-caption">
          <h3> </h3>
          <p>  </p>
        </div>
      </div>

    </div>





  </div>












  <script type="text/javascript">
  $('.carousel').carousel({
    interval: 8000,
    pause:true,
    wrap:false
  });
  </script>


<div id="myCarouselCustom" class="carousel slide" data-ride="carousel" style="top:10px; position:relative;">
  <ol class="carousel-indicators">
    <li data-target="#myCarouselCustom" data-slide-to="0" > </li>
    <li data-target="#myCarouselCustom" data-slide-to="1" > </li>
    <li data-target="#myCarouselCustom" data-slide-to="2" > </li>



  </ol>

  <div class="carousel-inner">

    <div class="item active">
      <img src="inicio/img/principal.png" alt=" ">
      <div class=carousel-caption>
        <h3></h3>
        <p></p>
      </div>
    </div>

    <div class="item">
      <img src="inicio/img/carousel2.png" alt="">
      <div class="carousel-caption">
        <h3> </h3>
        <p>  </p>
      </div>
    </div>

    <div class="item">
      <img src="inicio/img/carousel3.png" alt="">
      <div class="carousel-caption">
        <h3> </h3>
        <p>  </p>
      </div>
    </div>
  </div>




  <a class="left carousel-control" href="#myCarouselCustom" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"> </span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarouselCustom" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"> </span>
    <span class="sr-only">Next</span>
  </a>
</div>











  <img src="inicio/img/carousel4.png" class="bajocar1" >
  <img src="inicio/img/carousel5.png"  class="bajocar2" >



















</div>






  <div class="pie">
    <p>aqui es el fondo sossllsososssmsdosd</p>
    <br>


</div>

  </body>

</html>
