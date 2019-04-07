<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php
    include_once(
      "../plantilla/carga.php"
      )
     ?>
     <link rel="stylesheet" href="/contacto/contacto.css">
    <title>Contacto</title>
  </head>


  <body>
    <div id="particles-js" >

  </div>
    <!--    CARGA LA ANIMACIÓN DE FONDO-->
    <script src="/js/jquery-3.3.1.min.js"></script>

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="/js/particles.js"></script>
    <script src="/js/particulas.js"></script>
    <?php
    include_once(
      "../plantilla/menu.php"
      )
     ?>
    <div class="alpha">

    <div class="contenido">

      <script type="text/javascript">
      $('.carousel').carousel({
        interval: 2000,
        pause:true,
        wrap:false
      });
      </script>


      <div id="my" class="carousel slide" data-ride="carousel">


        <div class="carousel-inner img">

          <div class="item active">
            <img src="/contacto/img/slcontacto1.png" class="imagecarousel animated infinite  zoomIn ">
            <img class="animated  infinite zoomIn" src=" /inicio/img/logosbonitos/pololu.png" style="position:absolute; top:5%; left:67%; width:15%;">
            <img class="animated   infinite zoomIn" src=" /inicio/img/logosbonitos/arduino.png" style="position:absolute; top:5%; left:83%; width:15%;">

            <div class="carousel-caption">
            <div class=carousel-caption>
              <h3></h3>
              <p></p>
            </div>
          </div>
<!--
          <div class="item">
            <img src="/inicio/img/azul.png" class="imagecarousel">

            <img class="animated  rollIn" src=" /inicio/img/logosbonitos/pololu.png" style="position:absolute; top:5%; left:3%; width:15%;">
            <img class="animated  jackInTheBox" src=" /inicio/img/logosbonitos/arduino.png" style="position:absolute; top:5%; left:23%; width:15%;">
            <img class="animated  rollIn"  src=" /inicio/img/logosbonitos/raspberry-pi.png" style="position:absolute; top:5%; left:43%; width:15%;">
            <img class="animated jackInTheBox" src=" /inicio/img/logosbonitos/adafruit.png" style="position:absolute; top:5%; left:63%; width:15%;">
            <img class="animated  rollIn" src=" /inicio/img/logosbonitos/monkits.png" style="position:absolute; top:5%; left:83%; width:15%;">
            <div class="carousel-caption">
              <h3> </h3>
              <p>  </p>
            </div>
          </div>
-->


        </div>





      </div>

      <img src="/contacto/img/comollegartext.png" style="width:100%;">
      <iframe class="mapagrande" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2670.532813660487!2d-98.95649186027485!3d18.811352505927935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce6f1225dd0933%3A0xb35c45863d5019ab!2sCuautla+Morelos%2C+Centro%2C+62740+Cuautla%2C+Mor.!5e0!3m2!1ses-419!2smx!4v1554597215987!5m2!1ses-419!2smx" style=" "  allowfullscreen></iframe>

          <a name="aqui"></a>

    </div>






      <div class="pie">
        <?php include_once("../plantilla/pie.php"); ?>


    </div>
  </body>
</html>
