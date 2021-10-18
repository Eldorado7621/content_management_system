<div class="rev-slider-wrapper full-scr">

      <div id="rev-slider" class="rev-slider tp-simpleresponsive"  data-version="5.0">

        <ul>

        @foreach($banners as $banner)

          <li data-transition="fade">

            <img src="{{$banner->img}}" class="rev-slidebg" alt="">

            <!-- - - - - - - - - - - - - - Layer 1 - - - - - - - - - - - - - - - - -->

            <div class="tp-caption tp-resizeme scaption-white-large"
              data-x="['center','center','center','center']" data-hoffset="0"
              data-y="['middle','middle','middle','middle']" data-voffset="-50"
              data-whitespace="nowrap"
              data-frames='[{"delay":450,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
              data-responsive_offset="on"
              data-elementdelay="0.05" >{{$banner->caption}}
            </div>

            <!-- - - - - - - - - - - - - - End of Layer 1 - - - - - - - - - - - - - - - - -->

            <!-- - - - - - - - - - - - - - Layer 2 - - - - - - - - - - - - - - - - -->

            <div class="tp-caption tp-resizeme scaption-white"
              data-x="['center','center','center','center']" data-hoffset="0"
              data-y="['middle','middle','middle','middle']" data-voffset="30"
              data-whitespace="nowrap"
              data-frames='[{"delay":450,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
              data-responsive_offset="on"
              data-elementdelay="0.05" ><p>Learn how you can get involved</p>
            </div>

            <!-- - - - - - - - - - - - - - End of Layer 2 - - - - - - - - - - - - - - - - -->

            <!-- - - - - - - - - - - - - - Layer 3 - - - - - - - - - - - - - - - - -->

            <div class="tp-caption tp-resizeme scaption-white"
              data-x="['center','center','center','center']" data-hoffset="0"
              data-y="['middle','middle','middle','middle']" data-voffset="120"
              data-whitespace="nowrap"
              data-frames='[{"delay":750,"speed":2000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
              data-responsive_offset="on"
              data-elementdelay="0.05" >
              <a href="#" class="btn btn-big btn-style-7">Serve with us</a>
            </div>

            <!-- - - - - - - - - - - - - - End of Layer 3 - - - - - - - - - - - - - - - - -->

          </li>
          @endforeach

         

        </ul>

      </div>

    </div>