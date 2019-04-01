@extends('layouts.default')
@section('title','管理员列表')
@section('breadcrumbs')
<div class="breadcrumbs" id="breadcrumbs"> 
   <ul class="breadcrumb"> 
    <li> <i class="ace-icon fa fa-home home-icon"></i> <a href="index.html">管理员列表</a> </li> 
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
  @include('wrong._messages')
  <div class="col-xs-12"> 
   <table id="sample-table-1" class="table table-striped table-bordered table-hover" style=" text-align:center"> 
    <thead> 
     <tr> 
      <th>管理员</th> 
      <th class="hidden-480">邮箱</th>
      <th> 状态 </th>
      <th class="hidden-480">操作</th> 
     </tr> 
    </thead> 
    <tbody>
    @foreach($user as $val)  
     <tr> 
      <td>{{$val->name}}</td> 
      <td>{{$val->email}}</td>
      <td>{{$val->status ? "普通用户" : "管理员"}}</td>
      <td> 
       <div class="hidden-sm hidden-xs btn-group"> 
        <a href="{{ route('admin.edit',$val->id) }}"><button class="btn btn-xs btn-info"> <i class="ace-icon fa fa-pencil bigger-120"></i> </button> </a>
        <a  href="#">
            <form action="{{ route('admin.destroy',$val->id) }}" method="POST">
              {{ csrf_field() }}
              {{ method_field('DELETE') }}
              <button class="btn btn-xs btn-danger" type="submit"> <i class="ace-icon fa fa-trash-o bigger-120"></i> </button>
            </form>
          </a>
       </div> 
      </td> 
     </tr> 
    @endforeach
    </tbody> 
   </table> 
  </div>
  {!! $user->render() !!}
@endsection
