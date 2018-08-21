@extends('layouts.principal')
@section('contenido')
<script type="text/javascript">
	(function myFunction() {
		document.getElementById("este").setClass = "opened";
		document.getElementById("este").style = "display:block";
	})();
	//myFunction();
</script>

<style type="text/css">
.object-fit_fill { object-fit: fill }
.object-fit_contain { object-fit: contain }
.object-fit_cover { object-fit: cover }
.object-fit_none { object-fit: none }
.object-fit_scale-down { object-fit: scale-down }
/*#example1 {
    border: 2px solid black;
    padding: 25px;
    background: url("{{asset('images/logozacatecas.png')}}");
    background-repeat: no-repeat;
    background-size: auto;
}
.image-container{
  background-image: url("{{asset('images/logo.jpg')}}");
  background-size: contain;
  height:100%;
  width: 100%;
  }*/
  .image-container{
  	/*height: 800px;*/
  	height: 1040px;
  	width: 1140px;
  	background-color: #FFFFFF;
  	position: relative;
  }

  .image-container > img {
  	height: 60%;
  	width: 100%;
  	/*border:0;
  	text-decoration: none;
  	background: white;*/
  }

  .image-container > h1 {
  	position: absolute;
  	top: 0;
  	left: 0;
  }
</style>
<!--\\\\\\\ container  start \\\\\\-->
<!--<div class="row col-md-6 col-md-offset-3">
	<img align="center" style="max-width: 100%; margin-top: 8%" src="{{asset('images/logozacatecas.png')}}">
</div>-->
<!--\\\\\\\ container  end \\\\\\-->

<!--\\\\\\\ container  start \\\\\\-->
<div class="row col-md-0 col-md-offset-0 image-container">	
	<img src="{{asset('images/logo_edited.png')}}">
</div>
<!--\\\\\\\ container  end \\\\\\-->
@endsection