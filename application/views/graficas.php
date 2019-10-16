<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf8mb4">  
  <title>Gráficas de votos</title>  
  <link rel="stylesheet" type="text/css" href="http://localhost/APIrevo_rest/assets/css/formato.css"></link>
  <link rel="stylesheet" type="text/css" href="http://localhost/APIrevo_rest/assets/css/bootstrap.css"></link>
  <link rel="stylesheet" type="text/css" href="http://localhost/APIrevo_rest/assets/css/bootstrap.min.css"></link>
</head>  
<body>
    <div class="container">
      <div class="wrapper fadeInDown">
        <div class="fadeIn first">
          <h1>Gráficas de Votos</h1>
            <div class="text-center">
              <div class="card bg-info text-white">
                <div id="body">
                  <!--..-->
    		      <div>
                <h1 id="textoRegistrados"></h1>
                <canvas id="graficaRespuestas"></canvas>
              </div>
            </div>
            <div class="col-md-1 col-md-offset-7">
              <button type="button" type="button" class="btn btn-danger" onclick="window.location.href='<?php echo base_url("index.php/");?>'">Salir</button>
            </div>
            <!--.Boton que hara.-->
            <div class="col-md-1 col-md-offset-7">
              <button type="btn-success" class="btn btn-success" id="socket">votar</button>
            </div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="<?php echo $this->config->item('base_url')?>/assets/js/Chart.min.js"></script>
<script src="<?php echo $this->config->item('base_url')?>/assets/js/graficas.js"></script>
<script src="http://localhost:8082/socket.io/socket.io.js"></script>
<script>
  var socket = io.connect('http://localhost:8082');
  var ctx = document.getElementById("graficaVotos").getContext('2d');
    socket.on("ok", function(){
        //codigo que se vera en elnavegador https://socket.io/docs/
        alert("todo ok");
       location.reload();
        console.log('caca');
        
    });
    window.addEventListener("load", function(){
        
        var button = document.getElementById("botngrita");
        button.addEventListener("click", function(){
            socket.emit("revoto");
        });
    });
</script>
</body>
</html>