
<?php 
session_start();

include_once('/modelo/bd.php');

if(isset($_SESSION['username'])){
  echo "";
    //header("location:Login.php");
}else{
  echo '<script> window.location="Login.php";</script>';
}
?>
<!DOCTYPE html>
<html>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="js/jquery-3.3.1.min.map"></script>
    <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
  
  <head>
    <!-- NO olvidar insertar el ICONO del logo -->    
    <title>Mi Perfil</title>
    <!-- archivo CSS compilado y comprimido -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Theme -->

    <link href="css/estilo.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link href="css/perfile.css" rel="stylesheet">
  
  </head>
  <body>
    
    <div class="container">
        <img class="logo" src="img/logotipo.png" alt="logotipo.png" align=left class="img-responsive">
            <header class="page-header">
              
              <ul class="nav nav-pills pull-right">
                <li class="active"><a href="http://korpovibro.cl/home">Home</a></li>
                <li><a href="http://korpovibro.cl/buscatuclase.php">Busca tu clase</a></li>
                <li><a href="http://korpovibro.cl/videos.php">Videos</a></li>
                <li><a href="http://korpovibro.cl/Instructores.php">Instructores</a></li>
                <li><a href="http://korpovibro.cl/Grupos.php">Grupos</a></li>
                <li><a href="http://korpovibro.cl/pagoclase.php">Pago de clases</a></li>
                <li><a href="http://korpovibro.cl/Contactanos.php">contactanos</a></li>
                
              </ul>

              <class="titulo">         
              </br>   
          
              <b><h1 style="margin-top: 3%" align=right><font color=orange   size=12 face="Arial Black">Apasiónate y disfruta </font></h1></b>

              <div class="pull-right" align="right">
                <ul class="nav pull-right">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Bienvenido <?php echo $_SESSION["username"]; ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="http://korpovibro.cl/perfileinstructor.php"><i class="icon-cog"></i> Mi Perfil </a></li>
                            <li><a href="#"><i class="icon-envelopecog"></i> Preferencias</a></li>
                            <li class="divider"></li>
                            <li><a href="/logout"><i class="icon-off"></i> Cerrar Sesión</a></li>
                        </ul>
                    </li>
                </ul>
              </div>
              </br>
              </br>
            </header>
    </div>
  <section>

    <div class="container" style="margin-top: 10px;">
      <div class="profile-head">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <img src="#" class="img-responsive" />
          <h6>NNN</h6>
        </div><!--col-md-4 col-sm-4 col-xs-12 close-->


        <div class="col-md-5 col-sm-5 col-xs-12">
          <h5>NNNN</h5>
          <ul>
            <li><span class="glyphicon glyphicon-briefcase"></span> NNN</li>
            <li><span class="glyphicon glyphicon-map-marker"></span> NNN</li>
            
            
            <li><span class="glyphicon glyphicon-envelope"></span><a href="#" title="mail">123@gmail.com</a></li>

          </ul>


        </div><!--col-md-8 col-sm-8 col-xs-12 close-->




      </div><!--profile-head close-->
    </div><!--container close-->


    <div id="sticky" class="container">
    
      <!-- Nav tabs -->
      <ul class="nav nav-tabs nav-menu" role="tablist">
        <!--<li class="active">
          <a href="#profile" role="tab" data-toggle="tab">
            <i class="fa fa-male"></i> Profile
          </a>
        </li> -->
        <li><a href="#change" role="tab" data-toggle="tab">
          <i class="fa fa-key"></i> Perfil
          </a>
        </li>
        <li><a href="http://korpovibro.cl/Misclases.php" >
          <i class="fa fa-key"></i> Mis Clases
          </a>
        </li>
        <li><a href="http://korpovibro.cl/Ingresarnuevaclase.php" >
          <i class="fa fa-key"></i> Ingresar Nueva Clase
          </a>
        </li>
        <li><a href="#" role="tab" data-toggle="tab">
          <i class="fa fa-key"></i> Enviar Informacion
          </a>
        </li>
        <li><a href="#" role="tab" data-toggle="tab">
          <i class="fa fa-key"></i> Eventos
          </a>
        </li>
        <li><a href="#" role="tab" data-toggle="tab">
          <i class="fa fa-key"></i> Pagos
          </a>
        </li>
      </ul><!--nav-tabs close-->


 <div class="container2">
        <div class="cuerpocompleto col-sm-20" >
          <div id="cuerpo" class="col-sm-9" align="left">
            <div onload="initMap()">  
               <input align="left" id="address" type="textbox" value="Sydney, NSW">
                <input align="left"type="button" value="Encode" onclick="codeAddress()">
            
            </div>
              <h3 style="color:orange;"><font face="Arial Black"> Mis clases</h3>
              <div id="map" class="col-sm-12" >
               
                

                 <!-- <img src="img/mapa.png" alt="mapa" width="600" height="400" class="img-responsive"/> -->
                               

                </br>
                
              </div> 
              
            <!-- <div class="col-sm-12" align="left">
              <h3>imagen</h3>
              <img src="img/zumba7.jpg" alt="zumba1"  width="600" height="600" class="img-responsive">
              <div class="col-sm-12"> -->
             
              
          </div>
         </div>
</div>
</div>
</br>
</br>
        <div id="footer">
        
          <div class="col-sm-offset-2 col-sm-10" align="center">
            <div id="RSS" class="" style="background-color:black">
        
          
              <div class="col-sm-3" align="center">
                <img width="30" height="30" href="http://facebook.com/" src="img/logos/facebook.png" class="img-responsive"/>
              </div>
              <div class="col-sm-2">
                <img width="30" height="30" src="img/logos/twitter.png" />
              </div>
              <div class="col-sm-2">
                <img width="30" height="30" src="img/logos/instagram.png" />
              </div>
              <div class="col-sm-2">
                <img width="30    " height="30" src="img/logos/google.png" />
              </div>
            </div>
               
          </div>
          
          <div class="clearfix"></div>
         <div align="center">
            <h2>KorpoVibro</h2>
          </div>
          <div align="center">
            <p >&copy; 2018 KorpoVibro</p>
            
          </div>
        </div>  

    <!--Insertamos jQuery dependencia de Bootstrap-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!--Insertamos el archivo JS compilado y comprimido -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!--Api de google -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBw-k1pw29rHrRRK3Mhlnu-UodZG_uyksA&callback=initMap"></script>
    <script src="js/map.js"></script>
    <!-- <script src="js/localizacion.js"></script> -->
  </body>
</html>
