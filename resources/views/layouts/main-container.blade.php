   <div class="main-container" id="main-container"> 
   <!-- #section:basics/sidebar --> 
   @include('layouts.sidebar')
   <!-- /section:basics/sidebar --> 
   <div class="main-content"> 
    <!-- #section:basics/content.breadcrumbs --> 
    @section('breadcrumbs')
      @include('layouts.breadcrumbs')
    @show
    @section('content')
      @include('layouts.page-content')
    @show
    
   </div>
   <!-- /.main-content --> 
  </div>
  <!-- /.main-container --> 
