
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
            <script>  
            (function(d,s,id) {  
                var js, fjs = d.getElementsByTagName(s)[0];  
                if(d.getElementById(id)) return;  
                js = d.createElement(s); js.id = id;  
                js.src = "http://connect.facebook.net/en_US/sdk.js";  
                fjs.parentNode.insertBefore(js, fjs);  
            }(document, 'script', 'facebook-jssdk'));  
  
            window.fbAsyncInit = function() {  
                FB.init({  
                    appId : '1876836082608320',  
                    cookie : true,  
                    xfbml : true,  
                    version : 'v2.0'  
                });  
            }  
  
            function ingresar() {  
                FB.login(function(response){  
                    validarUsuario();  
                }, {scope: 'public_profile, email'});  
            }  
            function validarUsuario() {  
                FB.getLoginStatus(function(response) {  
                    if(response.status == 'connected') {  
                        FB.api('/me', function(response) {  
                            alert('Hola ' + response.name);  
                        });  
                    } else if(response.status == 'not_authorized') {  
                        alert('Debes autorizar la app!');  
                    } else {  
                        alert('Debes ingresar a tu cuenta de Facebook!');  
                    }  
                });  
           }  
  
        </script> 
  
  </head>
  
  <body>
    
    <div class="container">
        <img class="logo" src="img/logotipo.png" alt="logotipo.png" align=left class="img-responsive">
            <header class="page-header">
              
            <ul class="nav nav-pills pull-right">
                <li><a href="http://korpovibro.cl/buscatuclase.php">Busca tu clase</a></li>
                <li><a href="http://korpovibro.cl/videos.php">Videos</a></li>
                <li><a href="http://korpovibro.cl/Instructores.php">Instructores</a></li>
                <li><a href="http://korpovibro.cl/Grupos.php">Grupos</a></li>
                <li><a href="http://korpovibro.cl/pagoclase.php">Pago de clases</a></li>
                <li><a href="http://korpovibro.cl/Contactanos.php">contactanos</a></li>
              </ul>
                    </br>
                    </br>
                    </br>
                    </br>

                    </br>
                    </br>
            </header>
    </div>       
    
<div class= "container2">
    <div class="omb_login">
        <h3 class="omb_authTitle"><font face="Arial Black">Iniciar Sesión o <a href="Registro12042018.php">Registrarse</a></h3>
        <div class="row omb_row-sm-offset-3 omb_socialButtons">
            
            <div class="col-xs-4 col-sm-2">
                <a href="#" class="btn btn-lg btn-block omb_btn-facebook">
                    <i class="fa fa-facebook visible-xs"></i>
                    <span class="hidden-xs" onclick="ingresar();">Facebook</span>

                            <!--<fb:login-button scope="public_profile,email" onlogin="checkLoginState();"> </fb:login-button>  
                            <button onclick="ingresar();">Ingresar con Facebook</button>-->
                </a>
            </div>
            <div class="col-xs-4 col-sm-2">
                <a href="#" class="btn btn-lg btn-block omb_btn-twitter">
                    <i class="fa fa-twitter visible-xs"></i>
                    <span class="hidden-xs">Twitter</span>
                </a>
            </div>	
            <div class="col-xs-4 col-sm-2">
                <a href="#" class="btn btn-lg btn-block omb_btn-google">
                    <i class="fa fa-google-plus visible-xs"></i>
                    <span class="hidden-xs">Google+</span>
                </a>
            </div>	
        </div>

        <div class="row omb_row-sm-offset-3 omb_loginOr">
            <div class="col-xs-12 col-sm-6">
                <hr class="omb_hrOr">
                <span class="omb_spanOr">o</span>
            </div>
        </div>

        <div class="row omb_row-sm-offset-3">
            <div class="col-xs-12 col-sm-6">	
                <form class="omb_loginForm" action="modelo/validar.php" autocomplete="off" method="POST">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" name="username" placeholder="Usuario">
                    </div>
                    <span class="help-block"></span>
                                        
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input  type="password" class="form-control" name="passwd" placeholder="Contraseña">
                    </div>
                        </br>
                    <!-- <span class="help-block">Error de Contraseña</span> -->

                    <button id="login" class="btn btn-lg btn-primary btn-block" type="submit" name="login"> <font face="Arial Black"> Iniciar Sesión</button>
                </form>
            </div>
        </div>
        <div class="row omb_row-sm-offset-3">
            <div class="col-xs-12 col-sm-3">
                <label class="checkbox">
                    <input type="checkbox" value="remember-me">Recordarme
                </label>
            </div>
            <div class="col-xs-12 col-sm-3">
                <p class="omb_forgotPwd">
                    <a href="#">¿olvidó su contraseña?</a>
                </p>
            </div>
        </div>	    	
    </div>
</div>


       
</br>
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
  </body>
</html>
