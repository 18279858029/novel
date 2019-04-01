<!DOCTYPE html>
<html lang="en">
 <head> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
  <meta charset="utf-8" /> 
  <title>@yield('title', '首页 - 统一开发平台')</title> 
  @section('header')
  <meta name="description" content="This is page-header (.page-header &gt; h1)" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" /> 
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css" /> 
  <link rel="stylesheet" href="/assets/css/font-awesome.min.css" /> 
  <link rel="stylesheet" href="/assets/css/ace.min.css" id="main-ace-style" /> 
  <!--[if lte IE 9]>
            <link rel="stylesheet" href="/assets/css/ace-part2.min.css" />
        <![endif]--> 
  <link rel="stylesheet" href="/assets/css/ace-skins.min.css" /> 
  <link rel="stylesheet" href="/assets/css/ace-rtl.min.css" /> 
  <!--[if lte IE 9]>
          <link rel="stylesheet" href="/assets/css/ace-ie.min.css" />
        <![endif]--> 
  <!--[if lte IE 8]>
        <script src="/assets/js/html5shiv.min.js"></script>
        <script src="/assets/js/respond.min.js"></script>
        <![endif]--> 
  @show
 </head>
 @section('body') 
 <body class="no-skin">
  @include('layouts.navbar_default') 
  @include('layouts.main-container')
  @section('footer')
    @include('layouts._footer')
  @show
 </body>
 @show
</html>