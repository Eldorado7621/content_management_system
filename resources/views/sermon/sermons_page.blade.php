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
        
        <h1 class="page-title">Sermons</h1>

      </div>

    </div>

    <!-- - - - - - - - - - - - - end Breadcrumbs - - - - - - - - - - - - - - - -->
    
    <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

    <div id="content" class="page-content-wrap">
      
      <div class="container wide">

        <!--div class="sorting">
          
          <div class="sort-row">

            <div class="sort-col">
              <span>Sort by</span>
            </div>
            
            <div class="sort-col">
              <div class="mad-custom-select">
                <select data-default-text="Month">
                  <option value="Option 1">Option 1</option>
                  <option value="Option 2">Option 2</option>
                  <option value="Option 3">Option 3</option>
                </select>
              </div>
            </div>
            
          </div>

        </div-->
        
        <div class="entry-box flex-row item-col-3">
            
          <!-- Entry -->
          @foreach($sermons as $sermon)
          <div class="entry-col">

            <div class="entry">
                  
              <!-- - - - - - - - - - - - - - Entry attachment - - - - - - - - - - - - - - - - -->
              <div class="thumbnail-attachment">
                <a href="#"><img src="{{$sermon->thumbnail}}" alt=""></a>
              </div>
              
              <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->
              <div class="entry-body">
                    
                <h5 class="entry-title"><a href="#">{{$sermon->title}}</a></h5>
                <div class="entry-meta">
                  
                  <span>on</span>
                  <time class="entry-date" datetime="2018-03-18">{{$sermon->created_at}}</time>
                  <span>by</span>
                  <a href="#" class="entry-cat">{{$sermon->preacher}}</a>
                  
                </div>
                
                <div class="entry-action">
                </div>
                    
              </div>
                    
            </div>

          </div>
          @endforeach

      

        </div>
      
        <div class="page-nav justify-content-center">
          <ul class="">
            
            <li><a href="#">{{ $sermons->links() }}</a></li>
           
          </ul>
        </div>

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