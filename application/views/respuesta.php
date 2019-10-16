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
            <!--<div id="CanvasVotos">
              <h1 id="textoRegistrados"></h1>
              <canvas style="margin: 20px;" id="graficaVotos"></canvas>
            </div>-->
            <div class="row">
              <div class="col-md-12 col-md-offset-7">
                <button type="btn-success" class="btn btn-success" id='votar'>Votar</button>
              </div>
              <div class="col-md-1 col-md-offset-7">
                <button type="button" type="button" class="btn btn-danger" onclick="window.location.href='<?php echo base_url("index.php/");?>'">Salir</button>
                <p></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
    <!-- modal para verificar botón elegido -->
    <div class="modal" id="miModalVacioBoton">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header bg-danger text-white">
            <h4 class="modal-title">¡Advertencia!</h4>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
            Debes elegir un valor para la votación
          </div>
          Modal footer
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" id="cerrar1" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

<div id="modalOK" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Información</h5>
      </div>
      <div class="modal-body">
        <h4>Datos guardados correctamente</h4>
      </div>
      <div class="modal-footer">
        <button id="cerrar2" type="button" class="btn btn-danger" data-dismiss="modal">Ir a ver las gráficas de voto</button>
      </div>
    </div>
  </div>
</div>

<div id="modalError" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">Información</h5>
      </div>
      <div class="modal-body">
        <h4>No ha sido posible guardar tu voto o ya ha votado antes</h4>
      </div>
      <div class="modal-footer">
        <button id="cerrar3" type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>





<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>

<script type="text/javascript">
      $(document).ready(function(){
        $("#votar").click(function(){
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