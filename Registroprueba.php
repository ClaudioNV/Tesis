
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
                <img class="logo img-responsive" src="img/logotipo.png"/>
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
                    <li><a href="/buscatuclase.php">Busca tu clase</a></li>
                    <li><a href="/videos.php">Videos</a></li>
                    <li><a href="/Instructores.php">Instructores</a></li>
                    <li><a href="/pagoclase.php">Pago de clases</a></li>
                    <li><a href="/Contactanos.php">contactanos</a></li>               
                </ul>
           <!-- <button align="right" class="btn">Registrarse </button> --> 
            </div> 

        </div>
    </div>
    
    <div class="container" style="margin-top: 5%;">
      <!--<div class="omb_login">-->
        <div class="row">
        <div class="col-sm-4"> </div>
        <div class="col-md-4">
              <!--<h2 class="omb_authTitle"><font face="Arial Black">Registrarse </h2>-->
          <h1 class="text-center text-success"> Registrarse </h1>
              <br/>
              <div class="col-sm-12">
              <!--<div class="row omb_row-sm-offset-3">-->
                <ul class="nav nav-pills" >
                  <li class="" style="width:50%"><a class="btn btn-lg btn-default" data-toggle="tab" href="#home">Instructor</a></li>
   
                  <li class=" " style="width:48%"><a class=" btn btn-lg btn-default" data-toggle="tab" href="#menu1">Alumno</a></li>
                </ul>
              <br/>
                    <div class="tab-content">
                      <div id="home" class="tab-pane fade in active">
      
                      <form action="#">

                        <div class="form-group">
                          <label for="UserName">Nombre de usuario </label>
                          <input type="text" class="form-control" id="email">
                        </div>

                        <div class="form-group">
                          <label for="Name">Nombre y Apellido</label>
                          <input type="text" class="form-control" id="email">
                        </div>

                        <div class="form-group">
                          <label for="email">Correo:</label>
                          <input type="email" class="form-control" id="email">
                        </div>

                        <div class="form-group">
                          <label for="pwd">Contraseña:</label>
                          <input type="password" class="form-control" id="pwd">
                        </div>

                        <div class="form-group">
                          <label for="pwd">Confirme su Contraseña:</label>
                          <input type="password" class="form-control" id="pwd">
                        </div>
                      
                        <button type="submit" class="btn btn-default btn-lg">Enviar</button>

                        <!-- <button type="submit" class=" pull-right btn-link"><a href="www.google.com">Forget password</a></button> -->
                      </form>
                        <br/>
                        <a href="#" class="pull-right btn btn-block btn-danger" > Registro completado   </a>



                    </div>

                    <div id="menu1" class="tab-pane fade">

                      <form action="#">

                        <div class="form-group">
                          <label for="UserName">Nombre de usuario </label>
                          <input type="text" class="form-control" id="email">
                        </div>
  
                        <div class="form-group">
                          <label for="Name">Nombre y Apellido</label>
                          <input type="text" class="form-control" id="email">
                        </div>

                        <div class="form-group">
                          <label for="email">Correo::</label>
                          <input type="email" class="form-control" id="email">
                        </div>

                        <div class="form-group">
                          <label for="pwd">Contraseña:</label>
                          <input type="password" class="form-control" id="pwd">
                        </div>

                        <div class="form-group">
                          <label for="pwd">Confirme su Contraseña:</label>
                          <input type="password" class="form-control" id="pwd">
                        </div>
                        <button type="submit" class="btn btn-default">Enviar</button>

                        <!--<button type="submit" class=" pull-right btn-link"><a href="www.google.com">Forget password</a></button>-->
                      </form>
                        <br/>
                        <a href="#" class="pull-right btn btn-block btn-success" > Registro completado   </a>
                     </div>
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
