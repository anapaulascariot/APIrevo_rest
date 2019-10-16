<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="utf8mb4">  
    <title>Página Cuestionario</title>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>  
<body> 
    <div class="container">
        <div class="text-center">
            <div class="jumbotron">
                <h1>¡Bienvenido!</h1>
                <h2>Responde la siguiente pregunta</h2>
            </div>
            <div class="card bg-info text-white">
                <div class="card-body">
                    <div class="col-md-12 col-md-offset-7">
                        <div class="panel panel-default">
                            <div class="text-center">
                                <form method="post" action="<?php echo base_url('index.php/Respuesta/votar/');?>">
                                <div id="formContent">

                                   <legend class="col-sm-12"><?php echo "¿Qué piensas de la maestría en Sistemas interactivos Centrados en el Usuario?"//$preguntayrespuesta[1];?></legend> 

                                   <p></p>
                                <?php 
                                //print_r($preguntayrespuesta);
                                 //En este tramo van las respuestas
                                // $mas2=0;
                                
                                      
                                  echo "<div class='form-check'>";
                                  echo "<input class='form-check-input' type='radio'";
                                  //se especifica que radiobutton es
                                  echo "name='gridRadios' id='gridRadios1'";
                                  echo "value='"; 
                                  echo 1;//$preguntayrespuesta[($i+1)];//la id de la respuesta para poder actualizarla
                                  echo "'";
                                   
                                 echo " checked>";
                                  
                                  echo "Bueno";//$preguntayrespuesta[($i+2)]; //lo que verá el usuario
                                echo "</label>";
                                echo "</div>";
                               //$i=$i+1;
                                 
                                ?>

                                <?php 
                                echo "<div class='form-check'>";
                                  echo "<input class='form-check-input' type='radio'";
                                  //se especifica que radiobutton es
                                  echo "name='gridRadios' id='gridRadios2'";
                                  echo "value='"; 
                                  echo 2;//$preguntayrespuesta[($i+1)];//la id de la respuesta para poder actualizarla
                                  echo "'";
                                   
                                 echo " checked>";
                                  
                                  echo "Regular";//$preguntayrespuesta[($i+2)]; //lo que verá el usuario
                                echo "</label>";
                                echo "</div>";

                                echo "<div class='form-check'>";
                                  echo "<input class='form-check-input' type='radio'";
                                  //se especifica que radiobutton es
                                  echo "name='gridRadios' id='gridRadios3'";
                                  echo "value='"; 
                                  echo 3;//$preguntayrespuesta[($i+1)];//la id de la respuesta para poder actualizarla
                                  echo "'";
                                   
                                 echo " checked>";
                                  
                                  echo "Malo";//$preguntayrespuesta[($i+2)]; //lo que verá el usuario
                                echo "</label>";
                                echo "</div>";
                                ?> 
                                
                                
                                <p></p>
                                <div>
                                    <div class="col-md-12 col-md-offset-7">
                                        <button type="btn-success" class="btn btn-success" >Votar</button>
                                    </div>

                                    <div class="col-md-1 col-md-offset-7">
                                    <button type="button" type="button" class="btn btn-danger" onclick="window.location.href='<?php echo base_url();?>'">Salir</button>

                                    <p></p>
                                    </div>
                                </div>
                             </form>
                            </div>
                        </div>
                   </div>
               </div> 
           </body>
        </div>  
    </div>
</html>  