
<!--  -->
<?php

$destino  = "contactolpz@sts.com.bo";
$nombre   = $_POST["nombre"];
$correo   = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje  = $_POST["mensaje"];

$contenido= "Nombres: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " .$telefono . "\nMensaje: " . $mensaje;

mail($destino, "Formulario Contacto Pagina Web STS ", $contenido);

header("Location:contactos.html");



?>

<!DOCTYPE html>
<html>
<head>
  <link  rel="icon"   href="img/logo_sts.png" type="image/png" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta charset="UTF-8">

  <title>STS Bolivia Ltda.</title>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">

  <link rel="stylesheet" href="css/estilos_contactos.css">
  <link rel="stylesheet" href="sss/sss.css" type="text/css" media="all">

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="css/landing-page.min.css" rel="stylesheet">
</head>

<body>

<!--========= Links de navegación principal horizontal cabercera azul  ====================-->
<header class="full-reset header">

            <nav class="full-reset navigation">
              <ul class="full-reset list-unstyled">
                <li><a href="index.html"><em class="fa fa-home  "></em>Inicio</a></li>
                <li><a href="institucional.html">Institucional</a></li>
                <li><a href="servicios.html">Servicios</a></li>
                <li><a href="contactos.html">Contactos</a></li>
                <li><a href="#" class="btm-mega-menu"> Más &nbsp;<i class="fa fa-caret-down"></i></a></li>
              </ul>
            </nav>

<!--================== Mega menu opcion de (Mas) sobrepuesto ==============================-->
<div class="full-reset mega-menu">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-4">
        <span class="full-reset titles">Recursos</span>
        <ul class="list-unstyled full-reset">
          <li><a href="#!" class="open-link-newTab"><i class="fa fa-search"></i>&nbsp; </a></li>
          <li><a href="#!" class="open-link-newTab"><i class="fa fa-graduation-cap"></i>&nbsp; Plataformas</a></li>
        </ul>
      </div>

      <div class="col-xs-12 col-sm-4">
        <span class="full-reset titles">Enlases</span>
        <ul class="list-unstyled full-reset">
          <li><a href="#!" class="open-link-newTab"><i class="fa fa-university"></i>&nbsp; Proyectos</a></li>
          <li><a href="#!"><i class="fa fa-paw"></i>&nbsp; Reecorrido</a></li>
          <li><a href="#!"><i class="fa fa-globe"></i>&nbsp; A.T.T</a></li>
          <li><a href="#!" class="open-link-newTab"><i class="fa fa-flask"></i>&nbsp; Convenios </a></li>
          <li><a href="#!" class="open-link-newTab"><i class="fa fa-gavel"></i>&nbsp; Contribucion</a></li>
        </ul>
      </div>

      <div class="col-xs-12 col-sm-4">
        <span class="full-reset titles">Archivos</span>
        <ul class="list-unstyled full-reset">
          <li><a href="link/galeria.html">Galeia</a></li>
          <li><a href="#!"><i class="fa fa-star-o"></i>&nbsp; Institucion</a></li>
          <li><a href="#!" class="open-link-newTab"><i class="fa fa-file-text-o"></i>&nbsp; Infra estructura</a></li>
          <li><a href="#!"><i class="fa fa-download"></i>&nbsp; ArchivosS</a></li>
        </ul>
      </div>
    </div>
  </div>
  <i class="fa fa-times-circle btm-mega-menu close-mega-menu fa-2x"></i><!--btn de cierre de mega menu Mas (X)-->
</div>

<!--====================== Boton de cierre  megamenu mobil ===============================-->
<a href="#" class=" hidden-sm hidden-md hidden-lg pull-left button-menu-mobile show-close-menu-m"><i class="fa fa-align-justify"></i></a>
</header>

<!--================ Menu secundario fijo sector lado izquierdo =========================-->
<nav class="hidden-xs scroll-navigation-ins  " class="hidden-xs hidden-sm"> 
  <figure class="full-reset ">  
    <div class="logoimg">
      <a href="index.html"> 
                        <img src="img/logosts.png " width="180px">  
                  </a>
    </div>
  </figure>
  <ul class="list-unstyled full-reset ">
    <li data-href="#foto-inst"><h4>CONTACTOS</h4></li>
    <li data-href="#sec_tel">Hubicación </li>
    <li data-href="#sec_corp">Envienos un Formulario</li>

  </ul>
