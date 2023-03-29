<html>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    
  <head>
    <!-- NO olvidar insertar el ICONO del logo -->    
    <title>Mi perfil</title>
    <!-- archivo CSS compilado y comprimido -->
    
    <!-- Theme -->
   
    <link href="css/estilo.css" rel="stylesheet">
    <link href="css/estiloperfil.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
   
  
  </head>
<body>
    
    <div class="container">
        <img class="logo" src="img/logotipo.png" alt="logotipo.png" align=left class="img-responsive">
            <header class="page-header">
              
                <ul class="nav nav-pills pull-right">
                    <li class="active"><a href="http://korpovibro.cl/home">Home</a></li>
                    <li><a href="#">Busca tu clase</a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="#">Instructores</a></li>
                    <li><a href="#">Grupos</a></li>
                    <li><a href="#">Pago de clases</a></li>
                    <li><a href="#">contactanos</a></li>
                
                </ul>

              <class="titulo">         
              </br>   
          
              <b><h1 style="margin-top: 3%" align=right><font color=orange   size=12 face="Arial Black">Apasiónate y disfruta </font></h1></b>

                <div class="pull-right" align="right">
                    <ul class="nav pull-right">
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Bienvenido <?php echo $_SESSION["username"]; ?> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="icon-cog"></i> Mi Perfil </a></li>
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

    
    <div class="col-sm-offset-2 col-sm-15" align="left">
            <div  class="col-xs-4 col-md-7">
                <div  class="col-xs-3 col-md-3 style=" padding-left:50px; ">
                    <div style="text-align: left;">
                        <div class="container">
                            <div class="btn-group btn-group-vertical">
                                <div class="btn-group"> 
                                    <button type="button" class="btn btn-nav" onclick="javascript:window.location.href="#">
                                        <span class="glyphicon glyphicon-user"></span>
                                        <p>Perfil</p>
                                     </button>
                                </div>
                                <div class="btn-group">
                                    <button  id="miclase" type="button" class="btn btn-nav">
                                        <span class="glyphicon glyphicon-search"></span>
    			                        <p>Mis Clases</p>
                                    </button>
                                </div>
                                <div class="btn-group">
                                    <button id="nuevaclase" type="button" class="btn btn-nav">
                                        <span class="glyphicon glyphicon-plus-sign"></span>
        		                        <p>Ingresar nueva clase</p>
                                    </button>
                                </div>
                 
                                <div class="btn-group">
                                    <button id="envioinfo" type="button" class="btn btn-nav">
                                        <span class="glyphicon glyphicon-envelope"></span>
    			                        <p>Enviar informacion </p>
                                    </button>
                                </div>

                                <div class="btn-group">
                                    <button id="eventos" type="button" class="btn btn-nav">
                                        <span class="glyphicon glyphicon-bell"></span>
    			                        <p>Eventos</p>
                                    </button>
                                </div>
                                <div class="btn-group">
                                    <button id="mispagos" type="button" class="btn btn-nav">
                                        <span class="glyphicon glyphicon-usd"></span>
    			                        <p>pagos</p>
                                    </button>
                                </div>
            
	                        </div>
                        </div>
                    </div>
                </div>

    	        <form role="form" class="form-inline col-md-9 go-right" style="color: black;background-color:white;border-radius:0px 22px 22px 22px; ">
			        <h2>Perfil</h2>
                    <p>Actualice su perfil para mayor seguridad.</p>
		            <div class="form-group">            
			            <input id="Firstname" name="Firstname" type="text" class="form-control" required>
			            <label for="Firstname">Primer Nombre <span class="glyphicon glyphicon-user"> </span></label>
		            </div>
                    <div class="form-group">
    		         <input id="Lastname" name="Lastname" type="text" class="form-control" required>
			            <label for="Lastname">Apellido <span class="glyphicon glyphicon-user"> </label>
		            </div>
                    <br>
                    <br>
		            <div class="form-group">
			            <input id="phone" name="phone" type="tel" class="form-control" required>
			            <label for="fphone">nº de telefono <span class="glyphicon glyphicon-phone"></label>
		            </div>

                    <br><br>

        
                    <div class="form-group">        
                        <select class="form-control">
                            <option id="Male" Value="M" style="color:red" selected>Hombre</option>
                            <option id="FeMale" Value="FM"  style="color:green">Mujer</option>
                         <option id="NotInterested" Value="NI"  style="color:blue">no informar</option>
                        </select>
                    </div>
                    <br><br>
                    <div class="form-group">
			            <textarea id="message" name="phone" class="form-control" style="width:400px;height:100px" placeholder="Breve descripción" ></textarea>
			
		            </div>
                    <br><br>
                    <div class="form-group">
    		            <input id="Email1" name="phone" class="form-control" style="width:400px;" placeholder="email" ></textarea>

		            </div>
                    <br><br>
                    <div class="form-group">
        	            <input id="Email2" name="phone" class="form-control" style="width:400px;" placeholder="email alternativo" ></textarea>
		
                    </div>
 
                    <br><br>
                    <div class="form-group">
                        <input id="Vweb" name="phone" class="form-control" style="width:400px;" placeholder="link facebook" ></textarea>
		
                    </div>
                    <br>
                    <br>
                    <p1>Dirección</p1>
                    <br>
                    <div class="form-group">
                        <input id="Address" name="Address" type="tel" class="form-control"   required>
			            <label for="Address">casa/departamento</label>
		            </div>
                    <div class="form-group">
                        <input id="LandMark" name="LandMark" type="text" class="form-control" placeHolder="punto de referencia">
                        <label for="LandMark">punto de referencia</label>
		            </div>        
                    <br><br>
        
        
                    <br><br>
                    <button>
                        Guardar
                    </button>
                    <br>
                    <br>
                </form>
            </div>
          
        </div>        
            
            
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