 @extends('layouts.principal')
 @section('contenido')

 {!!Html::style('https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css')!!}
 <!--\\\\\\\ contentpanel start\\\\\\-->
 <div class="pull-left breadcrumb_admin clear_both">
  <div class="pull-left page_title theme_color">
    <h1>Catálogos</h1>
    <h2 class="">Artículo</h2>
  </div>
  <div class="pull-right">
    <ol class="breadcrumb">
      <li><a href="?c=Inicio">Inicio</a></li>
      <li class="active">Artículo</a></li>
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
              <h2 class="content-header theme_color" style="margin-top: -5px;">&nbsp;&nbsp;Artículos</h2>
            </div>
            <div class="col-md-5">
              <div class="btn-group pull-right">
                <b>

                  <div class="btn-group" style="margin-right: 10px;">
                    <a class="btn btn-sm btn-success tooltips" href="articulos/create" style="margin-right: 10px;" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Registrar nueva Direccion"> <i class="fa fa-plus"></i> Registrar </a>

                  </div>
                  <p></p>
                  <div>
                    <form>
                     <input id="searchTerm" type="text" onkeyup="doSearch()" />
                   </form>
                 </div>


               </b>
             </div>
           </div>
         </div>
       </div>


       <div class="porlets-content">
        <div class="table-responsive">
          <table  class="display table table-bordered " id="datos">
            <thead>
              <tr >
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Almacén</th>
                <th>Unidad de Medida</th>
                <th>Fecha Caducidad</th>
                <th>Tipo Artículo</th>
                <th>Partida</th>

                <td><center><b>Editar</b></center></td>
                <td><center><b>Borrar</b></center></td>

              </tr>
            </thead>
            <tbody>

              @foreach($articulos as $articulos)
              @if($articulos->cantidad <= 1 and  $articulos->tipoArticulo=="CONSUMIBLE")
              <tr class="gradeA"  >
                <td bgcolor="#FF0000">{{$articulos->nombre}}</td>
                <td >{{$articulos->cantidad}}</td>
                <td>{{$articulos->nomA}}</td>
                <td >{{$articulos->UnidadMedidad}}</td>
                <td >{{$articulos->fechaCaducidad}}</td>
                <td>{{$articulos->tipoArticulo}}</td>

                <td>{{$articulos->numeroPartida}}</td>
                <td class="center">
                  <a href="{{URL::action('ArticulosController@edit',$articulos->id)}}" class="btn btn-primary btn-sm" role="button"><i class="fa fa-edit"></i></a>
                </td>
                <td class="center">
                  <a class="btn btn-danger btn-sm" data-target="#modal-delete-{{$articulos->id}}" data-toggle="modal" style="margin-right: 10px;"  role="button"><i class="fa fa-eraser"></i></a>
                </td>
              </tr>  
              @elseif($articulos->cantidad < 12 and  $articulos->tipoArticulo=="PAPELERIA")
              <tr class="gradeA"  >
                <td bgcolor="#FF0000">{{$articulos->nombre}}</td>
                <td >{{$articulos->cantidad}}</td>
                <td>{{$articulos->nomA}}</td>
                <td >{{$articulos->UnidadMedidad}}</td>
                <td >{{$articulos->fechaCaducidad}}</td>
                <td>{{$articulos->tipoArticulo}}</td>

                <td>{{$articulos->numeroPartida}}</td>
                <td class="center">
                  <a href="{{URL::action('ArticulosController@edit',$articulos->id)}}" class="btn btn-primary btn-sm" role="button"><i class="fa fa-edit"></i></a>
                </td>
                <td class="center">
                  <a class="btn btn-danger btn-sm" data-target="#modal-delete-{{$articulos->id}}" data-toggle="modal" style="margin-right: 10px;"  role="button"><i class="fa fa-eraser"></i></a>
                </td>
              </tr>
              @else
              <tr class="gradeA"  >
                <td>{{$articulos->nombre}}</td>
                <td >{{$articulos->cantidad}}</td>
                <td>{{$articulos->nomA}}</td>
                <td >{{$articulos->UnidadMedidad}}</td>
                <td >{{$articulos->fechaCaducidad}}</td>
                <td>{{$articulos->tipoArticulo}}</td>

                <td>{{$articulos->numeroPartida}}</td>
                <td class="center">
                  <a href="{{URL::action('ArticulosController@edit',$articulos->id)}}" class="btn btn-primary btn-sm" role="button"><i class="fa fa-edit"></i></a>
                </td>
                <td class="center">
                  <a class="btn btn-danger btn-sm" data-target="#modal-delete-{{$articulos->id}}" data-toggle="modal" style="margin-right: 10px;"  role="button"><i class="fa fa-eraser"></i></a>
                </td>
              </tr>
              @endif
              @include('articulo.modal')
              @endforeach
            </tbody>
            <tfoot>
              <tr>
               <th>Nombre</th>
               <th>Cantidad</th>
               <th>Almacén</th>
               <th>Unidad de Medida</th>
               <th>Fecha Caducidad</th>
               <th>Tipo Artículo</th>
               <th>Partida</th>
               <td><center><b>Editar</b></center></td>
               <td><center><b>Borrar</b></center></td>

             </tr>
           </tfoot>
         </table>

         <ul class="pagination pagination-lg pager" id="myPager"></ul>
       </div><!--/table-responsive-->
     </div><!--/porlets-content-->
   </div><!--/block-web-->
 </div><!--/col-md-12-->
</div><!--/row-->


{!!Html::script('https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js')!!}

<script language="javascript">
  function doSearch()
  {
    var tableReg = document.getElementById('datos');
    var searchText = document.getElementById('searchTerm').value.toLowerCase();
    var cellsOfRow="";
    var found=false;
    var compareWith="";

      // Recorremos todas las filas con contenido de la tabla
      for (var i = 1; i < tableReg.rows.length; i++)
      {
        cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
        found = false;
        // Recorremos todas las celdas
        for (var j = 0; j < cellsOfRow.length && !found; j++)
        {
          compareWith = cellsOfRow[j].innerHTML.toLowerCase();
          // Buscamos el texto en el contenido de la celda
          if (searchText.length == 0 || (compareWith.indexOf(searchText) > -1))
          {
            found = true;
          }
        }
        if(found)
        {
          tableReg.rows[i].style.display = '';
        } else {
          // si no ha encontrado ninguna coincidencia, esconde la
          // fila de la tabla
          tableReg.rows[i].style.display = 'none';
        }
      }
    }





$(document).ready( function () {
    $('#datos').DataTable();
} );

  </script>

  @endsection