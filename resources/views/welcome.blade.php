<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>MEZCAL | LOGIN</title>
  <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
  {!!Html::style('css/font-awesome.css')!!}
  {!!Html::style('css/bootstrap.min.css')!!}
  {!!Html::style('css/animate.css')!!}
  {!!Html::style('css/admin.css')!!}
  {!!Html::style('plugins/advanced-datatable/css/demo_table.css')!!}
  {!!Html::style('plugins/advanced-datatable/css/demo_page.css')!!}
  {!!Html::style('plugins/toggle-switch/toggles.css')!!}
  <!--link href="css/select2.css" rel="stylesheet"-->
  {!!Html::style('plugins/bootstrap-editable/bootstrap-editable.css')!!}
  {!!Html::style('plugins/dropzone/dropzone.css')!!}
  {!!Html::style('plugins/data-tables/DT_bootstrap.css')!!}
  {!!Html::style('plugins/data-tables/DT_bootstrap.css')!!}
  {!!Html::style('plugins/advanced-datatable/css/demo_table.css')!!}
  {!!Html::style('plugins/advanced-datatable/css/demo_page.css')!!}
  {!!Html::style('plugins/bootstrap-fileupload/bootstrap-fileupload.min.css')!!}
  {!!Html::style('href="plugins/file-uploader/css/blueimp-gallery.min.css')!!}
  {!!Html::style('href="plugins/file-uploader/css/jquery.fileupload.css')!!}
  {!!Html::style('href="plugins/file-uploader/css/jquery.fileupload-ui.css')!!}
  {!!Html::style('type="text/css" href="plugins/bootstrap-datepicker/css/datepicker.css')!!}
  {!!Html::style('type="text/css" href="plugins/bootstrap-timepicker/compiled/timepicker.css')!!}
  {!!Html::style('type="text/css" href="plugins/bootstrap-colorpicker/css/colorpicker.css')!!}
  {!!Html::style('href="plugins/select2/dist/css/select2.css')!!}

  <!--Estilos Para radio buton y switch -->
  {!!Html::style('plugins/toggle-switch/toggles.css')!!}
  {!!Html::style('plugins/checkbox/icheck.css')!!}
  {!!Html::style('plugins/checkbox/minimal/blue.css')!!}
  {!!Html::style('plugins/checkbox/minimal/green.css')!!}
  {!!Html::style('plugins/checkbox/minimal/grey.css')!!}
  {!!Html::style('plugins/checkbox/minimal/orange.css')!!}
  {!!Html::style('plugins/checkbox/minimal/pink.css')!!}
  {!!Html::style('plugins/checkbox/minimal/purple.css')!!}
  {!!Html::style('plugins/bootstrap-fileupload/bootstrap-fileupload.min.css')!!}

  <!--Wizard  -->
  {!!Html::style('plugins/wizard/css/smart_wizard.css')!!}
  <!-- Optional SmartWizard theme -->
  {!!Html::style('plugins/wizard/css/smart_wizard_theme_dots.css')!!}
  <!-- Optional SmartWizard theme -->
  {!!Html::style('plugins/wizard/css/smart_wizard_theme_circles.css')!!}
  {!!Html::style('plugins/wizard/css/smart_wizard_theme_arrows.css')!!}
  {!!Html::style('plugins/wizard/css/smart_wizard_theme_dots.css')!!}

</head>
<style>
body{
  background-color: #FAFAFA;  
}

#logosezac{
  max-width: 100%; 

}
#titulo{
  margin-bottom: -120px;
  margin-top: 0px;
}

</style>
</head>
<body style="background-color: #AEB6BF  ">
  <div class="row">
    <div class="col-md-3 col-sm-12">
      <center>
          <!--<img  src="{{asset('images/sezac.png')}}"
            id="logosezac">-->

          </center>
        </div>
        <div class="col-md-9">
        </div>
      </div>

      <div align="center" id="titulo" class="col-md-3 col-sm-12" style="position: absolute; top: 30%; left: 50%; transform: translateX(-50%) translateY(-50%);">
        <!--<center><h2> Bienvenido a <b>Control de Almacén</b></h2></center>
          <h5 id="intro" align="center">Sistema para el control de Almacén</h5>-->
          <img  src="{{asset('images/logosin.png')}}"
          id="logosezac">
        </div>

        <div class="login_content" >
          <div class="panel-heading border login_heading">INICIAR SESIÓN</div>  

          <form role="form" class="form-horizontal" action="{{route('home.index')}}">
           {{csrf_field()}}
           <div class="form-group">
            <div class="col-sm-10">
              <input type="text" placeholder="Usuario" name="usuario" id="inputEmail3" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10">
              <input type="password" placeholder="Password" name="password" id="inputPassword3" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <div class=" col-sm-10">
              <button class="btn btn-success" style="width: 100%;">Acceder</button>
            </div>
          </div>
        </form>
      </div>
      <!--<br><hr style="color:black">-->
      <!--<center><h4>Visitar sitio oficial de <a href="http://sezac.org.mx/">SEZAC</a></h4></center>-->
      {!!Html::script('js/jquery-2.1.0.js')!!}
      {!!Html::script('js/bootstrap.min.js')!!}
      {!!Html::script('js/common-script.js')!!}
      {!!Html::script('js/jquery.slimscroll.min.js')!!}
      {!!Html::script('js/jquery.sparkline.js')!!}
      {!!Html::script('js/sparkline-chart.js')!!}
      {!!Html::script('js/graph.js')!!}
      {!!Html::script('js/edit-graph.js')!!}
      {!!Html::script('plugins/kalendar/kalendar.js" type="text/javascript')!!}
      {!!Html::script('plugins/kalendar/edit-kalendar.js" type="text/javascript')!!}

      {!!Html::script('plugins/sparkline/jquery.sparkline.js" type="text/javascript')!!}
      {!!Html::script('plugins/sparkline/jquery.customSelect.min.js')!!}
      {!!Html::script('plugins/sparkline/sparkline-chart.js')!!}
      {!!Html::script('plugins/sparkline/easy-pie-chart.js')!!}
      {!!Html::script('plugins/morris/morris.min.js" type="text/javascript')!!}
      {!!Html::script('plugins/morris/raphael-min.js" type="text/javascript')!!}
      {!!Html::script('plugins/morris/morris-script.js')!!}
      {!!Html::script('plugins/demo-slider/demo-slider.js')!!}
      {!!Html::script('plugins/knob/jquery.knob.min.js')!!}




      {!!Html::script('js/jPushMenu.js')!!}
      {!!Html::script('js/side-chats.js')!!}
      {!!Html::script('js/jquery.slimscroll.min.js')!!}
      {!!Html::script('plugins/scroll/jquery.nanoscroller.js')!!}


    </body>
    </html>
