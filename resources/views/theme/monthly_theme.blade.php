@include("includes/header")
<body>

  <div class="loader"></div>

    <!-- - - - - - - - - - - - - - Wrapper - - - - - - - - - - - - - - - - -->

  <div id="wrapper" class="wrapper-container">

    <!-- - - - - - - - - - - - - Mobile Menu - - - - - - - - - - - - - - -->

    <nav id="mobile-advanced" class="mobile-advanced"></nav>

    <!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->

    @include('includes/menu_header')
    <!-- - - - - - - - - - - - - end Header - - - - - - - - - - - - - - - -->

    <!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

    <div class="breadcrumbs-wrap style-3" data-bg="images/1920x336_bg1.jpg">

      <div class="container">
        
        <h1 class="page-title">Monthly Theme</h1>

      </div>

    </div>

    <!-- - - - - - - - - - - - - end Breadcrumbs - - - - - - - - - - - - - - - -->
    
    <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

    <div id="content" class="page-content-wrap">
      
      <div class="container wide">
        @if($count==1)
      <div class="single-post">
         <h1 class="align-center">{{$theme->title}}</h1>
            <div class="content-element3">
             <img src="images/1350x728_img4.jpg" alt="">
            </div>
          
            <div class="content-element4">
              <div class="row">
                <div class="col-md-4">
                  <h5 class="e-title">Details</h5>
                  <ul class="custom-list">
                    <li><span>Theme:</span> <a href="#">{{$theme->title}}</a></li>
                    <li><span>Reference:</span> <a href="#">{{$theme->reference}}</a></li>
                    <li><span>Message:</span> <a href="#" class="link-text">{{$theme->message}}</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
      
          <div class="page-nav justify-content-center">
          
          </div>
          @else
          <h2> No Theme yet</h2>
          @endif

       </div>

    </div>

    <!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->

    <!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->
    @include("includes/footer")

    <!-- - - - - - - - - - - - - end Footer - - - - - - - - - - - - - - - -->

  </div>

  <!-- - - - - - - - - - - - end Wrapper - - - - - - - - - - - - - - -->

  <!-- JS Libs & Plugins
  ============================================ -->
  @include("includes/plugins")
  
</body>
</html>