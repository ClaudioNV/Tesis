<!DOCTYPE html>  
    <head>  
        <title>Ejemplo FB</title>  
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
        <fb:login-button scope="public_profile,email" onlogin="checkLoginState();"> </fb:login-button>  
        <button onclick="ingresar();">Ingresar con Facebook</button>  
    </body>  
</html>  