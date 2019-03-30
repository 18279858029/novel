@extends('default.default')
@section('title','首页')
@section('content')
  @include('default._header') 
    <div class="page-content"> 
     <!-- /section:settings.box --> 
     <div class="page-content-area"> 
      <div class="row"> 
       <div class="col-xs-12"> 
        <!-- PAGE CONTENT BEGINS --> 
        <div class="row center"> 
         <img src="assets/avatars/logo_2.png" /> 
        </div>
        <!-- /.row --> 
        <!-- PAGE CONTENT ENDS --> 
       </div>
       <!-- /.col --> 
      </div>
      <!-- /.row --> 
     </div>
     <!-- /.page-content-area --> 
    </div>
    <!-- /.page-content --> 
   </div>
  @include('default._footer')
@stop