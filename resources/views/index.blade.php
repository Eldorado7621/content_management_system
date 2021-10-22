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

    <!-- - - - - - - - - - - - - - Revolution Slider - - - - - - - - - - - - - - - - -->

    @include('includes/slider')

    <!-- - - - - - - - - - - - - - End of Slider - - - - - - - - - - - - - - - - -->
    
    <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

    <div id="content">
      
      <!-- Page section -->
      <div class="page-section">
        
        <div class="container wide">
          
          <div class="row row-wide align-items-center">
            <div class="col-md-6">
              
              <div class="video-holder">
                <a href="https://www.youtube.com/embed/_kjSK-PcU9o?rel=0&amp;showinfo=0&amp;autohide=2&amp;controls=0&amp;playlist=J2Y_ld0KL-4&amp;enablejsapi=1" class="video-btn" data-fancybox="video"></a>
                <img src="dp/images/660x392_img1.jpg" alt="">
              </div>

            </div>
            <div class="col-md-6">
              
            @foreach($about as $about)
              <div class="pre-title color2">Shortly About Us</div>
              <h2 class="title2">{{$about->title}}</h2>
              <p>{{$about->message}}</p>
            </div>
            @endforeach
          </div>

        </div>

      </div>

      <div class="icons-box style-2 flex-row no-gutters item-col-4">

        <!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->        
        <div class="icons-wrap">

          <div class="bg-img" data-bg="dp/images/480x336_bg1.jpg"></div>
          <div class="icons-item">
            <div class="item-box">
              <h3 class="icons-box-title"><a href="#">Vision Statement</a></h3>
              <p>Introduction to our church Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor. Mauris fermentum</p>
              <div class="hidden-area">
                <a href="#" class="btn btn-style-3">Read More</a>
              </div>
            </div>
          </div>

        </div>

        <!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->        
        <div class="icons-wrap">
          
          <div class="bg-img" data-bg="dp/images/480x336_bg2.jpg"></div>
          <div class="icons-item">
            <div class="item-box">
              <h3 class="icons-box-title"><a href="#">Mision Statement</a></h3>
              <p>Become a part of the story</p>
              <div class="hidden-area">
                <a href="#" class="btn btn-style-3">Read More</a>
              </div>
            </div>
          </div>

        </div>

        <!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->        
        <div class="icons-wrap">
          
          <div class="bg-img" data-bg="dp/images/480x336_bg3.jpg"></div>
          <div class="icons-item">
            <div class="item-box">
              <h3 class="icons-box-title"><a href="#">Monthly Theme</a></h3>
              @foreach($theme as $theme)
              <p>{{$theme->created_at,date('m')}}-{{$theme->title}}</p>
              <div class="hidden-area">
                <a href="#" class="btn btn-style-3">Read More</a>
              </div>
              @endforeach
            </div>
          </div>

        </div>

        <!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->        
        <div class="icons-wrap">
          
          <div class="bg-img" data-bg="dp/images/480x336_bg4.jpg"></div>
          <div class="icons-item">
            <div class="item-box">
              <h3 class="icons-box-title"><a href="#">Livestream</a></h3>
              <p>Join our Livestream</p>
              <div class="hidden-area">
                <a href="#" class="btn btn-style-3">Join</a>
              </div>
            </div>
          </div>

        </div>

      </div>

      <!-- Page section -->
      <div class="page-section">
        
        <div class="container wide">
          
          <h2 class="section-title align-center">Recent Sermons</h2>
          
          <!-- Entries -->
          <div class="entry-box flex-row item-col-3">
            
            <!-- Entry -->
            @foreach($sermon as $sermon)
            <div class="entry-col">

              <div class="entry">
                    
                <!-- - - - - - - - - - - - - - Entry attachment - - - - - - - - - - - - - - - - -->
                <div class="thumbnail-attachment">
                  <a href="#"><img src="{{$sermon->thumbnail}}" alt="" width="100" height="170"></a>
                </div>
                
                <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->
                <div class="entry-body">
                      
                  <h5 class="entry-title"><a href="#">{{$sermon->title}}</a></h5>
                  <div class="entry-meta">
                    
                    <span>on</span>
                    <time class="entry-date" datetime="2018-03-18">{{$sermon->created_at->format('d-M-Y')}}</time>
                    <span>by</span>
                    <a href="#" class="entry-cat">{{$sermon->preacher}}</a>
                    
                  </div>
                  <div class="entry-action">
                    
                   <audio controls>
                                        
                       <source src="{{$sermon->file}}" type="audio/mpeg">
                    </audio>

                  </div>
                      
                </div>
                      
              </div>

            </div>
            @endforeach


          </div>

          <div class="align-center">
            <a href="{{route('sermons_page')}}" class="btn btn-small btn-style-4">More Sermons</a>
          </div>

        </div>

      </div>
      
      <!-- Page section -->
      <div class="page-section size2 parallax-section" data-bg="dp/images/1920x800_bg3.jpg">
          
        <div class="container wide">
          
          
                <h3 class="" data-to="" data-speed="1500" style="color:white;text-align:center;">And they overcame him by the blood of the Lamb...</h3>
                <p style="color:white;text-align:center;"> Rev 12:11</p>
              </div>
            </div>

      
      <!-- Page section -->
      <div class="half-bg-col size2 count-event two-cols">

        <div class="img-col-left"><div class="col-bg left-bg" data-bg="dp/images/960x728_bg1.jpg"></div></div>

        <div class="container wide">

          <div class="row align-items-center">

            <div class="col-lg-6 left-col">
              
              <div class="event-holder">

                <div class="pre-title">Next Event in:</div>
                
                @if($upcoming_event !=null)
                <!-- Events area -->
                <div class="event-box">
                  
                  <!-- Events area -->
                  <div class="event">
                    
                    <div class="event-body">
                    @foreach($upcoming_event->event_details as $detail)
                    <h3 class="event-title">{{$detail->title}}</h3>

                      <h4 class="event-minister">with- {{$detail->minister}} </h4>
                      
                      <p class="e-info">{{$detail->date}}- @ {{$detail->time_from}}- - {{$detail->time_to}}- <br>
                      {{$detail->venue}}-</p>

                      @endforeach
                    </div>
                
                    
                
                  </div>
                
                </div>
                @endif
                
              </div>

            </div>
            <div class="col-lg-6 right-col">

              <h2 class="section-title">Upcoming Events</h2>
              
              <!-- Events area -->
              <div class="event-box style-2">
                
                <!-- Event -->
                @if($upcoming_event !=null)
                <div class="event">

                  <div class="event-date">
                    <h3 class="numb">{{ substr(date('F', strtotime($upcoming_event->from)),0,3)}}</h3>
                    <h6 class="month">{{date('d', strtotime($upcoming_event->from))}}</h6>

                  </div>
                  <div class="event-body">
                    
                    <h5 class="event-title">{{$upcoming_event->theme}} </h5>
                   
                  </div>
                </div>
                @endif

                
                

              </div>

              <a href="{{route('upcoming_event')}}" class="btn btn-small btn-style-4">More Events</a>

            </div>

          </div>

        </div>

      </div>
      
      <!-- Page section -->
      <div class="page-section-bg parallax-section" data-bg="dp/images/1920x900_bg.jpg">
          
        <div class="container">
        
          <div class="carousel-type-1">
          
            <div class="owl-carousel testimonial-holder style-2" data-max-items="1" data-autoplay="true">
          
              <!-- Slide -->       
              @foreach($testimonys as $testimony)           
                       
              <div class="item-carousel">
                <!-- Carousel Item -->                  
                <!-- - - - - - - - - - - - - - Testimonial - - - - - - - - - - - - - - - - -->
                <div class="testimonial">
                  
                  <blockquote>
                   <p>{{$testimony->testimony}}</p>
                </blockquote>
                  
                  <div class="author-box">
                    
                    <div class="author-info">
                      <div class="author">{{$testimony->name}}</div>
                      <a href="#" class="author-position">{{$testimony->proffession}}</a>
                    </div>

                  </div>
          
                </div>
                <!-- /Carousel Item --> 
              </div>
              <!-- /Slide -->
              @endforeach

              <!-- Slide -->                  
              <div class="item-carousel">
                <!-- Carousel Item -->                  
                <!-- - - - - - - - - - - - - - Testimonial - - - - - - - - - - - - - - - - -->
                <div class="testimonial">
                  
                  <blockquote>
                    <p>Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in. </p>
                  </blockquote>
                  
                  <div class="author-box">
                    
                    <div class="author-info">
                      <div class="author">Marta Healy</div>
                      <a href="#" class="author-position">Painter</a>
                    </div>

                  </div>
          
                </div>
                <!-- /Carousel Item --> 
              </div>
              <!-- /Slide -->
          
            </div>

          </div>

        </div>

      </div>

      <!-- Page section -->
      <div class="page-section">
        
        <div class="container wide">
          
          <div class="title-holder align-center">
            
            <div class="pre-title color2">Get Involved</div>
            <h2 class="section-title">Our Ministries</h2>

          </div>
          
          <div class="icons-box style-2 type-2 flex-row item-col-3">

            <div class="fx-col">
              
              <!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->        
              <div class="icons-wrap">

                <div class="bg-img" data-bg="dp/images/430x420_img1.jpg"></div>

                <div class="icons-item">
                  <div class="item-box">
                    <h4 class="icons-box-title"><a href="#">Kids</a></h4>
                    <p>Ages 1 - 12</p>
                  </div>
                </div>

              </div>

            </div>

            <div class="fx-col">
              
              <!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->        
              <div class="icons-wrap">
                
                <div class="bg-img" data-bg="dp/images/430x420_img2.jpg"></div>

                <div class="icons-item">
                  <div class="item-box">
                    <h4 class="icons-box-title"><a href="#">Students</a></h4>
                    <p>Grade 6 - 12</p>
                  </div>
                </div>

              </div>

            </div>

            <div class="fx-col">
              
              <!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->        
              <div class="icons-wrap">
                
                <div class="bg-img" data-bg="dp/images/430x420_img3.jpg"></div>

                <div class="icons-item">
                  <div class="item-box">
                    <h4 class="icons-box-title"><a href="#">Worship</a></h4>
                    <p>Worship Ministry</p>
                  </div>
                </div>

              </div>

            </div>

            <div class="fx-col">
              
              <!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->        
              <div class="icons-wrap">
                
                <div class="bg-img" data-bg="dp/images/430x420_img4.jpg"></div>

                <div class="icons-item">
                  <div class="item-box">
                    <h4 class="icons-box-title"><a href="#">Women</a></h4>
                    <p>Women Ministry</p>
                  </div>
                </div>

              </div>

            </div>

            <div class="fx-col">
              
              <!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->        
              <div class="icons-wrap">
                
                <div class="bg-img" data-bg="dp/images/430x420_img5.jpg"></div>

                <div class="icons-item">
                  <div class="item-box">
                    <h4 class="icons-box-title"><a href="#">Missions</a></h4>
                    <p>Missions & Causes</p>
                  </div>
                </div>

              </div>

            </div>

            <div class="fx-col">
              
              <!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->        
              <div class="icons-wrap">
                
                <div class="bg-img" data-bg="dp/images/430x420_img6.jpg"></div>

                <div class="icons-item">
                  <div class="item-box">
                    <h4 class="icons-box-title"><a href="#">LifeGroups</a></h4>
                    <p>Find Your Fit</p>
                  </div>
                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

      <!-- Page section -->
      <div class="page-section-bg parallax-section" data-bg="dp/images/1920x800_bg4.jpg">
        
        <div class="container wide">
          
          <div class="row">
            <div class="col-md-6">
              
              <div class="act align-center">
                
                <h3 class="section-title-2 color2"><b>When the day of Pentecost came, the believers were all together in one place.</b></h3>
                <p><b>Acts 2:1</b></p>

              </div>

            </div>
            <div class="col-md-6"></div>
          </div>

        </div>

      </div>

      <div class="call-out half-section">

        <div class="call-out-col">

          <div class="bg-img" data-bg="dp/images/960x392_bg1.jpg"></div>
          
          <h2 class="call-title">Need Prayer?</h2>
          <p>No matter what you’re facing, <br> we’d love to pray with you! </p>
          <a href="#" class="btn btn-style-7 btn-big">Ask For prayer</a>

        </div>
        <div class="call-out-col">

          <div class="bg-img" data-bg="dp/images/960x392_bg2.jpg"></div>
          
          <h2 class="call-title">Want to Help?</h2>
          <p>Your financial support is very important <br> for our global projects.</p>
          <a href="#" class="btn btn-style-7 btn-big">Give Online</a>

        </div>

      </div>

  

      <!-- Google map -->
      <div class="map-section">

        <div id="googleMap" class="map-container"></div>

      </div>
      
      <!-- Page section -->
      <div class="page-section no-offset">
        
        <div class="container wide">
          
          <div class="our-info">
        @foreach($contacts as $contact)
            <div class="info-item">
              <i class="licon-telephone"></i>
              <div class="wrapper">
                <p content="telephone=no">{{$contact->phn_no}}</p>
              </div>
            </div>

            <div class="info-item">
              <i class="licon-map-marker"></i>
              <div class="wrapper">
                <p>{{$contact->address}} </p>
              </div>
            </div>

            <div class="info-item">
              <i class="licon-envelope"></i>
              <div class="wrapper">
                <p><a href="#">{{$contact->email}}</a></p>
              </div>
            </div>
            @endforeach

          </div>

        </div>

      </div>
      
    </div>

    <!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->

    <!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->



    @include("includes/footer")
    <!-- - - - - - - - - - - - - end Footer - - - - - - - - - - - - - - - -->

  </div>

  <!-- - - - - - - - - - - - end Wrapper - - - - - - - - - - - - - - -->

 @include("includes/plugins")
  
</body>
</html>