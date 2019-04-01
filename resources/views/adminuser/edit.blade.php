@extends('layouts.default')
@section('title','修改管理员')
@section('breadcrumbs')
<div class="breadcrumbs" id="breadcrumbs"> 
   <ul class="breadcrumb"> 
    <li> <i class="ace-icon fa fa-home home-icon"></i> <a href="index.html">管理员修改</a> </li> 
   </ul>
   <!-- /.breadcrumb --> 
   <!-- #section:basics/content.searchbox --> 
   <div class="nav-search" id="nav-search"> 
    <form class="form-search"> 
     <span class="input-icon"> <input type="text" placeholder="请输入关键字 ..." class="nav-search-input" id="nav-search-input" autocomplete="off" /> <i class="ace-icon fa fa-search nav-search-icon"></i> </span> 
    </form> 
   </div>
   <!-- /.nav-search --> 
   <!-- /section:basics/content.searchbox --> 
  </div>
@endsection
@section('content')
  <div class="page-content">
  @include('wrong._messages')
   <div class="page-content-area">
    <div class="row"> 
     <div class="col-xs-12">
     @include('wrong._errors') 
      <!-- PAGE CONTENT BEGINS --> 
      <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.update',$users->id) }}"> 
      {{ csrf_field() }}
      {{ method_field('PATCH') }}
       <!-- #section:elements.form --> 
       <div class="form-group"> 
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 管理员名称：</label> 
        <div class="col-sm-9"> 
         <input type="text" name="name" id="form-field-1" placeholder="管理员名称" class="col-xs-10 col-sm-5" value="{{ $users->name }}" /> 
        </div> 
       </div> 
       <div class="form-group"> 
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">邮箱： </label> 
        <div class="col-sm-9"> 
         <input type="email" name="email" id="form-field-1-1" placeholder="邮箱" class=" col-xs-10 col-sm-5" value="{{ $users->email }}" /> 
        </div> 
       </div> 
       <div class="form-group"> 
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 密码：</label> 
        <div class="col-sm-9"> 
         <input type="password" name="password" id="form-field-1" placeholder="密码" class="col-xs-10 col-sm-5" value="{{ old('password') }}" /> 
        </div> 
       </div> 
       <div class="form-group"> 
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 确认密码：</label> 
        <div class="col-sm-9"> 
         <input type="password" name="password_confirmation" id="form-field-1" placeholder="确认密码"  class="col-xs-10 col-sm-5" value="{{ old('password_confirmation') }}" /> 
        </div> 
       </div> 
       <!-- /section:elements.form --> 
       <div class="space-4"></div> 
       <div class="form-group"> 
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2">状态： </label> 
          <div class="col-xs-3">
            <label>
              <input name="status" class="ace ace-switch ace-switch-6" type="checkbox" value="{{ $users->status }}" />
              <span class="lbl"></span>
            </label>
          </div>
       </div> 
       <div class="clearfix form-actions"> 
        <div class="col-md-offset-3 col-md-9"> 
         <button class="btn btn-info" type="submit"> <i class="ace-icon fa fa-check bigger-110"></i> 添加 </button> &nbsp; &nbsp; &nbsp; 
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

@endsection