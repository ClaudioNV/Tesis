
<?php 
session_start();

include_once('/modelo/bd.php');
$_SESSION["nombre"];
$_SESSION["apellido"];
$_SESSION["foto"];
if(isset($_SESSION["username"])){
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
    <meta charset="utf-8">

    <link href="css/estilo.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link href="css/perfile.css" rel="stylesheet">
  
    <style>
      
      #map {
        width: 100%;
		    height: 700px; 
      }
    </style>
  </head>
  <body>
    
  <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">                 
              <div class="col-md-3 col-sm-4 col-xs-6">   
              <a href="http://korpovibro.cl/home.php"> <img class="logo img-responsive" src="img/logotipo.png"/></a>
              </div>
            <div class="navbar-header">
                <button button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>                
            </div>
            <div id="navbar" class="collapse navbar-collapse navbar-responsive-collapse">                                        
                  <div class="col-md-14 col-sm-15 col-xs-17">
                    <class="titulo">   
                    <h1 style="margin-top: 3%" align=right><font color=orange size=6 face="Arial Black">Apasiónate y disfruta </font></h1>                   
                  </div>    
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://korpovibro.cl/home.php">Home</a></li>                  
                    <li><a href="http://korpovibro.cl/buscatuclase.php">Busca tu clase</a></li>
                    <li><a href="http://korpovibro.cl/videos.php">Videos</a></li>
                    <li><a href="http://korpovibro.cl/Instructores.php">Instructores</a></li>
                    <li><a href="http://korpovibro.cl/pagoclase.php">Suscripción</a></li>
                    <li><a href="http://korpovibro.cl/Contactanos.php">contactanos</a></li>               
                </ul>
           <!-- <button align="right" class="btn">Registrarse </button> --> 
            </div> 
            <div class="pull-right" align="right">
              <ul class="nav pull-right">
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Bienvenido <?php echo $_SESSION["username"]; ?> <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="http://korpovibro.cl/perfileinstructor.php"><i class="icon-cog"></i> Mi Perfil </a></li>
                    <li class="divider"></li>
                    <li><a href="/logout"><i class="icon-off"></i> Cerrar Sesión</a></li>
                  </ul>
                </li>
              </ul>
            </div>

        </div>         
  </div>

  </br></br></br></br></br></br></br></br></br></br></br></br></br>
  <section>

    <div class="container" style="margin-top: 30px;">
      <div class="profile-head">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="text-center">
            <div class="col-md-5 col-sm-5 col-xs-12">
              <img src="img/slider/cynthia.jpeg" class="avatar img-circle img-thumbnail" alt="avatar" id="foto">
              </br>
            
            </div><!--col-md-4 col-sm-4 col-xs-12 close-->
            <div class="col-md-6 col-sm-6 col-xs-12">
              <h5><?php echo $_SESSION["nombre"]; ?></h5>
              
            </div><!--col-md-8 col-sm-8 col-xs-12 close-->
            

            
          </div>

        </div>

      </div><!--profile-head close-->
    </div><!--container close-->

    </br>
    <div id="sticky" class="container">
     
        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-menu " role="tablist">
          <!--<li class="active">
            <a href="#profile" role="tab" data-toggle="tab">
              <i class="fa fa-male"></i> Profile
            </a>
          </li> -->
          <li><a href="http://korpovibro.cl/perfileinstructor.php">
            Perfil
            </a>
          </li>
          <li><a href="http://korpovibro.cl/Misclases.php" >
            Mis Clases
            </a>
          </li>
          <li><a href="http://korpovibro.cl/Ingresarnuevaclase.php">
            Ingresar Nueva Clase
            </a>
          </li>
          <li><a href="#" >
            Enviar Informacion
            </a>
          </li>
          </li>
        </ul><!--nav-tabs close-->

      </br>
      <div class="tab-content">        
        <div class="tab-pane fade active in" id="change">
          <div class="container fom-main">
            <div class="row">
              <div class="col-sm-12">
                <h2 class="register"><font face="Arial Black">Actualice su perfil para mayor seguridad</h2>
              </div><!--col-sm-12 close-->

            </div><!--row close-->
              <br/>
            <div class="row">

              <form class="form-horizontal main_form text-left" action=" " method=""  id="contact_form">
                <fieldset>

                    <div class="form-group col-md-12 col-sm-12">
                      <label class="col-md-10 col-sm-10 control-label">Nombre</label>  
                      <div class="col-md-12 col-sm-12 inputGroupContainer">
                        <div class="input-group">
                          <input id="nombre" name="nombre" placeholder="Nombre" class="form-control"  type="text">
                        </div>
                      </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group col-md-12 col-sm-12">
                      <label class="col-md-10 col-sm-10 control-label" >Apellido</label> 
                      <div class="col-md-12 col-sm-12 inputGroupContainer">
                        <div class="input-group">
                          <input id="apellido" name="apellido" placeholder="Apellido" class="form-control"  type="text">
                        </div>
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group col-md-12 col-sm-12">
                      <label class="col-md-10 col-sm-10 control-label">E-Mail</label>  
                      <div class="col-md-12 col-sm-12 inputGroupContainer">
                        <div class="input-group">
                          <input id="correo" name="correo" placeholder="E-Mail" class="form-control"  type="text">
                        </div>
                      </div>
                    </div>
                    <!-- Text input-->
      
                  <div class="form-group col-md-12 col-sm-12">
                    <label class="col-md-10 col-sm-10 control-label">Telefono</label>  
                    <div class="col-md-12 col-sm-12 inputGroupContainer">
                      <div class="input-group">
                        <input id="telefono" name="telefono" placeholder="(+56)9-xxxxxxxx" class="form-control" type="text">
                      </div>
                    </div>
                  </div>
                  <!-- Text input-->
        
                  <div class="form-group col-md-12 col-sm-12">
                    <label class="col-md-10 col-sm-10 control-label">Dirección</label>
                    <div class="col-md-12 col-sm-12 inputGroupContainer">
                      <div class="input-group">
                        <input id="direccion" class="form-control" name="direccion" placeholder="Pasaje/Calle, Número, Comuna" type="text">
                      </div>
                    </div>
                  </div>

                  <div class="form-group col-md-12 col-sm-12">
                    <label class="col-md-10 col-sm-10 control-label">Cambio de contraseña</label>  
                    <div class="col-md-12 col-sm-12 inputGroupContainer">
                      <div class="input-group">
                        <input  id="password" name="password" placeholder="Cambio contraseña" class="form-control"  type="password">
                      </div>
                    </div>
                  </div>

                  <div class="form-group col-md-12 col-sm-12">
                    <label class="col-md-10 col-sm-10 control-label">Confirme contraseña</label>  
                    <div class="col-md-12 col-sm-12inputGroupContainer">
                      <div class="input-group">
                        <input  id="password2" name="password2" placeholder="Confiram Password" class="form-control"  type="password">
                      </div>
                    </div>
                  </div>

                  <!-- Select Genero -->
                  <div class="form-group col-md-12 col-sm-12">
                    <label class="col-md-10 col-sm-10 control-label">Genero</label>
                    <div class="col-md-7 col-sm-7">
                      <select id="sexo" name="sexo" class="custom-select mb-2 mr-sm-2 mb-sm-0">
                        <option value="seleccione">Sexo</option>
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                        <option value="no informar">No informar</option>
                      </select>
                      
                    </div>
                  </div>
                  <!-- upload profile picture -->
                  <div class="col-md-12 col-sm-12 text-left">
                    <div class="uplod-picture">
                      <span class="btn btn-default uplod-file">
                          ingresar foto <input type="file" name="foto" id="foto" />
                      </span>

                    </div><!--uplod-picture close-->
                  </div><!--col-md-12 close-->
                  
                  <!-- Button -->
                  <div class="form-group col-md-10 col-sm-10">
                    <div class="col-md-6 col-sm-6">
                      <button id="actualizar" value="actualizar" type="submit" class="btn btn-warning submit-button" >Guardar</button>
                      <button type="submit" class="btn btn-warning submit-button" >Cancelar</button>

                    </div>
                  </div>
                </fieldset>   
              </form>               
            </div><!--row close-->
          
          </div><!--container fom-main close -->
        </div><!--tab-pane-->
    </div>
  </section>
</br>
</br>
<div id="footer">
          <div class="row">
                  <!-- footer-about -->
                  <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12 ">
                      <div class="footer-widget ">
                          <div class="footer-title">Empresa</div>
                          <ul class="list-unstyled">
                              <li><a href="#">Acerca de</a></li>
                              <li><a href="#">Soporte</a></li>
                              <li><a href="#">Legal y Privacidad</a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
                    <div class="footer-widget ">
                        <div class="footer-title">Enlaces</div>
                        <ul class="list-unstyled">
                            <li><a href="#">Noticias</a></li>
                            <li><a href="#">Contáctenos</a></li>
                            <li><a href="#">Preguntas más frecuentes</a></li>
                        </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
                    <div class="footer-widget ">
                        <div class="footer-title">Redes sociales</div>
                        </br>
                        <div class="col-sm-2">
                          <img width="30" height="30" href="http://facebook.com/" src="img/logos/facebook.png" />
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
    <!-- <script src="js/map.js"></script> -->
    <script src="js/instructor.js"></script>
  
    <!-- <script src="js/localizacion.js"></script> -->
  </body>
</html>