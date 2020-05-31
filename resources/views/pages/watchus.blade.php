@extends('layouts.app')

@section('content')
<div class="hero-wrap js-fullheight">
    <div class="overlay"></div>
    <div id="particles-js"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Watch Us</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row">
    <div class="col-lg-4 col-md-12 mb-4">
  
      <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
  
          <!--Content-->
          <div class="modal-content">
  
            <!--Body-->
            <div class="modal-body mb-0 p-0">
  
              <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/OwhG2EqN32U"
                  allowfullscreen></iframe>
              </div>
            </div>
  
            <!--Footer-->
            @include('layouts.video_footer')

          </div>
          <!--/.Content-->
  
        </div>
      </div>
      <!--Modal: Name-->
  
      <a><img class="img-fluid z-depth-1" src="/img/video1.jpg" alt="video"  width="130%"
          data-toggle="modal" data-target="#modal1"></a>
  
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="col-lg-4 col-md-12 mb-4">
  
        <!--Modal: Name-->
        <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
    
            <!--Content-->
            <div class="modal-content">
    
              <!--Body-->
              <div class="modal-body mb-0 p-0">
    
                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vRpMk3OS_D0"
                    allowfullscreen></iframe>
                </div>
              </div>
    
              <!--Footer-->
              @include('layouts.video_footer')
  
            </div>
            <!--/.Content-->
    
          </div>
        </div>
        <!--Modal: Name-->
    
        <a><img class="img-fluid z-depth-1" src="/img/video2.jpg" alt="video"
            data-toggle="modal" data-target="#modal6"></a>
    
      </div>
      
      
  </section>

@endsection