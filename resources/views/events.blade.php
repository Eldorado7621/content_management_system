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
        
        <h1 class="page-title" style="margin-top:100px;">Programs List</h1>

        <ul class="breadcrumbs">

          <li><a href="">Home</a></li>
          <li>Programs List</li>

        </ul>

      </div>

    </div>

    <!-- - - - - - - - - - - - - end Breadcrumbs - - - - - - - - - - - - - - - -->
    
    <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

    <div id="content" class="page-content-wrap">
      
      <div class="container wide">
        
        <div class="content-element2">
          
          <h3 class="title">Church Programs for {{date('Y')}}</h3>

          <hr class="item-divider">

        </div>

        <div class="event-box style-2 list-type">
          
          <!-- Event -->
       
          
          @foreach($events as $event)
          <div class="event">

            <div class="event-date">
              
              <h3 class="numb">{{date('d', strtotime($event->from))}}</h3>
              <h6 class="month">{{ date('F', strtotime($event->from))}}</h6>
              

            </div>

            <div class="event-img">
              
              <a href="#"><img src="images/545x308_img5.jpg" alt=""></a>

            </div>
            
            <div class="">
              
              <h5 class="event-title"><a href="#">{{$event->theme}}</a></h5>

              @foreach($event->event_details as $detail)
                <p>{{$detail->title}}<p>
                <p>{{$detail->date}} @ {{$detail->time_from}} - {{$detail->time_to}}
                {{$detail->venue}}</p>
              @endforeach
             

            </div>

          </div>
          @endforeach

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