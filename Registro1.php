
<!DOCTYPE html>
<html>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <head>
  <title>Login KorpoVibro </title>
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
    
    <div class="container">
        <img class="logo" src="img/logotipo.png" alt="logotipo.png" align=left class="img-responsive">
            <header class="page-header">
              
              <ul class="nav nav-pills pull-right">
             
                <li><a href="#">Busca tu clase</a></li>
                <li><a href="#">Videos</a></li>
                <li><a href="#">Instructores</a></li>
                <li><a href="#">Grupos</a></li>
                <li><a href="#">Pago de clases</a></li>
                <li><a href="#">contactanos</a></li>
              </ul>
</br>
</br>
</br>
</br>

</br>
</br>
            </header>
           
    

    <div class="omb_login">
        <h2 class="omb_authTitle"><font face="Arial Black">Registrarse </h2>
        <div class="row omb_row-sm-offset-3 omb_socialButtons">
            
        </div>
        <div class="row omb_row-sm-offset-3">
            <div class="col-xs-12 col-sm-6">	
                <form class="omb_loginForm" action="registrar.php" autocomplete="off" method="POST">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input id="username" type="text" class="form-control" name="username" placeholder="Nombre de Usuario">
                    </div>
                    <span class="help-block"></span>
                                        
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input  id="password" type="password" class="form-control" name="password" placeholder="Contraseña">
                    </div>
                    <span class="help-block"></span>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input  id="password" type="password" class="form-control" name="password" placeholder="Repetir contraseña">
                    </div>
                    <span class="help-block"></span>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input  id="nombre" type="text" class="form-control" name="nombre" placeholder="Nombre">
                    </div>
                    <span class="help-block"></span>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input  id="apellido" type="text" class="form-control" name="apellido" placeholder="Apellido">
                    </div>
                     <span class="help-block"></span>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input  id="correo" type="text" class="form-control" name="correo" placeholder="Correo Electronico">
                    </div>
                     <span class="help-block"></span>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input  id="direccion" type="text" class="form-control" name="direccion" placeholder="Dirección">
                    </div>
                     <span class="help-block"></span>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input  id="telefono" type="text" class="form-control" name="telefono" placeholder="Telefono">
                    </div>
                    <!-- <span class="help-block">Error de Contraseña</span> -->
                    <span class="help-block"></span>
                    <button id="registrar" class="btn btn-lg btn-primary btn-block" type="submit"> <font face="Arial Black">Registrar</button>
                </form>
            </div>
        </div>
        
    </div>



        </div>
</br>
</br>
</br>
</br>
</br>

    
        <div id="footer" class="col-xs-12 col-sm-12">
        
          <div class="col-sm-offset-2 col-sm-10" align="center">
            <div id="RSS" class="col-xs-12 col-sm-12" style="">
        
          
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
                <img width="30" height="30" src="img/logos/google.png" />
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
  </body>
</html>
