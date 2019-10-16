<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="utf8mb4">  
    <title>Página Cuestionario</title>  
    <link rel="stylesheet" type="text/css" href="http://localhost/APIrevo_Aly/assets/css/formato.css"></link>
    <link rel="stylesheet" type="text/css" href="http://localhost/APIrevo_Aly/assets/css/bootstrap.css"></link>
    <link rel="stylesheet" type="text/css" href="http://localhost/APIrevo_Aly/assets/css/bootstrap.min.css"></link>
</head>  
<body> 
   <div class="container">
     <div class="wrapper fadeInDown">
       <div class="fadeIn first">
        <div class="text-center">
         <h1>¡Bienvenido!</h1>
         <h2>Responde la siguiente pregunta</h2>
       </div>
       <div class="text-center">
         <div class="card bg-info text-white">
          <!--<legend class="col-sm-12">¿Cómo calificarías el clima en Xalapa Veracruz?</legend>   
          <p></p>-->
          <form method="post" action="<?php echo base_url('index.php/Respuesta/votar/');?>">
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