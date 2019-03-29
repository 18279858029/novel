<!DOCTYPE html>
<html lang="en">
 <head> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
  <meta charset="utf-8" /> 
  <title>登录页面 - 统一开发平台 - UI库</title> 
  <meta name="description" content="Restyling jQuery UI Widgets and Elements" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" /> 
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css" /> 
  <link rel="stylesheet" href="/assets/css/font-awesome.min.css" /> 
  <link rel="stylesheet" href="/assets/css/ace-fonts.css" /> 
  <link rel="stylesheet" href="/assets/css/ace.min.css" id="main-ace-style" /> 
  <!--[if lte IE 9]>
      <link rel="stylesheet" href="/assets/css/ace-part2.min.css" />
    <![endif]--> 
  <!--[if lte IE 9]>
      <link rel="stylesheet" href="/assets/css/ace-ie.min.css" />
    <![endif]--> 
  <script src="/assets/js/ace-extra.min.js"></script> 
  <!--[if lte IE 8]>
    <script src="/assets/js/html5shiv.min.js"></script>
    <script src="/assets/js/respond.min.js"></script>
    <![endif]--> 
 </head>  
 <body class="login-layout blur-login"> 
  <div class="main-container"> 
   <div class="main-content"> 
    <div class="row"> 
     <div class="col-sm-10 col-sm-offset-1"> 
      <div class="login-container"> 
       <div class="center"> 
        <h1> <span class="white">这里放后台登录名称</span> </h1> 
       </div> 
       <div class="space-6"></div> 
       <div class="position-relative"> 
        <div id="login-box" class="login-box visible widget-box no-border"> 
         <div class="widget-body"> 
          <div class="widget-main"> 
           <h4 class="header green lighter bigger"> <i class="ace-icon fa fa-users blue"></i> 新用户注册 </h4> 
           <div class="space-6"></div> 
           <p> 输入详细信息: </p>  
           <form> 
            <fieldset> 
             <label class="block clearfix"> <span class="block input-icon input-icon-right"> <input type="email" class="form-control" placeholder="Email" /> <i class="ace-icon fa fa-envelope"></i> </span> </label> 
             <label class="block clearfix"> <span class="block input-icon input-icon-right"> <input type="text" class="form-control" placeholder="用户名" /> <i class="ace-icon fa fa-user"></i> </span> </label> 
             <label class="block clearfix"> <span class="block input-icon input-icon-right"> <input type="password" class="form-control" placeholder="密码" /> <i class="ace-icon fa fa-lock"></i> </span> </label> 
             <label class="block clearfix"> <span class="block input-icon input-icon-right"> <input type="password" class="form-control" placeholder="确认密码" /> <i class="ace-icon fa fa-retweet"></i> </span> </label> 
             <label class="block"> <input type="checkbox" class="ace" /> <span class="lbl"> 我接受 <a href="#">用户协议</a> </span> </label> 
             <div class="space-24"></div> 
             <div class="clearfix"> 
              <button type="reset" class="width-30 pull-left btn btn-sm"> <i class="ace-icon fa fa-refresh"></i> <span class="bigger-110">重置</span> </button> 
              <button type="button" class="width-65 pull-right btn btn-sm btn-success"> <span class="bigger-110">注册</span> <i class="ace-icon fa fa-arrow-right icon-on-right"></i> </button> 
             </div> 
            </fieldset> 
           </form> 
          </div>
          <!-- /.widget-main --> 
         </div>
         <!-- /.widget-body --> 
        </div>
        <!-- /.login-box --> 
 
       </div>
       <!-- /.position-relative --> 
      </div> 
     </div>
     <!-- /.col --> 
    </div>
    <!-- /.row --> 
   </div>
   <!-- /.main-content --> 
  </div>
  <!-- /.main-container --> 
  <!-- basic scripts --> 
  <!--[if !IE]> --> 
  <script type="text/javascript">
      window.jQuery || document.write("<script src='/assets/js/jquery.min.js'>"+"<"+"/script>");
    </script> 
  <!-- <![endif]--> 
  <!--[if IE]>
    <script type="text/javascript">
     window.jQuery || document.write("<script src='/assets/js/jquery1x.min.js'>"+"<"+"/script>");
    </script>
    <![endif]--> 
  <script type="text/javascript">
      if('ontouchstart' in document.documentElement) document.write("<script src='/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
    </script> 
  <!-- inline scripts related to this page --> 
  <script type="text/javascript">
      jQuery(function($) {
       $(document).on('click', '.toolbar a[data-target]', function(e) {
        e.preventDefault();
        var target = $(this).data('target');
        $('.widget-box.visible').removeClass('visible');//hide others
        $(target).addClass('visible');//show target
       });
      });

    </script>   
 </body>
</html>