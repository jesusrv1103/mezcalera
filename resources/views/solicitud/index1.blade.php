@extends('layouts.principal')
@section('contenido')
<!--\\\\\\\ contentpanel start\\\\\\-->
<div class="pull-left breadcrumb_admin clear_both">
  <div class="pull-left page_title theme_color">
    <h1>Catálogos</h1>
    <h2 class="">Solicitudes</h2>
  </div>
  <div class="pull-right">
    <ol class="breadcrumb">
      <li><a href="?c=Inicio">Inicio</a></li>
      <li class="active">Solicitudes</a></li>
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
              <h2 class="content-header theme_color" style="margin-top: -5px;">&nbsp;&nbsp;Solicitudes</h2>
            </div>
            <div class="col-md-5">
              <div class="btn-group pull-right">
                <b>

                  <div class="btn-group" style="margin-right: 10px;">
                    <a class="btn btn-sm btn-success tooltips" href="solicitud" style="margin-right: 10px;" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Regist"> <i class="fa fa-plus"></i> Registrar </a>

                  </div>

                </b>
              </div>
            </div>
          </div>
        </div>


        <div class="porlets-content">
          <div class="table-responsive">
            <table  class="display table table-bordered table-striped" id="dynamic-table">
              <thead>
                <tr>
                  <th>Cantidad Pedida</th>
                  <th>Unidad de Medida</th>
                  <th>Descripción</th>
                  <th>Cantidad Asignada</th>
                  
                  <td><center><b>Ver</b></center></td>
                  <td><center><b>Editar</b></center></td>
                  <td><center><b>Borrar</b></center></td>


                </tr>
              </thead>
              <tbody>

               <tr class="gradeA">

                <th>22</th>
                <th>Pza</th>
                <th>agua embotellada</th>
                <th>21</th>




                <th class="center">
                  <a href="" class="btn btn-info btn-sm" role="button"><i class="fa fa-eye"></i></a>   
                </td>

                <td class="center">
                  <a href="" class="btn btn-primary btn-sm" role="button"><i class="fa fa-edit"></i></a>                    
                </td>
                <td class="center">
                  <a class="btn btn-danger btn-sm" href="#modalEliminar" style="margin-right: 10px;"  
                  data-target="" data-toggle="modal" role="button"><i class="fa fa-eraser"></i></a></i></a>
                </td>

              </tr>



            </tbody>
            <tfoot>
              <tr>

               <th>Cantidad Pedida</th>
               <th>Unidad de Medida</th>
               <th>Descripción</th>
               <th>Cantidad Asignada</th>


               <td><center><b>Ver</b></center></td>
               <td><center><b>Editar</b></center></td>
               <td><center><b>Borrar</b></center></td>

             </tr>
           </tfoot>
         </table>
       </div><!--/table-responsive-->
     </div><!--/porlets-content-->
   </div><!--/block-web-->
 </div><!--/col-md-12-->
</div><!--/row-->



@endsection