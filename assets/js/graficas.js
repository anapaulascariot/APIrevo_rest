$(document).ready(function() {
	cargaRespuestas();
});

//cargar gráfica de registro de votos
function cargaRespuestas(){
	$.ajax({
		url: './index.php/Servicios_Web/Graficas_service',
		type: 'GET',
		dataType: 'json',
	})
	.done(function(data) {
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
	})
	.always(function() {
		console.log("complete");
	});
}




	
	