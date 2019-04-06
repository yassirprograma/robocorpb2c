<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

<?php
include_once(
"plantilla/carga.php"

  )


 ?>
 <link rel="stylesheet" href="/inicio/inicio.css">
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
      interval: 8000,
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

<div id="myCarouselCustom" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarouselCustom" data-slide-to="0" > </li>
    <li data-target="#myCarouselCustom" data-slide-to="1" > </li>
    <li data-target="#myCarouselCustom" data-slide-to="2" > </li>



  </ol>

  <div class="carousel-inner">

    <div class="item active">
      <img src="img/principal.png" alt=" ">
      <div class=carousel-caption>
        <h3></h3>
        <p></p>
      </div>
    </div>

    <div class="item">
      <img src="img/carousel2.png" alt="">
      <div class="carousel-caption">
        <h3> </h3>
        <p>  </p>
      </div>
    </div>

    <div class="item">
      <img src="img/carousel3.png" alt="">
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

  <img src="img/carousel4.png" style=" width:50%;">
  <img src="img/carousel5.png" style=" width:50%;">


















</div>






  <div class="pie">
    <p>aqui es el fondo sossllsososssmsdosd</p>
    <br>


</div>

  </body>

</html>
