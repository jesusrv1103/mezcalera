<!DOCTYPE html>
<html>
<head>
	<title>COORDINACION ADMINISTRATIVA</title>
	
</head>
<body>
	<h3>COORDINACION ADMINISTRATIVA</h3>
	<h3>Control de Almacén</h3>
	<br>
	<p ><center><font size="5">
		<strong>Informe General de Vales Surtidos del Mes</strong></font></center></p>
		<br>
		<br>
		No Vale: 420
		<br>
		<br>
		Nombre: NOEMY DOLORES DE LA TORRE BELMONTES
		<br>
		<br>
		Area: VINCULACIÓN EDUCATIVA
		<br>
		<br>
		Uso Destinado: PARA USO DE LA DIRECCIÓN
		<br>
		<br>
		<table>
			<tr>
				
				<th height="30 px" width="80 px">Cantidad</th>
				<th height="50 px" width="80 px">U. de Medida</th>
				<th >Descripción</th>
				<th height="30 px" width="80 px">Num. Partida</th>
				<th >Concepto</th>

			</tr>
			@foreach($verSolicitud as $articulo)
			<tr>

				<td style="text-align:center;">{{$articulo->nombre}}</td>
				<td>PIEZA</td>
				<td>{{$articulo->cantidad}}</td>
				<td>2111</td>
				<td>MATERIALES Y UTILES DE OFICINA</td>
			</tr>
			@endforeach
		</table>
	</body>
	</html>