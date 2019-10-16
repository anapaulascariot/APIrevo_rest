<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);
      <?php
      //print_r($datos)?>
      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Calificación', 'Porcentaje'],
          <?php 
          foreach ($datos as $key) {
            echo '["'.$key->pregunta.'", '.$key->voto."],";
            echo " ";

            
          }
          ?>]);

        var options = {
          title: 'Pregunta: <?php echo "¿Qué piensas de la maestría en Sistemas interactivos Centrados en el Usuario?"//$datos[0]->pregunta //La pregunta ?>',
          width: 900,
          legend: { position: 'none' },
          chart: { title: 'Pregunta: <?php echo $datos[0]->pregunta//La pregunta otra vez ?>',
                   subtitle: '' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Porcentaje'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>
  </head>
  <body>
    <div id="top_x_div" style="width: 900px; height: 500px;"></div>
    <div class="col-md-1 col-md-offset-7">
                                    <button type="button" type="button" class="btn btn-danger" onclick="window.location.href='<?php echo base_url();?>'">Salir</button>
  </body>
</html>