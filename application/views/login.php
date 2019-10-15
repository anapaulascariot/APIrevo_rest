
<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="utf-8">  
    <title>Página de login</title>  
    <link rel="stylesheet" type="text/css" href="http://localhost/APIrevo_rest/assets/css/formato.css"></link>
    <link rel="stylesheet" type="text/css" href="http://localhost/APIrevo_rest/assets/css/bootstrap.css"></link>
    <link rel="stylesheet" type="text/css" href="http://localhost/APIrevo_rest/assets/css/bootstrap.min.css"></link>
</head>  
<body>  
    <form method="post" action="http://localhost/APIrevo_rest/index.php/Login/index">
    <div class="container">
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <div class="fadeIn first">
                    <img src="http://localhost/APIrevo_rest/assets/img/logo-UV2.jpg" id="icon" alt="User Icon" />
                    <h1>Login</h1>
                </div>

                <div class="fadeIn second">
                    <!--Email-->
                    <input type="email" id="email" required name="email" placeholder="Email">
                </div>
                <div class="fadeIn third">
                    <!--Contrasena-->
                    <input type="password" id="contrasena" required name="contrasena" placeholder="Contraseña">
                </div>
                <!--Realizar login-->
                </p><input type="submit" class="fadeIn Fourth" id="login">

                <div id="formFooter">   
                    <a class="underlineHover" href="<?php echo site_url('Vistas/registro_usuario') ?>">Registrarse</a> 
                </div>
            </div>
        </div>     
    </div> 
    </form>
</body>  
<script type="text/javascript" src="http://localhost/APIrevo_rest/assets/js/bootstrap.js"></script>
<!--script type="text/javascript" src="http://localhost/APIrevo_rest/assets/js/validar_login.js"></script-->
</html>    