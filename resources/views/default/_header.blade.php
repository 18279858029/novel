<div id="navbar" class="navbar navbar-default"> 
   <div class="navbar-container" id="navbar-container"> 
    <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler"> <span class="sr-only">Toggle sidebar</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> 
    <!-- /section:basics/sidebar.mobile.toggle --> 
    <div class="navbar-header pull-left"> 
     <!-- #section:basics/navbar.layout.brand --> 
     <a href="index.html" class="navbar-brand"> <small> <img src="assets/avatars/logo.png" alt="" /> </small> </a> 
    </div> 
    <div class="navbar-buttons navbar-header pull-right" role="navigation"> 
     <ul class="nav ace-nav"> 
      <li class="green"> <a data-toggle="dropdown" class="dropdown-toggle" href="#"> <i class="ace-icon fa fa-envelope icon-animated-vertical"></i> <span class="badge badge-success">5</span> </a> 
       <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close"> 
        <li class="dropdown-header"> <i class="ace-icon fa fa-envelope-o"></i> 13条未读信息 </li> 
        <li class="dropdown-content"> 
         <ul class="dropdown-menu dropdown-navbar"> 
          <li> <a href="#"> <img src="assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" /> <span class="msg-body"> <span class="msg-title"> <span class="blue">B2C:</span> 系统产生20个错误，12个警告... </span> <span class="msg-time"> <i class="ace-icon fa fa-clock-o"></i> <span>2014-12-15 18:00:00</span> </span> </span> </a> </li> 
         </ul> </li> 
        <li class="dropdown-footer"> <a href="inbox.html"> 查看全部消息 <i class="ace-icon fa fa-arrow-right"></i> </a> </li> 
       </ul> </li> 
      <!-- #section:basics/navbar.user_menu --> 
      <li class="light-blue"> <a data-toggle="dropdown" href="#" class="dropdown-toggle"> <img class="nav-user-photo" src="assets/avatars/user.jpg" alt="Jason's Photo" /> <span class="user-info"> 欢迎您<br /> DJL </span> <i class="ace-icon fa fa-caret-down"></i> </a> 
       <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close"> 
        <li> <a href="#"> <i class="ace-icon fa fa-cog"></i> 系统设置 </a> </li> 
        <li> <a href="profile.html"> <i class="ace-icon fa fa-user"></i> 个人信息设置 </a> </li> 
        <li class="divider"></li> 
        <li> <a href="#"> <i class="ace-icon fa fa-power-off"></i> 登出 </a> </li> 
       </ul> </li> 
      <!-- /section:basics/navbar.user_menu --> 
     </ul> 
    </div> 
    <!-- /section:basics/navbar.dropdown --> 
   </div>
   <!-- /.navbar-container --> 
  </div>
  
    <div class="main-container" id="main-container"> 
   <!-- #section:basics/sidebar --> 
   <div id="sidebar" class="sidebar responsive"> 
    <ul class="nav nav-list"> 
     <li class="active"> <a href="index.html"> <i class="menu-icon fa fa-tachometer"></i> <span class="menu-text"> 总控制台 </span> </a> <b class="arrow"></b> </li> 
     <li class=""> <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-user"></i> <span class="menu-text"> 管理员管理 </span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b> 
      <ul class="submenu"> 
       <li class=""> <a href="{{ route('adminuser') }}"> <i class="menu-icon fa fa-caret-right"></i> 管理员列表 </a> <b class="arrow"></b> </li> 
       <li class=""> <a href="admincreate"> <i class="menu-icon fa fa-caret-right"></i> 添加管理员 </a> <b class="arrow"></b> </li>  
      </ul> </li> 
     <li class=""> <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-user"></i> <span class="menu-text"> 用户管理 </span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b> 
      <ul class="submenu"> 
       <li class=""> <a href="#"> <i class="menu-icon fa fa-caret-right"></i> 用户列表 </a> <b class="arrow"></b> </li> 
       <li class=""> <a href="#"> <i class="menu-icon fa fa-caret-right"></i> 添加用户 </a> <b class="arrow"></b> </li>  
      </ul> </li> 
    
     
    </ul>
    <!-- /.nav-list --> 
    <!-- #section:basics/sidebar.layout.minimize --> 
    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse"> 
     <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i> 
    </div> 
   </div> 
   <!-- /section:basics/sidebar --> 
   <div class="main-content"> 
    <!-- #section:basics/content.breadcrumbs --> 
    <div class="breadcrumbs" id="breadcrumbs"> 
     <ul class="breadcrumb"> 
      <li> <i class="ace-icon fa fa-home home-icon"></i> <a href="{{ route('home') }}">首页</a> </li> 
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