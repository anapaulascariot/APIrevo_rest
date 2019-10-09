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
                                
                                <div id="formContent">
                                   <legend class="col-sm-12">¿Cómo calificarías el clima en Xalapa Veracruz?</legend>   
                                   <p></p>
                                      
                                  echo "<div class='form-check'>";
                                  echo "<input class='form-check-input' type='radio'";
                                  //se especifica que radiobutton es
                                  echo "name='gridRadios' id='gridRadios".$i."'";
                                  echo "value='"; 
                                  echo $preguntayrespuesta[($i+1)];//la id de la respuesta para poder actualizarla
                                  echo "'";
                                   
                                 echo " checked>";
                                  
                                  echo $preguntayrespuesta[($i+2)]; //lo que verá el usuario
                                echo "</label>";
                                echo "</div>";
                               $i=$i+1;
                                 }

                                ?>  
                                
                                
                                <p></p>
                                <div>
                                    <div class="col-md-12 col-md-offset-7">
                                        <button type="btn-success" class="btn btn-success" >Votar</button>
                                    </div>

                                    <div class="col-md-1 col-md-offset-7">
                                    <button type="button" type="button" class="btn btn-danger" onclick="window.location.href='<?php echo base_url("index.php/Main/");?>'">Salir</button>

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