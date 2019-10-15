<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="utf8mb4">  
    <title>Página Cuestionario</title>  
    <link rel="stylesheet" type="text/css" href="http://localhost/APIrevo_rest/assets/css/formato.css"></link>
    <link rel="stylesheet" type="text/css" href="http://localhost/APIrevo_rest/assets/css/bootstrap.css"></link>
    <link rel="stylesheet" type="text/css" href="http://localhost/APIrevo_rest/assets/css/bootstrap.min.css"></link>
</head>  
<body>
  <div class="container">
    <div class="wrapper fadeInDown">
      <div class="fadeIn first">
        <h1>¡Bienvenido!</h1>
        <h2>Responde la siguiente pregunta</h2>
      </div>
      <div class="text-center">
        <div class="card bg-info text-white">
          <legend class="col-sm-12">¿Cómo calificarías el clima en Xalapa Veracruz?</legend>   
          <p></p>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1" checked>
                <label class="form-check-label" for="gridRadios1">
                  Bueno
                </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2" checked>
                <label class="form-check-label" for="gridRadios2"> 
                  Regular
                </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3" checked>
                <label class="form-check-label" for="gridRadios3"> 
                Malo
                </label>
            </div>
            <p></p>
            <div>
              <div class="col-md-12 col-md-offset-7">
                <button type="btn-success" class="btn btn-success" id='votar'>Votar</button>
              </div>
              <div class="col-md-1 col-md-offset-7">
                <button type="button" type="button" class="btn btn-danger" onclick="window.location.href='<?php echo base_url("index.php/Main/");?>'">Salir</button>
                <p></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>

<script type="text/javascript">
      $(document).ready(function(){
        $("#enviarVoto").click(function(){
            var radioValue = $("input[name='gridRadios']:checked").val();
            if(radioValue){
                $.ajax({
                  url: 'index.php/Servicios_Web/Respuestaservice',
                  type: 'post',
                  dataType: 'json',
                  data: {'valor_de_voto': radioValue},
                })
                /*.done(function(data) {
                  if (data.pasa) {
                    $('#modalConfirma').modal('hide');
                    $('#modalOK').modal();
                  }else{
                    $('#modalConfirma').modal('hide');
                    $('#modalError').modal();
                  }
                })
                .fail(function() {
                  $('#modalConfirma').modal('hide');
                  $('#modalError').modal();
                });
            }else{
                $('#miModalVacioBoton').show();
            }
        });

        $("#cerrar1").click(function(){
              $("#miModalVacioBoton").hide();
        });

        $("#cerrar2").click(function(){
              $("#modalOK").hide();
              window.location.replace("index.php/Graficas");
        });

        $("#cerrar1").click(function(){
              $("#modalError").hide();
        });*/

    });
</script>



</html>  