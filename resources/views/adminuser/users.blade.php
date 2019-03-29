@extends('default.default')
@section('title','管理员列表')
@section('content')
  @include('default._header')
 <html>
 <head></head>
 <body>
  <div class="col-xs-12"> 
   <table id="sample-table-1" class="table table-striped table-bordered table-hover"> 
    <thead> 
     <tr> 
      <th>管理员</th> 
      <th class="hidden-480">联系电话</th>
      <th> 状态 </th>
      <th class="hidden-480">操作</th> 
     </tr> 
    </thead> 
    <tbody>  
     <tr> 
      <td> <a href="#">段经理</a> </td> 
      <td>18279858029</td> 
      <td class="hidden-480">启用</td>
      <td> 
       <div class="hidden-sm hidden-xs btn-group"> 
        <button class="btn btn-xs btn-success" title=""> <i class="ace-icon fa fa-search-plus bigger-120"></i> </button> 
        <button class="btn btn-xs btn-info"> <i class="ace-icon fa fa-pencil bigger-120"></i> </button> 
        <button class="btn btn-xs btn-danger"> <i class="ace-icon fa fa-trash-o bigger-120"></i> </button> 
        <button class="btn btn-xs btn-warning"> <i class="ace-icon fa fa-flag bigger-120"></i> </button> 
        <button class="btn btn-xs btn-success"> <i class="ace-icon fa fa-check bigger-120"></i> </button> 
       </div> </td> 
     </tr> 
    
    </tbody> 
   </table> 
  </div>
 </body>
</html>

  @include('default._footer')
@stop