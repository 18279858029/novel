@extends('layouts.default')
@section('title','登录')
@section('header')
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
@endsection
@section('body')
 <body class="login-layout blur-login"> 
  <div class="main-container"> 
   <div class="main-content"> 
    <div class="row"> 
     <div class="col-sm-10 col-sm-offset-1"> 
      <div class="login-container"> 
       <div class="center"> 
        <h1> <span class="white">后台登录</span> </h1> 
       </div> 
       <div class="space-6"></div> 
       <div class="position-relative"> 
        <div id="login-box" class="login-box visible widget-box no-border"> 
         <div class="widget-body">
         @include('wrong._messages')
         @include('wrong._errors') 
          <div class="widget-main"> 
           <h4 class="header blue lighter bigger"> <i class="ace-icon fa fa-coffee green"></i> 输入登录信息 </h4> 
           <div class="space-6"></div> 
           <form method="POST" action="{{ route('adminls') }}">
           {{ csrf_field()}} 
            <fieldset> 
             <label class="block clearfix"> <span class="block input-icon input-icon-right"> <input type="text" name="email" class="form-control" placeholder="邮箱" /> <i class="ace-icon fa fa-user"></i> </span> </label> 
             <label class="block clearfix"> <span class="block input-icon input-icon-right"> <input type="password" name="password" class="form-control" placeholder="密码" /> <i class="ace-icon fa fa-lock"></i> </span> </label> 
             <div class="space"></div> 
             <div class="clearfix"> 
              <label class="inline"> <input type="checkbox" class="ace" /> <span class="lbl"> 记住我</span> </label> 
              <button type="submit" class="width-35 pull-right btn btn-sm btn-primary"> <i class="ace-icon fa fa-key"></i> <span class="bigger-110">登录</span> </button> 
             </div> 
             <div class="space-4"></div> 
            </fieldset> 
           </form> 
          </div>
          <!-- /.widget-main --> 
          <div class="toolbar clearfix"> 
           <div> 
            <a href="#" data-target="#forgot-box" class="forgot-password-link"> <i class="ace-icon fa fa-arrow-left"></i> 忘记密码 </a> 
           </div>  
          </div> 
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
@section('footer') 
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
@endsection 
@endsection  