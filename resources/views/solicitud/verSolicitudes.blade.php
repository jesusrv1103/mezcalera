@extends('layouts.principal')
@section('contenido')
<!--\\\\\\\ contentpanel start\\\\\\-->
<div class="pull-left breadcrumb_admin clear_both">
	<div class="pull-left page_title theme_color">
		<h1>Catálogos</h1>
		<h2 class="">Solicitud Recibida</h2>
	</div>
	<div class="pull-right">
		<ol class="breadcrumb">
			<li><a href="?c=Inicio">Inicio</a></li>
			<li class="active">Solicitud Recibida</a></li>
		</ol>
	</div>
</div>
<div class="container clear_both padding_fix">
	<div class="row">
		<div class="col-md-12">
			<div class="block-web">
				<div class="header">
					<div class="row" style="margin-top: 15px; margin-bottom: 12px;">
						<div class="col-sm-7">
							<div class="actions"> </div>
							<h2 class="content-header theme_color" style="margin-top: -5px;">&nbsp;&nbsp;</h2>
						</div>
						<div class="col-md-5">
							<div class="btn-group pull-right">

							</div>
						</div>
					</div>
				</div>


				<div class="porlets-content">
					<div class="table-responsive">
						<table  class="display table table-bordered table-striped" id="dynamic-table">
							<thead>
								<tr>
									<th>Nombre del Artículo</th>
									<th>Cantidad Pedida</th>
									<th>U. Medida</th>
									<th>Cantidad Asignada</th>


								



								</tr>
							</thead>
							<tbody>
								@foreach($verSolicitud as $solicitud)
								<tr class="gradeA">

									<td>{{$solicitud->nombre}}</td>
									<td>{{$solicitud->cantidad}}</td>
									<td>{{$solicitud->idUnidad}}</td>
									<td>2</td>





								</tr>
								@include('solicitud.modal')
								@endforeach



							</tbody>
							<tfoot>
								<tr>
									<th>Nombre del Artículo</th>
									<th>Cantidad Pedida</th>
									<th>U. Medida</th>
									<th>Cantidad Asignada</th>


								</tr>
							</tfoot>
						</table>
					</div><!--/table-responsive-->
				</div><!--/porlets-content-->
			</div><!--/block-web-->
		</div><!--/col-md-12-->
	</div><!--/row-->



	@endsection















