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
                                   <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        Bueno
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2" checked>
                                    <label class="form-check-label" for="gridRadios2">
                                        Regular
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" checked>
                                    <label class="form-check-label" for="gridRadios3">
                                        Malo
                                    </label>
                                </div>
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