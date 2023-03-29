
<?php 


session_start();
$user= $_SESSION["username"];
$tipo_usuario = $_SESSION['id_tipo_usuario'];

 if ($tipo_usuario == 1){
 	$redirec="http://korpovibro.cl/perfileinstructor.php";

 }else if  ($tipo_usuario == 2){
 	$redirec="http://korpovibro.cl/perfilealumno.php";


 }
 
include_once('/modelo/bd.php');
$_SESSION["nombre"];
$_SESSION["foto"];
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
    <title>Busca tu clase</title>
    <!-- archivo CSS compilado y comprimido -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Theme -->

    <link href="css/estilo.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link href="css/perfile.css" rel="stylesheet">
  
  </head>
  
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
        <div class="container2">
            <div class="cuerpocompleto col-sm-12">
                <div id="cuerpo" class="col-sm-6"  align="left">
                    <div id="map" class="col-md-4 col-sm-4 col-xs-12" align="center" onload="initMap()">
                        <!-- <input align="left" id="address" type="textbox" value="Sydney, NSW">
                        <input align="left"type="button" value="Encode" onclick="codeAddress()"> -->
                        

                        <!-- <img src="img/mapa.png" alt="mapa" width="600" height="400" class="img-responsive"/> -->
                                    

                        </br>
                        
                    </div>
                </div>
                <div id="cuerpo2" align="right" class="col-sm-6">
            
                 

                        <div class="row">

                            <div class="col-sm-6">
                                <input id="address" class="form-control" type="textbox" value=""  placeholder="Ingrese Direccion">
                            
                            </div>

                            </br></br>

                            <div class="col-sm-3">
                                <select class="select-box">
                                    <option value="0" selected="selected">
                                    Clase
                                    </option>
                                    <option value="1">
                                    Zumba
                                    </option>
                                    <option value="2">
                                        Zumba Step
                                    </option>
                                    <option value="3">
                                    Zumba Kids
                                    </option>
                                    <option value="4">
                                    Stong
                                    </option>
                                    <option value="5">
                                    PoweRumba
                                    </option>
                                    <option value="6">
                                    Zumba in the Circuit
                                    </option>
                                </select>
                           
                                </br>
                           
                                <select class="select-box">
                                    <option value="0" selected="selected">
                                    Dias
                                    </option>
                                    <option value="1">
                                    Lunes
                                    </option>
                                    <option value="2">
                                    Martes 
                                    </option>
                                    <option value="3">
                                    Miercoles
                                    </option>
                                    <option value="4">
                                    Jueves
                                    </option>
                                    <option value="5">
                                    Viernes
                                    </option>
                                    <option value="6">
                                    Sabado
                                    </option>
                                    <option value="7">
                                    Domingo
                                    </option>
                                </select>
                            </div>
                        </div>
                        </br>
                        <div class="col-sm-2">
                            <button type="button" class="btn btn-primary btn-lg btn-block site-btn">
                                <i class="fa fa-search"></i>
                               Filtrar
                            </button>
                        </div>
                     
                </div>
            </div>
        </div>

</br></br> </br>
</br>
        
</br> </br>
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
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBw-k1pw29rHrRRK3Mhlnu-UodZG_uyksA&libraries=places&callback=initMap"></script>
    <script src="js/map.js"></script>
    <!-- <script src="js/localizacion.js"></script> -->
  </body>
</html>

<link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css" rel="stylesheet"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
