<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php
    include_once(
      "../plantilla/carga.php"
      )
     ?>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <meta name="description" content="Source code generated using layoutit.com">
     <meta name="author" content="LayoutIt!">
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet">
    <title>CATÁLOGO</title>
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
      <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="row">

          <div class="col-md-12">
            <h3 class="text-center text-success">
              ESCOGE TU ITEM
            </h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
          </div>
          <div class="col-md-8">
       <button type="button" data-filter="1" class="btn btn-primary btn-lg">
              Todos
            </button>
      <button   type="button" data-filter="2" class="btn btn-primary btn-lg">				ARDUINO
            </button>
                  <button type="button" data-filter="3"class="btn btn-primary btn-lg">
              HEX
            </button>
                  <button type="button" data-filter="4" class="btn btn-primary btn-lg">
              LEGO
            </button>

                      <hr/>
                      <div class="filtr-container">

                          <div class="col-md-2 filtr-item" data-category="1, 2"  >
                              <img  src="img/arduino1.jpg" style=" width:100%;" />
                              <a href="#">$1500</a>
                          </div>
                          <div class="col-md-2 filtr-item" data-category="1, 2"   >
                              <img   src="img/arduino2.jpg"  style=" width:100%;"  />
                              <a href="#">$ai dise gratis</a>
                          </div>
                          <div class="col-md-2 filtr-item" data-category="1, 2"   >
                              <img   src="img/arduino3.jpg" style=" width:100%;"  />
                              <a href="#">$2500</a>
                          </div>


                        <div class="col-md-2 filtr-item" data-category="1, 3"   >
                              <img   src="img/hex1.jpg"   style=" width:100%;" />
                              <a href="#">$4500</a>
                          </div>
                          <div class="col-md-2 filtr-item" data-category="1, 3"   >
                              <img src="img/hex2.jpg" style=" width:100%;"  />
                              <a href="#">$500</a>
                          </div>
                          <div class="col-md-2 filtr-item" data-category="1, 3"   >
                                  <img  src="img/hex3.jpg" style=" width:100%;"  />
                                  <a href="#">$3500</a>

                          </div>


                         <div class="col-md-2 filtr-item" data-category="1, 4"  >
                              <img  src="img/lego1.jpeg" style=" width:100%;" />
                              <a href="#">$sinko peso</a>
                          </div>
                        <div class="col-md-2 filtr-item" data-category="1, 4"  >
                              <img src="img/lego2.jpg" style=" width:100%;" />
                              <a  href="#">$gratis</a>
                          </div>
                          <div class="col-md-2 filtr-item" data-category="1, 4"  >
                                <img src="img/lego3.jpg" style=" width:100%;" />
                                <a  href="#">gratis</a>
                            </div>
                      </div>
          </div>
          <div class="col-md-2">
          </div>
        </div>
      </div>
    </div>
  </div>

      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.filterizr.js"></script>
        <script>
        var filterizd = $('.filtr-container').filterizr({});
        </script>

    </div>
  </div>






      <div class="pie">
      <?php include_once("../plantilla/pie.php"); ?>
    </div>
  </body>
</html>
