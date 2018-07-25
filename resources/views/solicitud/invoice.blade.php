<!DOCTYPE html>
<html>
<head>
	<title>COORDINACION ADMINISTRATIVA</title>
	
</head>
<body>
	<table style="text-align:left;">
		<tr>
			<td>
				<h3>COORDINACION ADMINISTRATIVA</h3>
				<h3>Control de Almacén</h3>

			</td>
			<br>
			<td style="align-content:center;" >
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<img src="{{('images/sezac2.jpg')}}" width="40%" height="40%" alt="s-logo" />


			</table>


			<p ><center><font size="5">
				<strong>Entrega de Requisición</strong></font></center></p>
				<br>
				<br>
				<strong>Fecha:</strong> <laberl ><input name="fecha" type="text" id="fecha" value="<?php echo date("m/d/Y"); ?>" size="10" /></label>  
				<br>
				<br>
				<strong>No Vale:</strong> 420
				<br>
				<br>
				<strong>Nombre:</strong> NOEMY DOLORES DE LA TORRE BELMONTES
				<br>
				<br>
				<strong>Area:</strong> VINCULACIÓN EDUCATIVA
				<br>
				<br>
				<strong>Uso Destinado:</strong> PARA USO DE LA DIRECCIÓN
				<br>
				<br>
				<br>
				<table width="center" border="1" cellpadding="0" cellspacing="0.3" bgcolor="whait">

					<tr width="100%" style="text-align: center;">

						
						<th height="80 px" width="13%">Cantidad</th>
						<th height="80 px" width="18%">Unidad Medida</th>
						<th height="80 px" width="32%">Descripción</th>
						<th height="80 px" width="14%">No. Partida</th>
						<th height="80 px" width="23%">Concepto</th>

					</tr>
					@foreach($verSolicitud as $articulo)
					<tr>
						<td style="padding-left: 4px;">{{$articulo->cantidad}}</td>
						<td style="padding-left: 4px;">{{$articulo->idUnidad}}</td>
						<td style="padding-left: 4px;">{{$articulo->nombre}}</td>
						<td style="padding-left: 4px;">222</td>
						<td style="padding-left: 4px;">MATERIALES Y UTILES DE OFICINA</td>
					</tr>
					@endforeach
				</table>
			</body>
			</html>