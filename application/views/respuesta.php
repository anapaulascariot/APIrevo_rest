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
            <!--.Aqui va a dibujar los graficos.-->
            <div id="CanvasRespuesta">
              <h1 id="textoRegistrados"></h1>
              <canvas style="margin: 20px;" id="graficaRespuestas"></canvas>
            </div>
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
<!--.Creacion de los modales ventanas de validaciones y mensjs.-->
    <!-- modal seleccion de voto-->
    <div class="modal" id="siesVacio">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-danger text-white">
            <h4 class="modal-title">¡Alerta!</h4>
          </div>
          <div class="modal-body">
            Selecciona una Opción
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" id="Salir" data-dismiss="modal">Salir</button>
          </div>
        </div>
      </div>
    </div>
  <!-- modal Guardado-->
<div id="VotoGuardado" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Información</h5>
      </div>
      <div class="modal-body">
        <h4>¡El voto ha sido guardado con exito!</h4>
      </div>
      <div class="modal-footer">
        <button id="verGraficas" type="btn-success" class="btn btn-success" data-dismiss="modal">Ver gráficas de votos</button>
      </div>
    </div>
  </div>
</div>
  <!-- modal Error-->
<div id="modalError" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">¡Alerta!</h5>
      </div>
      <div class="modal-body">
        <h4>¡Error al votar!, Vuelve a intentar o quiza ya votaste!</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" id="Salir2" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>-->
<!--..-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!--<script src="<?php echo $this->config->item('base_url')?>/assets/js/Chart.min.js"></script>-->
<script src="<?php echo $this->config->item('base_url')?>/assets/js/graficas.js"></script>
<!--<script src="http://localhost:8082/socket.io/socket.io.js"></script>-->

<script type="text/javascript">
      $(document).ready(function(){
        var socket = io.connect('http://localhost:8082');
        $("#votar").click(function(){
            var radioValue = $("input[name='optradio']:checked").val();
            if(radioValue){
                $.ajax({
                  url: './ServiciosWeb/Respuesta_service',
                  type: 'post',
                  dataType: 'json',
                  data: {'voto': radioValue, 'id': 1},
                })
                .done(function(data) {
                  if (data.pasa) {
                    socket.emit("revoto");
                    socket.on('exito', function () {
                       console.log("Si llegó al OK");
                       $.ajax({
                          url: './index.php/Servicios_Web/Graficas_service',
                          type: 'GET',
                          dataType: 'json',
                        })
                       /*falta modificar creacion de las graficas*/
                        .done(function(data) {
                          var ctx = document.getElementById("graficaVotos").getContext('2d');
                          $("#graficaVotos").remove();
                          $("#CanvasVotos").append('<canvas style="margin: 20px;" id="graficaVotos"></canvas>');
                          var ctx = document.getElementById("graficaVotos").getContext('2d');

                          var colores = ["#c2c2c2","#DAF7A6", "#FFC300","#FF5733","#82e0aa","#a569bd","#5d6d7e","#17202a","#e59866"]
                          var nombres = [];
                          var totales = [];
                          var coloresGrafica = [];
                          if (data.registrodevotos.length > 0) {
                            $.each(data.registrodevotos, function(index, val) {
                              nombres.push(val.nombre);
                              totales.push(val.valor);
                              coloresGrafica.push(colores[index]);
                            });
                            var myChart = new Chart(ctx, {
                              type: 'bar',
                              data: {
                                labels: nombres,
                                datasets: [{
                                  label: 'Total de votos',
                                  data: totales,
                                  backgroundColor: coloresGrafica,
                                  borderColor: [],
                                  borderWidth: 1
                                }]
                              },
                              options: {
                                scales: {
                                  yAxes: [{
                                    ticks: {
                                      beginAtZero:true
                                    }
                                  }]
                                }
                              }
                            });
                          }else{
                            $("#textoRegistrados").html("No hay registros");
                          }
                        })
                        .fail(function(data) {
                          console.log(data);
                        });
                    });  
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
                $('#miModalVacioBoton').modal();
            }
        });

        $("#cerrar1").click(function(){
              $("#miModalVacioBoton").hide();
        });

        $("#cerrar2").click(function(){
              $("#modalOK").hide();
              //window.location.replace("index.php/Graficas");
        });

        $("#cerrar1").click(function(){
              $("#modalError").hide();
        });

    });
</script>



</html>  