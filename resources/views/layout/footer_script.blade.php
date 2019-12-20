  <!-- Main Footer Start -->
  
  <!-- Main JavaScript -->
  <script src="{{ url('assets/js/jquery.min.js') }}"></script>
  <script src="{{ url('assets/js/popper.min.js') }}"></script>
  <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ url('assets/js/bootstrap-dropdownhover.min.js') }}"></script>
  <script src="{{ url('assets/js/fontawesome-all.js') }}"></script>
  <script src="{{ url('assets/js/owl.carousel.min.js') }}"></script>
  <script src="{{ url('assets/twitter/jquery.tweet.js') }}"></script>
  <script src="{{ url('assets/js/jflickrfeed.min.js') }}"></script>
  <script src="{{ url('assets/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ url('assets/js/jquery.easing.min.js') }}"></script>
  <script src="{{ url('assets/js/jquery.counterup.min.js') }}"></script>
  <script src="{{ url('assets/js/jquery.easypiechart.min.js') }}"></script>
  <script src="{{ url('assets/js/jquery.appear.js') }}"></script>
  <script src="{{ url('assets/js/wow.min.js') }}"></script>

  <!-- JQuery Map Plugin -->
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script type="text/javascript" src="{{ url('assets/js/jquery.gmap.min.js') }}"></script>    
  

  <!-- REVOLUTION JS FILES -->
  <script type="text/javascript" src="{{ url('assets/rev-slider/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/rev-slider/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

  <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->  
  <script type="text/javascript" src="{{ url('assets/rev-slider/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/rev-slider/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/rev-slider/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/rev-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/rev-slider/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/rev-slider/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/rev-slider/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/rev-slider/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>

  <script src="{{ url('assets/js/site-custom.js') }}"></script>   

  <script type="text/javascript">

    var tpj=jQuery;
    
    var revapi1078;
    tpj(document).ready(function() {
      if(tpj("#rev_slider_1078_1").revolution == undefined){
        revslider_showDoubleJqueryError("#rev_slider_1078_1");
      }else{
        revapi1078 = tpj("#rev_slider_1078_1").show().revolution({
          sliderType:"standard",
jsFileLocation:"revolution/js/",
          sliderLayout:"fullscreen",
          dottedOverlay:"none",
          delay:9000,
          navigation: {
            keyboardNavigation:"off",
            keyboard_direction: "horizontal",
            mouseScrollNavigation:"off",
            mouseScrollReverse:"default",
            onHoverStop:"off",
            touch:{
              touchenabled:"on",
              swipe_threshold: 75,
              swipe_min_touches: 1,
              swipe_direction: "horizontal",
              drag_block_vertical: false
            }
            ,
            arrows: {
              style:"metis",
              enable:true,
              hide_onmobile:true,
              hide_under:600,
              hide_onleave:true,
              hide_delay:200,
              hide_delay_mobile:1200,
              //tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
              left: {
                h_align:"left",
                v_align:"center",
                h_offset:30,
                v_offset:0
              },
              right: {
                h_align:"right",
                v_align:"center",
                h_offset:30,
                v_offset:0
              }
            }
            ,
            bullets: {
              style: 'hades',
              tmp: '<span class="tp-bullet-image"></span>',
              enable:false,
              hide_onmobile:true,
              hide_under:600,
              //style:"metis",
              hide_onleave:true,
              hide_delay:200,
              hide_delay_mobile:1200,
              direction:"horizontal",
              h_align:"center",
              v_align:"bottom",
              h_offset:0,
              v_offset:30,
              space:5,
              //tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title"></span>'
            }
          },
          viewPort: {
            enable:true,
            outof:"pause",
            visible_area:"80%",
            presize:false
          },
          responsiveLevels:[1240,1024,778,480],
          visibilityLevels:[1240,1024,778,480],
          gridwidth:[1240,1024,778,480],
          gridheight:[600,600,500,400],
          lazyType:"none",
          parallax: {
            type:"mouse",
            origo:"slidercenter",
            speed:2000,
            levels:[2,3,4,5,6,7,12,16,10,50,47,48,49,50,51,55],
            type:"mouse",
          },
          shadow:0,
          spinner: 'spinner2',
          stopLoop:"off",
          stopAfterLoops:-1,
          stopAtSlide:-1,
          shuffle:"off",
          autoHeight:"off",
          hideThumbsOnMobile:"off",
          hideSliderAtLimit:0,
          hideCaptionAtLimit:0,
          hideAllCaptionAtLilmit:0,
          debugMode:false,
          fallbacks: {
            simplifyAll:"off",
            nextSlideOnWindowFocus:"off",
            disableFocusListener:false,
          }
        });
      }
    }); /*ready*/
  </script> 