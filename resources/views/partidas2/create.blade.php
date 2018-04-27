@extends('layouts.principal')
@section('contenido')

<div class="pull-left breadcrumb_admin clear_both">
  <div class="pull-left page_title theme_color">
    <h1>Inicio</h1>
    <h2 class="">Partidas</h2>
  </div>
  <div class="pull-right">
    <ol class="breadcrumb">
      <li><a href="?c=Inicio">Inicio</a></li>
      <li><a href="?c=localidad">Partidas</a></li>
      <li class="active">Alta Partida</li>
    </ol>
  </div>
</div>
<div class="container clear_both padding_fix">
  <div class="row">
    <div class="col-md-12">
      <div class="block-web">
        <div class="header">
          <div class="row" style="margin-top: 15px; margin-bottom: 12px;">
            <div class="col-sm-8">
              <div class="actions"> </div>
              <h2 class="content-header theme_color" style="margin-top: -5px;">Registrar Presupuesto de Partida</h2>
            </div>
            <div class="col-md-4">
              <div class="btn-group pull-right">
                <div class="actions"> 
                </div>
              </div>
            </div>    
          </div>
        </div>
        <div class="porlets-content">
          <form action="{{route('partidas2.store')}}" method="POST" class="form-horizontal row-border"  parsley-validate novalidate>
           {{csrf_field()}}

           <div class="form-group">
            <label class="col-sm-3 control-label">Partida<strog class="theme_color">*</strog></label>
            <div class="col-sm-6">
              <select name="idPartida" class="form-control" required>
                @foreach($partidas as $partida)
                <option value="{{$partida->id}}">
                  {{$partida->numeroPartida}}
                </option>
                @endforeach
              </select>
              <div class="help-block with-errors"></div>
            </div>
          </div><!--/form-group-->
          

          <div class="form-group">
            <label class="col-sm-3 control-label">Unidad de Medida:<strog class="theme_color">*</strog></label>
            <div class="col-sm-6">
              <select class="form-control" name="UnidadMedidad" required id="ambito">
                <option value="ENERO"> 
                 ENERO          
               </option>
               <option value="FEBRERO"> 
                 FEBRERO           
               </option>

               <option value="MARZO"> 
                 MARZO          
               </option>
               <option value="ABRIL"> 
                 ABRIL          
               </option>
               <option value="MAYO"> 
                 MAYO          
               </option>

               <option value="JUNIO"> 
                 JUNIO          
               </option>

               <option value="JULIO"> 
                 JULIO          
               </option>

               <option value="AGOSTO"> 
                 AGOSTO          
               </option>

               <option value="SEPTIEMBRE"> 
                 SEPTIEMBRE          
               </option>

               <option value="OCTUBRE"> 
                 OCTUBRE          
               </option>

               <option value="NOVIEMBRE"> 
                 NOVIEMBRE          
               </option>

               <option value="DICIEMBRE"> 
                 DICIEMBRE          
               </option>


             </select>
           </div>
         </div><!--/form-group-->

         <div class="form-group">    
          <label class="col-sm-3 control-label">Presupuesto Asignado: <strog class="theme_color">*</strog></label>
          <div class="col-sm-4">
            <div class="input-group">
             <div class="input-group-addon">$</div>


             <input name="sueldo_Fijo" maxlength="9" type="text" value="" min="1" max='9999999' step="100" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" required value="" placeholder="Ingresar el Saldo" onkeypress=" return soloNumeros(event);"/>
           </div>
         </div>
       </div>

       <div class="form-group">    
        <label class="col-sm-3 control-label">Presupuesto Gastado: <strog class="theme_color">*</strog></label>
        <div class="col-sm-4">
          <div class="input-group">
           <div class="input-group-addon">$</div>


           <input name="sueldo_Fijo" maxlength="9" type="text" value="" min="1" max='9999999' step="100" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" required value="" placeholder="Ingresar el Saldo " onkeypress=" return soloNumeros(event);"/>
         </div>
       </div>
     </div>




     <div class="form-group">
      <div class="col-sm-offset-7 col-sm-5">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{route('partidas.store')}}" class="btn btn-default"> Cancelar</a>
      </div>
    </div><!--/form-group-->
  </form>
</div><!--/porlets-content-->
</div><!--/block-web-->
</div><!--/col-md-12-->
</div><!--/row-->
</div><!--/container clear_both padding_fix--> 


@endsection