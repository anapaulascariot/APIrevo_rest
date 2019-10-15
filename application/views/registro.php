<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="utf-8">  
    <title>Nuevo Usuario</title>  
    <link rel="stylesheet" type="text/css" href="http://localhost/APIrevo_rest/assets/css/formato.css"></link>
    <link rel="stylesheet" type="text/css" href="http://localhost/APIrevo_rest/assets/css/bootstrap.css"></link>
    <link rel="stylesheet" type="text/css" href="http://localhost/APIrevo_rest/assets/css/bootstrap.min.css"></link>
</head>  
<body>  
    <div class="container">
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <form method="post" action="<?php echo base_url('index.php/Registro/index');?>">
                <div class="fadeIn first">
                    </p>
                    <h1>Nuevo Usuario</h1>
                    </p>
                </div>

                <div class="fadeIn second">
                    <!--Email-->
                    <input type="email" id="email" required name="email" placeholder="Email">
                </div>
                <div class="fadeIn second">
                    <!--Nombre-->
                    <input type="text" id="nombre" required name="nombre" placeholder="Nombre">
                </div>
                <div class="fadeIn second">
                    <!--Nombre-->
                    <input type="text" id="apellido" required name="apellido" placeholder="Apellido">
                </div>
                <div class="fadeIn second">
                    <!--Contrasena-->
                    <input type="password" id="contrasena" required name="contrasena" placeholder="Contraseña">
                </div>
                <div class="fadeIn second">
                    <!--Contrasena-->
                    <input type="password" id="confirmar_contrasena" required name="confirmar_contrasena" placeholder="Confirme Contraseña">
                </div>
                <!--Realizar Registro-->
                </p><input type="submit" class="fadeIn third" id="registro_user">
            </form>
            </div>
        </div>
    </div>  
</body>  
<script type="text/javascript" src="http://localhost/apirevo_rest/assets/js/bootstrap.js"></script>
<script type="text/javascript" src="http://localhost/APIrevo_rest/assets/js/validar_registro.js"></script>
</html>  