@extends('layouts.principal')
@section('contenido')

        <div class="contentpanel">
          <!--\\\\\\\ contentpanel start\\\\\\-->
          <div class="pull-left breadcrumb_admin clear_both">
            <div class="pull-left page_title theme_color">
              <h1>calendar</h1>
              <h2 class="">Subtitle goes here...</h2>
            </div>
            <div class="pull-right">
              <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">APPS</a></li>
                <li class="active">calendar</li>
              </ol>
            </div>
          </div>
          
          
          
          <div class="container clear_both padding_fix">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</strong>. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <div class="row">
              
              <div class="col-md-2">
                <div class="panel">
                  
                  <div id='external-events'>
                    <div class="fc-heading">
                      <h5>Draggable Events</h5>
                    </div>
                    <div class="fc-body">
                      <div class='external-event'>My Event 1</div>
                      <div class='external-event'>My Event 2</div>
                      <div class='external-event'>My Event 3</div>
                      <div class='external-event'>My Event 4</div>
                      <div class='external-event'>My Event 5</div>
                      <p>
                        <input type='checkbox' id='drop-remove' /> <label for='drop-remove'>remove after drop</label>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-10">
                <div class="block-web">
                  <div id='calendar'></div>
                </div>
              </div>
              
            </div>
          </div>
          
          
          
        </div>
        <!--\\\\\\\ content panel end \\\\\\-->


@endsection