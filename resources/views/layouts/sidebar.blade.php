<!-- #section:basics/sidebar --> 
   <div id="sidebar" class="sidebar responsive"> 
    <ul class="nav nav-list"> 
     <li class="active"> <a href="index.html"> <i class="menu-icon fa fa-tachometer"></i> <span class="menu-text"> 总控制台 </span> </a> <b class="arrow"></b> </li> 
     <li class=""> <a href="#" class="dropdown-toggle"> <i class="menu-icon fa fa-user"></i> <span class="menu-text"> 管理员管理 </span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b> 
      <ul class="submenu"> 
       <li class=""> <a href="{{ route('admin.index') }}"> <i class="menu-icon fa fa-caret-right"></i> 管理员列表 </a> <b class="arrow"></b> </li> 
       <li class=""> <a href="{{ route('admin.create') }}"> <i class="menu-icon fa fa-caret-right"></i> 添加管理员 </a> <b class="arrow"></b> </li>  
      
      </ul> </li> 
    </ul>
    <!-- /.nav-list --> 
    <!-- #section:basics/sidebar.layout.minimize --> 
    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse"> 
     <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i> 
    </div> 
   </div> 
   <!-- /section:basics/sidebar --> 