</nav>

<!--======================= Contenedor Principal ==============================-->

<!--================ contenido contactos ==========================================-->
<section class="container right"  >
  <div class="row justify-content-around ">

    <section class="col-xs-12 col-sm-8 info-section-ins  col-md-11 order-12">
      <div class="container-fluid">
<!--================ contenido Formulario ==========================================-->
        <form action="enviar.php" method="post">

          <h2>Contacte con nosotros</h2>
          <p class="intro">Agradecemos el interés por contactarse con nosotros, si desea recibir mayor información sobre alguno de nuestros servicios o productos, por favor rellene el siguiente formulario y enseguida estaremos respondiendo.
          </p>

          <hr>

          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

              <input type="text" name="nombre"   placeholder="Nombre"                  required>
              <input type="text" name="correo"   placeholder="Correo"                  required>
              <input type="text" name="telefono" placeholder="Teléfono"                required>
              <input type="text" name="empresa"  placeholder="Empresa Opcional">
              <textarea          name="mensaje"  placeholder="Escriba aquí su mensaje" required>

              </textarea>
              <p></p>
              
              <input type="submit" value="Enviar" id="boton">

            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <br>    
              <p class="info"><strong>¿Deseas un servicio?</strong> Ponte en contacto con nosotros a través de este formulario.
              </p>
              <p class="info">Responsabilidad en cada uno de sus proyectos <strong> </p>
              <img src="imagenes/img_contacto2.jpg" class="img-rounded img-responsive" alt="Placeholder image"> 
              </div>

            </div>

          </form>

          <br>
          <br>


        </div> <!-- /.container-fluid --> 
      </section><!-- col-md-11 order-12 --->
  </div><!-- /.row justify-content-around-->  
</section><!-- /container right- -->

<!--================= contenido footer =========================================-->

    <div class="site-footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        

        
      </div> <!-- /.col-md-12 -->
    </div> <!-- /.row -->
  </div> <!-- /.container-fluid -->
  <div class="bottom-footer">
    <div class="row justify-content-around ">
      <section class="col-xs-12 col-sm-8 info-section-ins  col-md-11 order-12">
        <div class="container-fluid">

          <div class="row">
            <div class="col-md-3">

            </div>

            <div class="col-xs-12 col-sm-4 col-md-3">
              <h4 class="titles text-center">Visitenos</h4>
              <p class="text-center pfooter">
                Oficina Central, La Paz, Av. Mariscal Santa Cruz, Edificio Hansa, Piso 4. 
              </p>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3">
              <h4 class="titles text-center">Contactenos</h4>
              <p class="text-center pfooter">Teléfono: 2406667 <br>Correo Electrónico: contactolpz@sts.com.bo </p>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3">
              <h4 class="titles subtitles-footer ">Siguenos:</h4>
              <ul class="list-unstyled links-footer ">        
                <li class="list-inline-item mr-3">
                  <a href="https://es-la.facebook.com/STSbo/">
                    <i class="fab fa-facebook fa-2x fa-fw"></i>
                  </a>
                </li>
                <li class="list-inline-item mr-3">
                  <a href="https://www.youtube.com/channel/UCHlFLkWMtfK4RRkSsXwtCGA">
                    <i class="fab fa-youtube fa-2x fa-fw"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-instagram fa-2x fa-fw"></i>
                  </a>
                </li>
                <!-- Contador de visitas -->
                <!-- Fin Contador de visitas -->
              </ul>
            </div>
            <div class="col-md-3">

            </div>

            <div class="col-xs-9 col-md-9">
              <div class="full-reset footer-copyright" pfooter><i class="fa fa-copyright "></i> 2020 <a href="#">STS Bolivia Ltda.</a> </div>
            </div>


          </div>
        </div> <!-- /.container-fluid -->
        
        
      </section>
    </div>
  </div> <!-- /.bottom-footer -->
</div> <!--CIERRE-footer -->

<!-- ===================================================JavaScripts ==========================-->

<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/jquery.singlePageNav.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/main.js"></script> 
<script src="js/custom.js"></script>
<script src="js/jiii.js"></script>

</body>
</html>