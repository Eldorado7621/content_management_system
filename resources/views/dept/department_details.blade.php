@include("includes/header")

<body>

  <div class="loader"></div>

  <!--cookie-->
  <!-- <div class="cookie">
          <div class="container">
            <div class="clearfix">
              <span>Please note this website requires cookies in order to function correctly, they do not store any specific information about you personally.</span>
              <div class="f-right"><a href="#" class="button button-type-3 button-orange">Accept Cookies</a><a href="#" class="button button-type-3 button-grey-light">Read More</a></div>
            </div>
          </div>
        </div>-->

  <!-- - - - - - - - - - - - - - Wrapper - - - - - - - - - - - - - - - - -->

  <div id="wrapper" class="wrapper-container">

    <!-- - - - - - - - - - - - - Mobile Menu - - - - - - - - - - - - - - -->

    <nav id="mobile-advanced" class="mobile-advanced"></nav>

    <!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->
    @include('includes/menu_header')

    <!-- - - - - - - - - - - - - end Header - - - - - - - - - - - - - - - -->

    <!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

    <div class="breadcrumbs-wrap">

      <div class="container">
        
        <h1 class="page-title" style="margin-top:100px;">Departments</h1>

        <ul class="breadcrumbs">

          <li><a href="">Home</a></li>
          <li>Departments</li>

        </ul>

      </div>

    </div>

    <!-- - - - - - - - - - - - - end Breadcrumbs - - - - - - - - - - - - - - - -->
    
    <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->
    <div id="content" class="page-content-wrap">

      <div class="container wide">

     
        <h2>{{$depts->name}}</h2>
        <p><b>{{$depts->refrence}}:</b>{{$depts->bible}}</p>
        
        
        <div class="row">
          
          <main id="main" class="col-lg-9">
            
            <figure class="content-element3">
              <img src="{{$depts->img}}" alt="" height="500px" width="500ppx">
            </figure>

            <div class="content-element3">
              
              <p>{{$depts->description}}</p>
            </div>

           
         </main>
          

        </div>
       

      </div>
      
    </div>

    <!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->

    <!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->


        <!-- main footer -->
        

    @include("includes/footer")

    <!-- - - - - - - - - - - - - end Footer - - - - - - - - - - - - - - - -->

  </div>

  <!-- - - - - - - - - - - - end Wrapper - - - - - - - - - - - - - - -->

  <!-- JS Libs & Plugins
  ============================================ -->
  
 @include("includes/plugins")
  
</body>
</html>