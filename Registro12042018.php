
<!DOCTYPE html>
<html>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <head>
  <title>Login KorpoVibro </title>
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!-- archivo CSS compilado y comprimido -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link href="css/estilo.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
  
  </head>
  
  <body>
    
  |<div class="navbar navbar-default navbar-fixed-top">
        <div class="container">                 
              <div class="col-md-3 col-sm-4 col-xs-6">   
              <a href="http://korpovibro.cl/index.php"> <img class="logo img-responsive" src="img/logotipo.png"/></a>
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
                       
                    <h1 style="margin-top: 3%" align=right><font color=orange size=6 face="Arial Black">Apasiónate y disfruta </font></h1>                   
                  </div>    
                <ul class="nav navbar-nav navbar-right">                  
                    <li><a href="http://korpovibro.cl/buscatuclase.php">Busca tu clase</a></li>
                    <li><a href="http://korpovibro.cl/videos.php">Videos</a></li>
                    <li><a href="http://korpovibro.cl/Instructores.php">Instructores</a></li>
                    <li><a href="http://korpovibro.cl/pagoclase.php">Suscripción</a></li>
                    <li><a href="http://korpovibro.cl/Contactanos.php">contactanos</a></li>               
                </ul>
           <!-- <button align="right" class="btn">Registrarse </button> --> 
            </div> 

        </div>
    </div>
    </br></br></br></br></br>
           
    
    <div class="container" style="margin-top: 5%;">
      <!--<div class="omb_login">-->
        <div class="row">
          <div class="col-sm-4">
          </div>
          <div class="col-md-4">
              <!--<h2 class="omb_authTitle"><font face="Arial Black">Registrarse </h2>-->
            
            <h1 class="text-center text-success"><font face="Arial Black" color= "black"> Registrarse </h1>
            <br/>
            <div class="col-sm-12">
              <div class="form-group">
                      <!-- <label for="exampleFormControlSelect1">Tipo de Usuario</label>
                      <select class="form-control" id="tipo_usuario">
                        <option value="1">Instructor</option>
                        <option value="2">Alumno</option>
                        
                      </select> -->
                <ul class="nav nav-pills" >
                  <li class="" style="width:50%">
                          <!-- <a  id="tipo_usuario" value="1" class="btn btn-lg btn-default" data-toggle="tab" href="#home">Instructor</a> -->
                    <a href="#"  id="tipo_usuario" name="1" class="btn_comprar btn btn-primary" value="1">Instructor</a>
                  </li>
        
                  <li class="" style="width:48%">
                    <a href="#" id="tipo_usuario2" name="2" class="btn_comprar btn btn-primary" value="2">Alumno</a>
                          <!-- <a id="tipo_usuario" value="2" class=" btn btn-lg btn-default" data-toggle="tab" href="#home">Alumno</a> -->
                  </li>
                </ul>
              </div>
              <br/>
              <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                              
                          <div class="form-group">
                            <label for="username">Nombre de usuario </label>
                            <input type="text" class="form-control" id="username">
                          </div>
                          <div class="form-group">
                            <label for="RUT">RUT </label>
                            <input type="text" class="form-control" id="rut">
                          </div>

                          <div class="form-group">
                            <label for="Nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre">
                          </div>
                          <div class="form-group">
                            <label for="Apellido">Apellido</label>
                            <input type="text" class="form-control" id="apellido">
                          </div>

                          <div class="form-group">
                            <label for="correo">Correo:</label>
                            <input type="email" class="form-control" id="correo">
                          </div>

                          <div class="form-group">
                            <label for="pwd">Contraseña:</label>
                            <input type="password" class="form-control" id="password">
                          </div>

                          <div class="form-group">
                            <label for="pwd">Confirme su Contraseña:</label>
                            <input type="password" class="form-control" id="password2">
                          </div>

                          <div class="form-group">
                            <label for="direccion">Direccion:</label>
                            <input type="text" class="form-control" id="direccion">
                          </div>

                          <div class="form-group">
                            <label for="telefono">Telefono:</label>
                            <input type="text" class="form-control" id="telefono">
                          </div>
                          <!-- <button type="submit" class=" pull-right btn-link"><a href="www.google.com">Forget password</a></button> -->
          
                          <br/>
                          <button id="registrar" value="registrar" name="registrar" class="registrar btn btn-sm btn-success btn-block" type="submit"> <font face="Arial Black">Registrar</button>
                        </div>
                      </div>
                    </div>
                  </form>
                    </div>

                    
                     </div>
                    </div>
                  </div>
           

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
    
    
    <script src="js/registro.js"></script>
    
    <!-- <script src="js/localizacion.js"></script> -->
  </body>
</html>
