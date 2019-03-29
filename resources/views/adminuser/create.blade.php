@extends('default.default')
@section('title','添加管理员')
@section('content')
  @include('default._header')
<html>
 <head></head>
 <body>
  <div class="page-content"> 
   <div class="page-content-area"> 
    <div class="row"> 
     <div class="col-xs-12"> 
      <!-- PAGE CONTENT BEGINS --> 
      <form class="form-horizontal" role="form" method="POST"> 
       <!-- #section:elements.form --> 
       <div class="form-group"> 
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 管理员名称：</label> 
        <div class="col-sm-9"> 
         <input type="text" id="form-field-1" placeholder="管理员名称" class="col-xs-10 col-sm-5" /> 
        </div> 
       </div> 
       <div class="form-group"> 
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">联系电话： </label> 
        <div class="col-sm-9"> 
         <input type="text" id="form-field-1-1" placeholder="联系电话" class=" col-xs-10 col-sm-5" /> 
        </div> 
       </div> 
       <!-- /section:elements.form --> 
       <div class="space-4"></div> 
       <div class="form-group"> 
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2">状态： </label> 
          <div class="col-xs-3">
            <label>
              <input name="switch-field-1" class="ace ace-switch ace-switch-6" type="checkbox" />
              <span class="lbl"></span>
            </label>
          </div>
       </div> 
       <div class="clearfix form-actions"> 
        <div class="col-md-offset-3 col-md-9"> 
         <button class="btn btn-info" type="button"> <i class="ace-icon fa fa-check bigger-110"></i> 立即提交 </button> &nbsp; &nbsp; &nbsp; 
         <button class="btn" type="reset"> <i class="ace-icon fa fa-undo bigger-110"></i> 重置 </button> 
        </div> 
       </div> 
      </form>
     </div>  
    </div>
    <!-- /.col --> 
   </div>
   <!-- /.row --> 
  </div>
  <!-- /.page-content-area --> 
 </body>
</html>

  @include('default._footer')
@stop