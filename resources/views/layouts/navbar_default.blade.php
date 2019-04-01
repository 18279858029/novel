@section('navbar_default')
<div id="navbar" class="navbar navbar-default"> 
   <div class="navbar-container" id="navbar-container"> 
    <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler"> <span class="sr-only">Toggle sidebar</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> 
    <!-- /section:basics/sidebar.mobile.toggle --> 
    <div class="navbar-header pull-left"> 
     <!-- #section:basics/navbar.layout.brand --> 
     <a href="index.html" class="navbar-brand"> <small> <img src="/assets/avatars/logo.png" alt="" /> </small> </a> 
    </div> 
    <div class="navbar-buttons navbar-header pull-right" role="navigation"> 
     <ul class="nav ace-nav">
     @if (Auth::check()) 
      <li class="green"> <a data-toggle="dropdown" class="dropdown-toggle" href="#"> <i class="ace-icon fa fa-envelope icon-animated-vertical"></i> <span class="badge badge-success">5</span> </a> 
       <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close"> 
        <li class="dropdown-header"> <i class="ace-icon fa fa-envelope-o"></i> 13条未读信息 </li> 
        <li class="dropdown-content"> 
         <ul class="dropdown-menu dropdown-navbar"> 
          <li> <a href="#"> <img src="/assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" /> <span class="msg-body"> <span class="msg-title"> <span class="blue">B2C:</span> 系统产生20个错误，12个警告... </span> <span class="msg-time"> <i class="ace-icon fa fa-clock-o"></i> <span>2014-12-15 18:00:00</span> </span> </span> </a> </li> 
         </ul> </li> 
        <li class="dropdown-footer"> <a href="inbox.html"> 查看全部消息 <i class="ace-icon fa fa-arrow-right"></i> </a> </li> 
       </ul> </li> 
      <!-- #section:basics/navbar.user_menu --> 
      <li class="light-blue"> <a data-toggle="dropdown" href="#" class="dropdown-toggle"> <img class="nav-user-photo" src="/assets/avatars/user.jpg" alt="Jason's Photo" /> <span class="user-info"> 欢迎您<br />{{ Auth::user()->name }}</span> <i class="ace-icon fa fa-caret-down"></i> </a> 
       <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close"> 
        <li> <a href="#"> <i class="ace-icon fa fa-cog"></i> 系统设置 </a> </li> 
        <li> <a href="profile.html"> <i class="ace-icon fa fa-user"></i> 个人信息设置 </a> </li> 
        <li class="divider"></li> 
        <li> <form action="{{ route('logout') }}" method="POST">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                    </form></li> 
       </ul> </li>
      @else
      <!-- #section:basics/navbar.user_menu --> 
      <li class="light-blue"> <a href="{{ route('adminlogin') }}" class="dropdown-toggle"> <img class="nav-user-photo" src="/assets/avatars/user.jpg" alt="Jason's Photo" /> <span class="user-info"> 请登录<br /></span> </a> 
     @endif 
      <!-- /section:basics/navbar.user_menu --> 
     </ul> 
    </div> 
    <!-- /section:basics/navbar.dropdown --> 
   </div>
   <!-- /.navbar-container --> 
  </div>
@show