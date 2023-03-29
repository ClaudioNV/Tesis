
<?php 
session_start();
$user= $_SESSION["username"];
//$tipo_usuario = $_GET['id'];

// if ($user== " "){
// 	$redirec="http://korpovibro.cl/perfileinstructor.php";

// }else  ($tipo_usuario==2){
// 	$redirec="http://korpovibro.cl/perfilealumno.php";


// }

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
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <!-- NO olvidar insertar el ICONO del logo -->    
    <title>KorpoVibro</title>
    <!-- archivo CSS compilado y comprimido -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link href="css/estilo.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    
    <style>
      
      #map {
        width: 100%;
		height: 400px; 
      }
    </style>

    <link rel="stylesheet" type="text/css" href="css/foundation.min.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!--js foundation para los estilos del formulario-->
    <script type="text/javascript" src="js/foundation.js"></script>
    <script type="text/javascript" src="js/foundation.forms.js"></script>
    <!--libreria gmaps-->
    <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
    <!--llamamos al script que crea el mapa-->
    <script src="js/gmaps.js" type="text/javascript"></script>
  
  </head>
  <body>
    
    <div class="container">
        <img class="logo" src="img/logotipo.png" alt="logotipo.png" align=left class="img-responsive">
            <header class="page-header">
              
              <ul class="nav nav-pills pull-right">
                <li><a href="http://korpovibro.cl/home">Home</a></li>
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
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Bienvenido <?php echo $user ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo $redirec?>"><i class="icon-cog"></i> Mi Perfil </a></li>
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

</br>
</br>
<div class="row large-9" id="wrap">
    <ul class="breadcrumbs large-10">
      <li><a href="add_store.php">Añadir un nuevo comercio</a></li>
    </ul>
    <h2 class="subheader">Localizador de tiendas con php y mysql.</h2>
    <form class="custom">
 
      <!--input para escribir una dirección-->
      <div class="large-2 columns">
        <label for="seleccionaRadio">Dirección: </label>
        <input type="text" id="addressInput"/>
      </div>
 
      <div class="large-3 columns">
        <label for="tipo_comercio">Tipo de comercio: </label>
        <input type="text" id="tipo_comercio"/>
      </div>
 
      <!--select con las posibilidades de radio a escoger-->
      <div class="large-7 columns">
        <label for="seleccionaRadio">Radio(kms):</label>
        <select id="seleccionaRadio" class="large">
          <option value="10" selected>10km</option>
          <option value="25">25km</option>
          <option value="50">50km</option>
          <option value="75">75km</option>
          <option value="100">100km</option>
          <option value="200">200km</option>
          <option value="300">300km</option>
          <option value="400">400km</option>
          <option value="500">500km</option>
          <option value="1000">1000km</option>
        </select>
      </div>
 
      <!--cuando hagamos click llamaremos a la función buscaLocalizacion() 
      para que la dirección que escriba el usuario se convierta en lat y lng
      automáticamente y googlemaps sepa encontrar el punto a buscar-->
      <a class="large-12 button" href="#" onclick="buscaLocalizacion()" />Buscar</a>
 
    </form>
 
    <!--cargamos el mapa y el sidebar-->
    <div id="map" style="width: 700px; height: 350px; float:right"></div>
    <div class="large-3 columns">
      <!--sidebar donde mostramos los resultados-->
      <div class="panel callout radius" id="sidebar">
        <p class="head">Sidebar</p>
        <div></div>
      </div>
    </div>
  </div>
</br>
</br>        
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
    <!--<script src="js/map.js"></script>-->
    <!-- <script src="js/localizacion.js"></script> -->
  </body>
</html>
