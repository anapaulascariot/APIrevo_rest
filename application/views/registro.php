<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="utf-8">  
    <title>Nuevo Usuario</title>  
    <script type="text/javascript" src="http://localhost/apirevo/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="http://localhost/apirevo/css/bootstrap.css"></link>
    <link rel="stylesheet" type="text/css" href="http://localhost/apirevo/css/bootstrap.min.css"></link>
    <link rel="stylesheet" type="text/css" href="http://localhost/apirevo/css/formato.css"></link>
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

                <?php  

                echo form_open('Registro/signin_validation');  

                echo validation_errors();  

                $opts_mail =  array('placeholder' => 'Email', 'class' => 'fadeIn second', 'type' => 'mail');
            //echo "<p>Username:";  
                echo form_input('email', '', $opts_mail);  
                echo "</p>"; 

                $opts_nom =  array('placeholder' => 'Nombre', 'class' => 'fadeIn second', 'type' => 'text');
            //echo "<p>Username:";  
                echo form_input('nombre', '', $opts_nom);  
                echo "</p>";  

                $opts_apel =  array('placeholder' => 'Apellido', 'class' => 'fadeIn second', 'type' => 'text');
            //echo "<p>Username:";  
                echo form_input('apellido', '', $opts_apel);  
                echo "</p>";   

            //echo "<p>Password:";  
                $opts_pass = array('placeholder'=>'Contraseña', 'class'=>'fadeIn third', 'type' => 'password');
                echo form_password('contrasena', '', $opts_pass);  
                echo "</p>";  

            //echo "<p>Confirm Password:";  
                $opts_confirmpass = array('placeholder'=>'Confirme Contraseña', 'class'=>'fadeIn Fourth', 'type' => 'password');
                echo form_password('cpassword', '', $opts_confirmpass);  
                echo "</p>";  

                echo "<p>";  
                echo form_submit('signin_submit', 'Registrar', 'class=fadeIn Fifth');  
                echo "</p>";  

                echo form_close();  

                ?>  
            </form>
            </div>
        </div>
    </div>  
</body>  
</html>  